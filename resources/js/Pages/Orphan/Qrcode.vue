<script>
import { Head } from "@inertiajs/inertia-vue3";
import DelivererDashboard from "@/Layouts/DelivererDashboard.vue";
import { QrcodeStream } from "vue-qrcode-reader";

export default {
    data() {
        return {
            isValid: undefined,
            camera: "auto",
            result: null,
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

        async onDecode(content) {
            this.result = content;
            this.turnCameraOff();

            // pretend it's taking really long
            await this.timeout(3000);
            this.isValid = content.startsWith("https");

            // some more delay, so users have time to read the message
            await this.timeout(2000);

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
            <ul class="h-full divide-y">
                <div>
                    <p class="decode-result">
                        Last result: <b>{{ result }}</b>
                    </p>

                    <QrcodeStream
                        :camera="camera"
                        @decode="onDecode"
                        @init="onInit"
                    >
                        <div
                            v-if="validationSuccess"
                            class="validation-success"
                        >
                            This is a URL
                        </div>

                        <div
                            v-if="validationFailure"
                            class="validation-failure"
                        >
                            This is NOT a URL!
                        </div>

                        <div
                            v-if="validationPending"
                            class="validation-pending"
                        >
                            Long validation in progress...
                        </div>
                    </QrcodeStream>
                </div>
                <div class="h-28 md:h-0"></div>
            </ul>
        </div>
    </DelivererDashboard>
</template>
