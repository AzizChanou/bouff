<script setup>
import { Link, usePage } from "@inertiajs/inertia-vue3";
import { computed } from "vue";

const currentYear = new Date().getFullYear();
// const user = computed(() => usePage().props.value.auth.user);
</script>

<template>
    <div
        class="md:w-[6%] hidden md:flex flex-col justify-between items-center pt-8 lg:w-[14%] h-full"
    >
        <div class="flex flex-col items-center space-y-12">
            <Link :href="route('home.index')" as="a" class="h-8">
                <img
                    src="../../../public/assets/svg/bouff_logo_long_black.svg"
                    alt=""
                    class="hidden lg:flex h-8"
                />
                <img
                    src="../../../public/assets/svg/bouff_logo_short.svg"
                    alt=""
                    class="flex lg:hidden h-8 hover:animate-spin"
                />
            </Link>
            <div class="space-y-12 flex flex-col">
                <Link
                    :href="route('home.index')"
                    as="a"
                    :class="{
                        'font-bold text-bouff-primaryone': $page.url === '/',
                    }"
                    class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                >
                    <i class="fi-sr-home"></i>
                    <span class="hidden lg:flex">Accueil</span>
                </Link>
                <Link
                    :href="route('search')"
                    as="a"
                    :class="{
                        'font-bold text-bouff-primaryone':
                            $page.url === '/search',
                    }"
                    class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                >
                    <i class="fi-sr-search"></i>
                    <span class="hidden lg:flex">Recherche</span>
                </Link>
                <ul
                    v-if="
                        $page.props.auth &&
                        $page.props.auth.user &&
                        $page.props.auth.user.rule === 'user'
                    "
                    class="space-y-12 flex flex-col"
                >
                    <li>
                        <Link
                            :href="route('user.index')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url.startsWith('/user'),
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-user"></i>
                            <span class="hidden lg:flex">Profil</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            :href="route('order.user')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url === '/order',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-document"></i>
                            <span class="hidden lg:flex">Commandes</span>
                        </Link>
                    </li>
                </ul>
                <ul
                    v-else-if="
                        $page.props.auth &&
                        $page.props.auth.user &&
                        $page.props.auth.user.rule === 'eatery'
                    "
                    class="space-y-12 flex flex-col"
                >
                    <li>
                        <Link
                            v-if="$page.props.auth.user.rule === 'eatery'"
                            :href="route('eatery.index')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url.startsWith('/eatery') ||
                                    $page.url.startsWith('/food'),
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-shop"></i>
                            <span class="hidden lg:flex">Restaurant</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            :href="route('order.eatery')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url === '/order/eatery',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-document"></i>
                            <span class="hidden lg:flex">Commandes</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            :href="route('order.treatedeatery')"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url === '/order/treatedeatery',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-assept-document"></i>
                            <span class="hidden lg:flex">Traitées</span>
                        </Link>
                    </li>
                </ul>
                <ul
                    v-else-if="
                        $page.props.auth &&
                        $page.props.auth.user &&
                        $page.props.auth.user.rule === 'deliverer'
                    "
                    class="space-y-12 flex flex-col"
                >
                    <li>
                        <Link
                            :href="route('user.index')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url === '/user',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                            ><i class="fi-sr-user"></i>
                            <span class="hidden lg:flex">Profil</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            :href="route('qrcode')"
                            as="a"
                            :class="{
                                'text-bouff-primaryone':
                                    $page.url === '/qrcode',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                            ><i class="fi-sr-camera"></i>
                            <span class="hidden lg:flex">QRCode</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            :href="route('order.deliverer')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url.startsWith('/order/deliverer'),
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                            ><i class="fi-sr-document"></i>
                            <span class="hidden lg:flex">Commandes</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            :href="route('order.treateddeliverer')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url === '/order/treateddeliverer',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                            ><i class="fi-sr-assept-document"></i>
                            <span class="hidden lg:flex">Récuperer</span>
                        </Link>
                    </li>
                </ul>
                <ul class="space-y-12 flex flex-col">
                    <li>
                        <Link
                            :href="route('about')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url === '/about',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-info"></i>
                            <span class="hidden lg:flex">A propos</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            :href="route('faqs')"
                            as="a"
                            :class="{
                                'font-bold text-bouff-primaryone':
                                    $page.url === '/faqs',
                            }"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-interrogation"></i>
                            <span class="hidden lg:flex">FAQs</span>
                        </Link>
                    </li>
                    <li>
                        <Link
                            v-if="$page.props.auth && $page.props.auth.user"
                            :href="route('logout')"
                            as="button"
                            method="post"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-sign-out-alt"></i>
                            <span class="hidden lg:flex">Déconnexion</span>
                        </Link>
                        <Link
                            v-else
                            :href="route('login')"
                            as="a"
                            class="flex flex-row space-x-2 hover:scale-110 hover:text-bouff-primaryone duration-300"
                        >
                            <i class="fi-sr-sign-in-alt"></i>
                            <span class="hidden lg:flex">Se connecter</span>
                        </Link>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="w-full p-4 text-xs text-bouff-secondarytree/50 flex flex-col text-center"
        >
            <span class="md:flex-col">
                <Link
                    :href="route('cgu')"
                    as="a"
                    class="hover:text-bouff-primaryone duration-300"
                    :class="{
                        'font-bold text-bouff-primaryone': $page.url === '/cgu',
                    }"
                    >CGU</Link
                >
                /
                <Link
                    :href="route('cgv')"
                    as="a"
                    class="hover:text-bouff-primaryone duration-300"
                    :class="{
                        'font-bold text-bouff-primaryone': $page.url === '/cgv',
                    }"
                    >CGV</Link
                >
            </span>
            <!-- <span>
                <Link :href="route('cgu')" as="a" class="hover:text-bouff-primaryone duration-300" :class="{
                    'font-bold text-bouff-primaryone': $page.url === '/cgu',
                }">Politique de confidentialite
                </Link>
            </span>
            <span>
                <Link :href="route('cgu')" as="a" class="hover:text-bouff-primaryone duration-300" :class="{
                    'font-bold text-bouff-primaryone': $page.url === '/cgu',
                }">Mention legale
                </Link>
            </span> -->
            <span>
                &copy; {{ currentYear }} Bouff . Tous droits reservés.
            </span>
        </div>
    </div>
</template>
