<script setup>
defineProps({
    type: String,
});
</script>

<template>
    <div v-if="type == ''" class="flex justify-center">
        <img
            src="/storage/assets/bouff_logo_long_black.svg"
            alt=""
            class="w-[60%]"
        />
        <img
            src="/storage/assets/bouff_logo_short.svg"
            alt=""
            class="flex lg:hidden h-8 hover:animate-spin"
        />
    </div>
    <div v-else-if="type == ''" class="flex justify-center">
        <svg class=""></svg>
        <svg class=""></svg>
    </div>
    <div v-else class="flex justify-center">
        <img
            src="/storage/assets/bouff_logo_long_black.svg"
            alt=""
            class="w-[60%]"
        />
    </div>
</template>
