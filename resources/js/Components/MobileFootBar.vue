<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <ul
        v-if="
            $page.props.auth.user && $page.props.auth.user.rule === 'deliverer'
        "
        class="w-full fixed bottom-0 flex border-y-2 h-14 md:hidden p-4 items-center flex-row bg-white shadow justify-around text-xl"
    >
        <li>
            <Link
                :href="route('order.deliverer')"
                :class="{ 'text-bouff-primaryone': $page.url === '/' }"
                ><i class="fi-sr-home"></i
            ></Link>
        </li>
        <li>
            <Link
                :href="route('home.treateddeliverer')"
                :class="{ 'text-bouff-primaryone': $page.url === '/' }"
                ><i class="fi-sr-home"></i
            ></Link>
        </li>
        <li>
            <Link
                :href="route('user.index')"
                :class="{ 'text-bouff-primaryone': $page.url === '/' }"
                ><i class="fi-sr-home"></i
            ></Link>
        </li>
    </ul>
    <ul
        v-if="$page.props.auth.user && $page.props.auth.user.rule === 'eatery'"
        class="w-full fixed bottom-0 flex border-y-2 h-14 md:hidden p-4 items-center flex-row bg-white shadow justify-around text-xl"
    >
        <li>
            <Link
                :href="route('order.eatery')"
                :class="{ 'text-bouff-primaryone': $page.url === '/order/eatery' }"
                ><i class="fi-sr-document"></i
            ></Link>
        </li>
        <li>
            <Link
                :href="route('order.treatedeatery')"
                :class="{ 'text-bouff-primaryone': $page.url === '/order/treatedeatery' }"
                ><i class=" fi-sr-assept-document"></i
            ></Link>
        </li>
        <li>
            <Link
                :href="route('eatery.index')"
                :class="{ 'text-bouff-primaryone': $page.url === '/eatery' }"
                ><i class="fi-sr-hat-chef"></i
            ></Link>
        </li>
    </ul>
    <ul
        v-else
        class="w-full fixed bottom-0 flex border-y-2 h-14 md:hidden p-4 items-center flex-row bg-white shadow justify-around text-xl"
    >
        <li>
            <Link
                :href="route('home.index')"
                :class="{ 'text-bouff-primaryone': $page.url === '/' }"
                ><i class="fi-sr-home"></i
            ></Link>
        </li>
        <li>
            <Link
                :href="route('user.index')"
                :class="{ 'text-bouff-primaryone': $page.url === '/search' }"
                ><i class="fi-sr-search"></i
            ></Link>
        </li>
        <li>
            <Link
                :href="route('order.user')"
                :class="{ 'text-bouff-primaryone': $page.url === '/commandes' }"
                ><i class="fi-sr-document"></i
            ></Link>
        </li>
        <li>
            <Link
                :href="route('user.index')"
                :class="{ 'text-bouff-primaryone': $page.url === '/user' }"
                ><i class="fi-sr-user"></i
            ></Link>
        </li>
    </ul>
</template>
