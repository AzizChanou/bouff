<script setup>
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    category: Object,
});

const truncate = function (string, limit) {
    if (string.length > limit) {
        return string.slice(0, limit) + "...";
    } else {
        return string;
    }
};
</script>

<template>
    <li
        class="flex flex-col items-center min-w-[20%] w-[30%] max-w-[40%] hover:scale-95 duration-300"
    >
        <Link :href="route('home.foodcategory', category.id)" class="w-full">
            <img
                :src="category.category_logo_path"
                class="rounded-full min-w-full min-h-full w-32"
                :alt="category.name"
            />
        </Link>
        <span class="whitespace-nowrap font-medium mt-2">
            {{ truncate(category.name, 8) }}</span
        >
    </li>
</template>