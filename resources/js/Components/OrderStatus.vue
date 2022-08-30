<script setup>
defineProps({
    state: String,
});
</script>

<template>
    <span
        v-if="state === 'Treatment'"
        class="bg-bouff-primarytwo rounded-md whitespace-nowrap inline px-3 py-2 font-semibold text-white"
    >
        Traiter
    </span>
    <span
        v-if="state === 'Preparation'"
        class="bg-bouff-primaryone rounded-md whitespace-nowrap inline px-3 py-2 font-semibold text-white"
    >
        Préparer
    </span>
    <span
        v-if="state === 'Retrieve'"
        class="bg-bouff-secondarytwo rounded-md whitespace-nowrap inline px-3 py-2 font-semibold text-white"
    >
        Récupérer
    </span>
    <span
        v-if="state === 'Delivered'"
        class="bg-bouff-secondarytwo opacity-50 rounded-md whitespace-nowrap inline px-3 py-2 font-semibold text-white"
    >
        Livrer
    </span>
</template>
