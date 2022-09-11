<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import EateryDashboard from "@/Layouts/EateryDashboard.vue";

defineProps({
    deliverer: Object,
});
</script>

<template>
    <Head :title="deliverer.name" />
    <EateryDashboard>
        <div
            class="flex flex-col w-full h-10/12 overflow-scroll space-y-6 px-6 py-8"
        >
            <h1 class="text-2xl font-bold font-sans">Profil</h1>
            <div class="w-full flex flex-col justify-between space-y-16">
                <div class="flex flex-col items-center space-y-4">
                    <div
                        class="bg-bouff-secondarytwo rounded-full flex items-center justify-center w-[6rem] h-[6rem]"
                    >
                        <h1
                            class="text-white text-5xl font-bold"
                            autocapitalize="on"
                        >
                            {{ deliverer.name.charAt(0) }}
                        </h1>
                    </div>
                    <div class="text-center">
                        <h3 class="font-semibold" autocapitalize="words">
                            {{ deliverer.name
                            }}{{
                                deliverer.surname ? " " + deliverer.surname : ""
                            }}
                        </h3>
                        <Link
                            :href="route('deliverer.edit', deliverer.id)"
                            class="text-bouff-primaryone hover:text-bouff-secondaryone duration-500"
                            >Modifier
                        </Link>
                    </div>
                </div>
                <div class="flex flex-col space-y-3 justify-center">
                    <div class="flex flex-col space-y-2">
                        <span class="font-semibold" autocapitalize="words"
                            >Nom & Prénom.s</span
                        >
                        <span class="w-full p-2 bg-bouff-primarytree rounded-md"
                            >{{
                                deliverer.surname ? " " + deliverer.surname : ""
                            }}
                            {{ deliverer.name }}</span
                        >
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span class="font-semibold">Numéro de téléphone</span>
                        <span
                            class="w-full p-2 bg-bouff-primarytree rounded-md"
                        >
                            {{ deliverer.phone }}</span
                        >
                    </div>
                    <div v-if="deliverer.email" class="flex flex-col space-y-2">
                        <span class="font-semibold">Email</span>
                        <span
                            class="w-full p-2 bg-bouff-primarytree rounded-md"
                        >
                            {{ deliverer.email }}</span
                        >
                    </div>
                    <div
                        v-if="deliverer.address"
                        class="flex flex-col space-y-2"
                    >
                        <span class="font-semibold">Adresse</span>
                        <span
                            class="w-full p-2 bg-bouff-primarytree rounded-md"
                        >
                            {{ deliverer.address }}</span
                        >
                    </div>
                    <!--  <div class="flex flex-col">
                        <span class="font-semibold">Email</span>
                        <span
                            class="w-full p-2 bg-bouff-primarytree rounded-md"
                        >
                            {{deliverer.name deliverer.surname}}</span
                        >
                    </div> -->
                    <!--  <div class="flex flex-col">
                        <span class="font-semibold">Adresse</span>
                        <span
                            class="w-full p-2 bg-bouff-primarytree rounded-md"
                        >
                            {{deliverer.name deliverer.surname}}</span
                        >
                    </div> -->
                </div>
                <div class="flex justify-center md:hidden">
                    <Link
                        :href="route('logout')"
                        as="button"
                        method="post"
                        class="text-bouff-primaryone"
                        >Deconnexion</Link
                    >
                </div>
            </div>
        </div>
    </EateryDashboard>
</template>
