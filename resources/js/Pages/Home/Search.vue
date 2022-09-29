<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";
import Food from "@/Components/Food.vue";

defineProps({});
</script>

<template>
    <Head title="" />
    <UserDashboard>
        <div class="px-6 pb-8">
            <div class="w-full h-full">
                <h2 class="pt-2 top-0 bg-bouff-primaryfor text-2xl font-bold">
                    <!-- Recherche -->
                </h2>
                <div class="flex flex-row items-center">
                    <!-- <i
                        class="fi-sr-search p-2 pl-4 bg-gray-100 border-y border-l rounded-l-full"
                    ></i> -->
                    <input
                        name=""
                        id=""
                        @keydown.enter=""
                        placeholder="Rechercher..."
                        class="p-3 bg-bouff-primarytree/30 border-y outline-none border-l rounded-l-full w-full text-gray-500 text-xs"
                    />
                    <i
                        class="fi-sr-search p-2 pr-4 bg-bouff-primarytree/30 border-y border-r rounded-r-full"
                    ></i>
                </div>
                <div class="flex items-center justify-center">
                    <ul
                        class="grid md:grid-cols-2 xl:grid-cols-3 py-4 text-white gap-4"
                    ></ul>
                </div>
            </div>
        </div>
    </UserDashboard>
</template>
