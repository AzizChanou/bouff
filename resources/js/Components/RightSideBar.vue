<script setup>
import { shallowRef } from "vue";
import Cashier from "./Cashier.vue";
import Tracking from "./Tracking.vue";

const comp = shallowRef(Cashier);
const show = (components) => {
    comp.value = components;
    return 0;
};
</script>

<template>
    <div
        id="caisse"
        class="hidden w-full md:w-[28%] lg:w-[26%] h-full pt-10 pb-2 md:flex flex-col space-y-2"
    >
        <div class="flex flex-row h-[5%]">
            <button
                @click="show(Cashier)"
                class="text-center border-bouff-primarytree border-b-8 pb-1 w-1/2 hover:border-bouff-primarytwo duration-300 font-bold"
                :class="{ 'border-bouff-primarytwo': comp === Cashier }"
            >
                Caisse
            </button>
            <button
                @click="show(Tracking)"
                class="text-center border-bouff-primarytree border-b-8 pb-1 w-1/2 hover:border-bouff-primarytwo duration-300 font-bold"
                :class="{ 'border-bouff-primarytwo': comp === Tracking }"
            >
                Suivi
            </button>
        </div>
        <Component :is="comp" />
    </div>
</template>
