<script setup>
import { useCartStore } from "@/store/cart";

const props = defineProps({
    food: Object,
});

const cartStore = useCartStore();
</script>

<template>
    <li
        class="w-full min-w-fit sm:min-w-0 sm:w-[48%] lg:w-[30%] flex flex-col rounded shadow"
    >
        <div>
            <img
                :src="food.picture_path"
                alt=""
                class="object-cover object-center w-full h-40 rounded-t"
            />
        </div>
        <div
            class="flex flex-col truncate text-black font-medium text-xl m-1 pt-2 px-2"
        >
            {{ food.name }}
        </div>
        <div
            class="flex flex-row items-center justify-between text-bouff-secondarytwo text-sm m-1 px-2"
        >
            <span>{{ food.price }} CFA</span>
            <button
                @click="cartStore.addFoodToCart(food)"
                class="px-2 py-1 mb-2 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
            >
                <span class="pr-2">Ajouter</span>
                <i class="fi-sr-shopping-cart-add"></i>
            </button>
        </div>
        <!--
        <div
            class="flex font-bold items-center justify-between w-full m-1 p-2"
        ></div> -->
    </li>
</template>
