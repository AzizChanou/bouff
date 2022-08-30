<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div
        class="w-full fixed bottom-0 flex border-y-2 h-14 md:hidden p-4 items-center flex-row bg-white shadow justify-around text-xl"
    >
        <Link
            :href="route('home.index')"
            :class="{ 'text-bouff-primaryone': $page.url === '/' }"
            ><i class="fi-sr-home"></i
        ></Link>
        <!-- <Link
            :href="route('user.index')"
            :class="{ 'text-bouff-primaryone': $page.url === '/search' }"
            ><i class="fi-sr-search"></i
        ></Link> -->
        <Link
            :href="route('order.user')"
            :class="{ 'text-bouff-primaryone': $page.url === '/commandes' }"
            ><i class="fi-sr-receipt"></i
        ></Link>
        <Link
            :href="route('user.index')"
            :class="{ 'text-bouff-primaryone': $page.url === '/user' }"
            ><i class="fi-sr-user"></i
        ></Link>
    </div>
</template>
