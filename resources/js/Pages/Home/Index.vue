<script setup>
import UserDashboard from "@/Layouts/UserDashboard.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Eatery from "@/Components/Eatery.vue";
import Food from "@/Components/Food.vue";
import Category from "@/Components/Category.vue";

const props = defineProps({
    eateries: Object,
    food_categories: Object,
    foods: Object,
});
</script>

<template>
    <Head title="Accueil" />
    <UserDashboard>
        <div class="px-6 pb-8">
            <div class="h-full space-y-2">
                <div>
                    <h2 class="pt-2 bg-bouff-primaryfor text-2xl font-bold">
                        CATEGORIE
                    </h2>
                    <div class="flex justify-center">
                        <ul
                            class="flex flex-row overflow-x-scroll items-end space-x-6 text-secondarytwo py-2"
                        >
                            <Category
                                v-for="category in food_categories"
                                :key="category.id"
                                :category="category"
                            />
                        </ul>
                    </div>
                </div>
                <div>
                    <h2 class="bg-bouff-primaryfor text-2xl font-bold">
                        RESTAURANT POPULAIRE
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
                    <h2 class="bg-bouff-primaryfor text-2xl font-bold">
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

<style scoped>
::-webkit-scrollbar {
    width: 5px;
    height: 5px;
}

::-webkit-scrollbar-track {
    background: #f3971910;
}

::-webkit-scrollbar-thumb {
    background: #f3971999;
    border-radius: 999px;
}

::-webkit-scrollbar-thumb:hover {
    background: #f39719;
}
</style>
