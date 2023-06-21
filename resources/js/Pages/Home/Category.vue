<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";
import Food from "@/Components/Food.vue";

defineProps({
    category_foods: Object,
    category_name: String,
});
</script>

<template>

    <Head :title="category_name" />
    <UserDashboard>
        <div class="px-6 pb-8">
            <div class="w-full h-full">
                <h2 class="pt-2 top-0 bg-bouff-primaryfor text-2xl font-bold">
                    {{ category_name }}
                </h2>
                <div class="flex items-center justify-center">
                    <ul
                        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 py-4 w-full text-white gap-4">
                        <Food v-for="food in category_foods" :key="food.id" :food="food" />
                    </ul>
                </div>
            </div>
        </div>
    </UserDashboard>
</template>
