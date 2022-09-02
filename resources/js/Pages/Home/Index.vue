<script setup>
import UserDashboard from "@/Layouts/UserDashboard.vue";
import Loading from "@/Components/Loading.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Eatery from "@/Components/Eatery.vue";
import Food from "@/Components/Food.vue";
import { computed, onMounted } from "vue";

const props = defineProps({
    eateries: Object,
    food_categories: Object,
    foods: Object,
});

/* const itIs = (e) => {
    return e.eatery_id == 1;
};

if (props.food) {
    const eatone = computed(() => {
        return props.food.filter((foo) => foo.eatery_id == 2);
    });
} */
</script>

<template>
    <Head title="Accueil" />
    <UserDashboard>
        <div class="px-6 pb-8">
            <div class="h-full space-y-6">
                <!--  <div>
                    <h2
                        class="pt-2 top-0 bg-bouff-primaryfor text-2xl font-bold"
                    >
                        CATEGORIE
                    </h2>
                    <div class="flex justify-center items-center">
                        <ul
                            class="flex overflow-x-scroll sm:flex-row sm:flex-wrap py-4 text-white gap-4"
                        >
                            <li
                                v-for="cat in food_categories"
                                :key="cat.id"
                                class="rounded-full p-6 font-bold bg-bouff-primaryone"
                            >
                                {{ cat.name }}
                            </li>
                            <li
                                v-for="cat in food_categories"
                                :key="cat.id"
                                class="rounded-full p-6 font-bold bg-bouff-primaryone"
                            >
                                {{ cat.name }}
                            </li>
                            <li
                                v-for="cat in food_categories"
                                :key="cat.id"
                                class="rounded-full p-6 font-bold bg-bouff-primaryone"
                            >
                                {{ cat.name }}
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div>
                    <h2
                        class="pt-2 top-0 bg-bouff-primaryfor text-2xl font-bold"
                    >
                        RESTAURANT POPULAIRE
                    </h2>
                    <div class="flex items-center justify-center">
                        <ul
                            class="flex flex-row flex-wrap overflow-auto py-4 text-white gap-4"
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
                    <h2
                        class="pt-2 top-0 bg-bouff-primaryfor text-2xl font-bold"
                    >
                        BOUFF
                    </h2>
                    <div class="flex justify-center items-center">
                        <ul
                            class="flex overflow-x-scroll sm:flex-row sm:flex-wrap py-4 text-white gap-4"
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
