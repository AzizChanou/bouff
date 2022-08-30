<script setup>
import { useCartStore } from "@/store/cart.js";

defineProps({
    food: Object,
});

const cartStore = useCartStore();

const truncate = function (string, limit) {
    // if (string.length <= limit) {
    if (string === null) {
        return "Pas de description";
    } else {
        return string.slice(0, limit) + "...";
    }
};
</script>

<template>
    <li class="flex-shrink items-center justify-between px-4 py-2">
        <div class="flex flex-row items-center space-x-4">
            <img
                :src="food.picture_path"
                alt=""
                class="object-cover object-center rounded h-20 w-3/12 sm:w-2/12 lg:w-1/12"
            />
            <div class="flex flex-col space-y-2 w-full">
                <p>
                    {{ food.name }} -
                    {{ truncate(food.description, 30) }}
                </p>
                <div class="flex justify-between items-center">
                    <h5 class="text-bouff-primaryone">{{ food.price }} CFA</h5>
                    <div class="flex font-bold space-x-6 items-center">
                        <button
                            @click="cartStore.addFoodToCart(food)"
                            class="px-2 py-1 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                        >
                            <span class="pr-2">Ajouter</span>
                            <i class="fi-sr-shopping-cart-add"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </li>
</template>
