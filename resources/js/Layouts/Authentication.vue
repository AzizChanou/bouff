<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Logo from "@/Components/Logo.vue";
import FlashMessage from "@/Components/FlashMessage.vue";

</script>

<template>
    <div
        class="w-full h-screen bg-bouffcover bg-cover text-bouff-secondarytwo antialiased"
    >
        <div
            class="w-full h-full bg-bouff-primaryfor flex justify-center items-center"
        >
            <div class="space-y-6 flex flex-col items-center">
                <Link href="/" class="flex justify-center">
                    <Logo />
                </Link>
                <FlashMessage />
                <slot />
                <Link
                    href="/"
                    class="text-bouff-primaryone hover:text-bouff-secondarytwo duration-300"
                    >Retour a l'accueil
                </Link>
            </div>
        </div>
    </div>
</template>
