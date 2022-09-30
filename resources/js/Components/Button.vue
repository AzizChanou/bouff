<script setup>
import { useModalStore } from "@/store/modal";

defineProps({
    name: String,
    text: String,
    type: {
        default: "button",
        type: String,
    },
});
</script>

<template>
    <button
        v-if="name === 'default'"
        :type="type"
        class="font-medium text-white p-2 bg-bouff-secondarytwo rounded hover:bg-bouff-secondarytwo/80 duration-500"
    >
        {{ text }}
    </button>
    <button
        v-else-if="name === 'yes'"
        :type="type"
        class="font-medium text-white p-2 bg-bouff-primaryone rounded hover:bg-bouff-secondarytwo duration-500"
    >
        {{ text }}
    </button>
    <button
        v-else-if="name === 'no'"
        :type="type"
        class="font-medium text-white p-2 bg-red-500 rounded hover:bg-red-700 duration-500"
    >
        {{ text }}
    </button>
</template>
