<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";
import FoodEatery from "@/Components/FoodEatery.vue";
import { shallowRef } from "vue";

defineProps({
    eatery: Object,
    foods: Object,
});

const comp = shallowRef(FoodEatery);
const show = (components) => {
    comp.value = components;
    return 0;
};
</script>

<template>
    <Head :title="eatery.label" />
    <UserDashboard>
        <div class="flex flex-col space-y-4 pb-8 relative h-full">
            <div class="bg-cover relative">
                <img
                    class="object-cover object-top w-full h-[14.2rem]"
                    :src="eatery.picture_path"
                    alt="Flower and sky"
                />
                <div
                    class="bg-bouff-secondarytwo/30 absolute top-0 left-0 w-full"
                >
                    <div class="p-24">
                        <h2 class="text-white font-medium text-center text-3xl uppercase">
                            {{ eatery.label }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="flex flex-row justify-between">
                    <button
                        class="text-center border-b-8 border-bouff-primarytwo pb-1 w-full font-bold"
                    >
                        BOUFF
                    </button>
                    <!--  <button
                        @click="show(boisson)"
                        class="text-center border-b-8 border-bouff-primarytree pb-1 w-1/2 font-bold hover:border-bouff-primarytwo duration-300"
                        :class="{
                            'border-bouff-primarytwo': comp === 'boisson',
                        }"
                    >
                        Boisson
                    </button> -->
                </div>
                <div class="overflow-hidden">
                    <ul
                        v-if="comp === FoodEatery"
                        class="overflow-y-auto divide-y"
                    >
                        <FoodEatery
                            v-for="food in foods"
                            :key="food.id"
                            :food="food"
                        />
                        <div class="h-28 md:h-0"></div>
                    </ul>
                </div>
            </div>
        </div>
    </UserDashboard>
</template>
