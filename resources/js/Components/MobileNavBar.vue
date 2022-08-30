<!-- <script setup>
import { useCartStore } from "@/store/cart";
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

const navMenu = document.querySelector("#navMenu");
const menu = document.querySelector("#menu");
const mobileCashier = document.querySelector("#mobileCashier");

const showMenu = function () {
    navMenu.classList.toggle("active");
    menu.classList.toggle("w-3/4");
    menu.classList.toggle("sm:w-2/4");
    menu.classList.toggle("w-0");
};
const showCashier = function () {
    mobileCashier.classList.toggle("hidden");
    mobileCashier.classList.toggle("flex");
};

const cartStore = useCartStore();
</script> -->

<script>
import { useCartStore } from "@/store/cart";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    data() {
        return {
            navMenu: document.querySelector("#navMenu"),
            menu: document.querySelector("#menu"),
            mobileCashier: document.querySelector("#mobileCashier"),
            cartStore: useCartStore(),
        };
    },
    components: {
        Link,
    },
    methods: {
        showMenu: function () {
            navMenu.classList.toggle("active");
            menu.classList.toggle("w-3/4");
            menu.classList.toggle("sm:w-2/4");
            menu.classList.toggle("w-0");
        },
        showCashier: function () {
            mobileCashier.classList.toggle("hidden");
            mobileCashier.classList.toggle("flex");
        },
    },
};
</script>

<template>
    <div
        class="w-full top-0 h-14 md:hidden p-4 px-8 z-40 items-center flex flex-row bg-white text-xl shadow justify-between"
    >
        <div class="">
            <div id="navMenu" @click="showMenu()" class="z-50 sticky">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="w-[26%] sm:w-[24%]">
            <Link href="/">
                <img
                    src="/storage/assets/bouff_logo_long_black.svg"
                    alt="Logo Bouff"
                    class=""
                />
            </Link>
        </div>

        <button @click="showCashier()" class="relative flex items-center">
            <i class="fi-sr-shopping-cart"></i>
            <span
                v-if="cartStore.totalCart > 0"
                class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none transform translate-x-1/2 -translate-y-1/2 bg-red-600 text-white rounded-full"
                >{{ cartStore.totalCart }}</span
            >
        </button>
    </div>
</template>

<style>
#navMenu > span {
    display: block;
    width: 22px;
    height: 3px;
    border-radius: 99999px;
    background-color: black;
}

#navMenu > span:not(:last-child) {
    margin-bottom: 6px;
}

#navMenu,
#navMenu > span {
    transition: all 0.2s ease-in-out;
}

#navMenu.active {
    transition-delay: 0.1s;
    transform: rotate(45deg);
}

#navMenu.active > span:nth-child(2) {
    width: 0;
}

#navMenu.active > span:nth-child(1),
#navMenu.active > span:nth-child(3) {
    transition-delay: 0.2s;
}

#navMenu.active > span:nth-child(1) {
    transform: translateY(9px);
}

#navMenu.active > span:nth-child(3) {
    transform: translateY(-9px) rotate(90deg);
}
</style>
