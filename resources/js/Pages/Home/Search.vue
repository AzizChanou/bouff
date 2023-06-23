<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";
import Food from "@/Components/Food.vue";
import Eatery from "@/Components/Eatery.vue";
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    category_foods: Object,
    eateries: Object,
    foods: Object,
});

const query = ref(null);

const search = () => {
    Inertia.get(route("search"), { q: query.value });
};
</script>

<template>
    <Head :title="query || 'Recherche'" />
    <UserDashboard>
        <div class="px-6 mt-5 pb-8">
            <div class="h-full space-y-2">
                <h2 class="pt-2 top-0 bg-bouff-primaryfor text-2xl font-bold">
                    Recherche
                </h2>
                <div class="flex flex-row items-center">
                    <input
                        v-model="query"
                        @keydown.enter="search"
                        placeholder="Rechercher..."
                        class="p-3 bg-bouff-primarytree/30 border-y outline-none border-l rounded-l-full w-full text-gray-500 text-xs"
                    />
                    <i
                        class="fi-sr-search p-2 pr-4 bg-bouff-primarytree/30 border-y border-r rounded-r-full"
                    ></i>
                </div>
                <div>
                    <h2 class="pt-2 bg-bouff-primaryfor text-2xl font-bold">
                        RESTAURANT
                    </h2>
                    <div class="flex items-center justify-center">
                        <ul
                            class="w-full grid xs:grid-cols-2 xl:grid-cols-3 py-4 text-white gap-4"
                        >
                            <Eatery
                                v-for="eatery in eateries"
                                :key="eatery.id"
                                :eatery="eatery"
                            />
                        </ul>
                    </div>
                </div>
                <div>
                    <h2 class="pt-2 bg-bouff-primaryfor text-2xl font-bold">
                        BOUFF
                    </h2>
                    <div class="flex justify-center items-center">
                        <ul
                            class="overflow-x-scroll w-full flex flex-row sm:grid sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 py-4 text-white gap-4"
                        >
                            <Food
                                v-for="food in foods"
                                :key="food.id"
                                :food="food"
                            />
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </UserDashboard>
</template>
