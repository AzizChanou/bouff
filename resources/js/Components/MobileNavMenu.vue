<script setup>
import { Link } from "@inertiajs/inertia-vue3";

const currentYear = new Date().getFullYear();
</script>

<template>
    <div
        id="menu"
        class="transition-all ease-in-out duration-500 flex overflow-auto fixed top-0 z-10 left-0 h-full bg-bouff-primaryfor shadow-md flex-col md:hidden justify-between w-0"
    >
        <div class="p-8 py-20">
            <ul class="flex flex-col space-y-3 font-semibold divide-y-2">
                <li class="p-2">
                    <Link
                        :href="route('about')"
                        :class="{
                            'font-bold text-bouff-primaryone':
                                $page.url === '/about',
                        }"
                        >A propos
                    </Link>
                </li>
                <li class="p-2">
                    <Link
                        :href="route('faqs')"
                        :class="{
                            'font-bold text-bouff-primaryone':
                                $page.url === '/faqs',
                        }"
                    >
                        FAQs
                    </Link>
                </li>
                <li class="p-2">
                    <Link
                        :href="route('cgu')"
                        :class="{
                            'font-bold text-bouff-primaryone':
                                $page.url === '/cgu',
                        }"
                        >CGU
                    </Link>
                </li>
                <li class="p-2">
                    <Link
                        :href="route('cgv')"
                        :class="{
                            'font-bold text-bouff-primaryone':
                                $page.url === '/CGV',
                        }"
                        >CGV
                    </Link>
                </li>
                <li class="p-2">
                    <Link
                        v-if="$page.props.auth && $page.props.auth.user"
                        :href="route('logout')"
                        method="post"
                        as="button"
                    >
                        Déconnexion
                    </Link>
                    <Link v-else :href="route('login')">Se connecter</Link>
                </li>
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
