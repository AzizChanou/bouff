<script setup>
import { Link } from "@inertiajs/inertia-vue3";

const navMenu = document.querySelector("navMenu");
const menu = document.querySelector("#menu");
const currentYear = new Date().getFullYear();

const show = function () {
    navMenu.classList.toggle("active");
    menu.classList.toggle("w-3/4");
    menu.classList.toggle("sm:w-2/4");
    menu.classList.toggle("w-0");
};
</script>

<template>
    <div
        id="menu"
        class="transition-all ease-in-out duration-500 flex overflow-auto fixed top-0 z-10 left-0 h-full bg-bouff-primaryfor shadow-md flex-col md:hidden justify-between w-0"
    >
        <div class="p-8 py-20">
            <ul class="flex flex-col space-y-3 font-semibold divide-y-2">
                <Link
                    @click="show()"
                    :href="route('about')"
                    :class="{
                        'font-bold text-bouff-primaryone':
                            $page.url === 'apropos',
                    }"
                >
                    <li class="p-2">A propos</li>
                </Link>
                <Link
                    @click="show()"
                    :href="route('faqs')"
                    :class="{
                        'font-bold text-bouff-primaryone':
                            $page.url === '/faqs',
                    }"
                >
                    <li class="p-2">FAQs</li>
                </Link>
                <Link
                    @click="show()"
                    :href="route('cgu')"
                    :class="{
                        'font-bold text-bouff-primaryone': $page.url === '/CGU',
                    }"
                >
                    <li class="p-2">CGU</li>
                </Link>
                <Link
                    @click="show()"
                    :href="route('cgv')"
                    :class="{
                        'font-bold text-bouff-primaryone': $page.url === '/CGV',
                    }"
                >
                    <li class="p-2">CGV</li>
                </Link>
            </ul>
        </div>
        <div
            class="w-full p-4 text-sm text-bouff-secondarytree/50 flex flex-col text-center"
        >
            <span> Bouff v 0.0.1</span>
            <span class="text-center">
                &copy; {{ currentYear }} Bouff . Tous droits reservés.
            </span>
        </div>
    </div>
</template>
