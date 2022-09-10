<script>
import { Head } from "@inertiajs/inertia-vue3";
import DelivererDashboard from "@/Layouts/DelivererDashboard.vue";
import { QrcodeStream } from "vue3-qrcode-reader";
import { Inertia } from "@inertiajs/inertia";

export default {
    data() {
        return {
            isValid: undefined,
            camera: "auto",
            result: null,
            ok: undefined,
        };
    },

    components: { Head, QrcodeStream, DelivererDashboard },

    computed: {
        validationPending() {
            return this.isValid === undefined && this.camera === "off";
        },

        validationSuccess() {
            return this.isValid === true;
        },

        validationFailure() {
            return this.isValid === false;
        },
    },

    methods: {
        onInit(promise) {
            promise.catch(console.error).then(this.resetValidationState);
        },

        resetValidationState() {
            this.isValid = undefined;
        },
        delivered() {
            Inertia.get(route("order.delivered", this.result));
        },

        async onDecode(content) {
            this.result = content;
            this.turnCameraOff();

            await this.timeout(1000);

            this.isValid = content.startsWith("bouff__");

            if (this.isValid) {
                this.delivered();
            }

            this.turnCameraOn();
        },

        turnCameraOn() {
            this.camera = "auto";
        },

        turnCameraOff() {
            this.camera = "off";
        },

        timeout(ms) {
            return new Promise((resolve) => {
                window.setTimeout(resolve, ms);
            });
        },
    },
};
</script>
<template>
    <Head title="QR Code" />
    <DelivererDashboard>
        <div class="h-full">
            <h1 class="text-2xl px-6 font-bold font-sans">QR Code</h1>
            <div class="px-6 h-4/6 pt-6">
                <QrcodeStream
                    :camera="camera"
                    @decode="onDecode"
                    @init="onInit"
                >
                    <div
                        v-if="validationSuccess"
                        class="h-full flex flex-col items-center justify-center bg-bouff-primaryfor/80 text-bouff-primaryone text-center text-9xl"
                    >
                        <i class="fi-sr-check"></i>
                        <span
                            class="text-lg text-bouff-secondarytwo font-medium"
                            >Code valide, patienter un instant !</span
                        >
                    </div>

                    <div
                        v-if="validationFailure"
                        class="h-full text-center text-lg text-bouff-secondarytwo font-medium bg-bouff-primaryfor/60"
                    >
                        Code invalide, veuillez réesayer !
                    </div>

                    <div
                        v-if="validationPending"
                        class="h-full text-center text-lg text-bouff-secondarytwo font-medium bg-bouff-primaryfor/60"
                    >
                        Vérification en cours...
                    </div>
                </QrcodeStream>
                <div
                    class="text-center mt-4 text-bouff-secondarytwo text-lg font-bold"
                >
                    Scanner le code pour valider la livraison !
                </div>
            </div>
            <div class="h-28 md:h-0"></div>
        </div>
    </DelivererDashboard>
</template>
