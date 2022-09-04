<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import DelivererDashboard from "@/Layouts/DelivererDashboard.vue";
import QrcodeStream from "vue-qrcode-reader";

const order = defineProps({
    orders: Object,
});

const isValid = undefined;
const camera = "auto";
const result = null;

const onInit = (promise) => {
    promise.catch(console.error).then(resetValidationState);
};

const resetValidationState = () => {
    isValid = undefined;
};

/*  const   async onDecode= (content) =>{
      result = content
      turnCameraOff()

      // pretend it's taking really long
      await timeout(3000)
      isValid = content.startsWith('http')

      // some more delay; so users have time to read the message
      await timeout(2000)

      turnCameraOn()
    };
*/

const turnCameraOn = () => {
    camera = "auto";
};

const turnCameraOff = () => {
    camera = "off";
};

const timeout = (ms) => {
    return new Promise((resolve) => {
        window.setTimeout(resolve, ms);
    });
};

const currentYear = new Date().getFullYear();
</script>
<template>
    <Head title="QR Code" />
    <DelivererDashboard>
        <div class="h-full">
            <h1 class="text-2xl px-6 font-bold font-sans">QR Code</h1>
            <ul class="h-full divide-y">
                <div>
                    <p class="">
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
