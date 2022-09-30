<script setup>
import Button from "@/Components/Button.vue";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from "vue";
import VueQrcode from "vue-qrcode";

const orderId = ref();
const level = ref(0);

const props = defineProps({
    order: Object,
});

if (props.order) {
    switch (props.order.status) {
        case "Treatment":
            level = 1;
            break;
        case "Preparation":
            level = 5;
            break;
        case "Retrieve":
            level = 55;
            break;
        case "Delivered":
            level = 100;
            break;
        default:
            level = 0;
            break;
    }
}
</script>

<template>
    <div
        v-if="Object.order"
        class="flex flex-col items-center justify-between space-y-8"
    >
        <div class="flex flex-row justify-center">
            <VueQrcode
                :value="order.id"
                type="image/png"
                :width="10"
                :scale="5"
                :color="{ dark: 'blue', light: '#fff' }"
                :quality="1"
            />
        </div>
        <div class="flex flex-row justify-between space-x-6">
            <div class="bg-bouff-primarytree rounded-full">
                <div
                    class="bg-bouff-primaryone rounded-full flex items-center"
                    role="progressbar"
                    :style="'height: ' + level + '%'"
                >
                    <span class="text-xs text-white"> % </span>
                </div>
            </div>
            <ul class="space-y-24">
                <li>Preparation</li>
                <li>Recuperation</li>
                <li>Livraison</li>
            </ul>
        </div>
        <div class="justify-center flex">
            <Button name="yes" text="Livrer" />
        </div>
        <div class="h-28 md:h-2"></div>
    </div>
    <div v-else class="flex h-full justify-center items-center">
        <!--  <h1 class="text-xl text-center font-medium font-sans">
            Suivre une commande
        </h1>
        <div class="flex flex-row pt-3 space-x-4">
            <input
                type="text"
                v-model="orderId"
                class="rounded-md p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <Link
                as="button"
                :href="route('order.show', 75)"
                class="p-2 bg-bouff-primaryone text-white inline font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
            >
                Suivre
            </Link>
        </div>-->
        <p class="">Bientôt...</p>
    </div>
</template>
