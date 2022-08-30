<script setup>
import LeftSideBar from "@/Components/LeftSideBar.vue";
import MobileNavBar from "@/Components/MobileNavBar.vue";
import MobileFootBar from "@/Components/MobileFootBar.vue";
import MobileNavMenu from "@/Components/MobileNavMenu.vue";
import MobileOperationSection from "@/Components/MobileOperationSection.vue";
import FlashMessage from "@/Components/FlashMessage.vue";
import { ref } from "@vue/reactivity";

let isModalOpen = ref(false);
const mobileCashier = document.querySelector("#mobileCashier");
const navMenu = document.querySelector("#navMenu");
const menu = document.querySelector("#menu");
const online = window.addEventListener("load", (event) => {
    return navigator.online;
});
</script>

<template>
    <div class="w-screen h-screen bg-bouffcover select-none">
        <div
            class="w-full max-w-screen-2xl h-full bg-bouff-primaryfor mx-auto border-x overflow-hidden md:flex md:flex-row"
        >
            <LeftSideBar />

            <MobileNavBar />

            <MobileNavMenu />

            <MobileOperationSection />
            <div
                class="w-full md:w-[94%] lg:w-[86%] border-x-2 h-full overflow-y-auto space-y-6 pb-24 md:pb-0"
            >
                <FlashMessage />
                <slot />
            </div>

            <MobileFootBar />
        </div>
    </div>
</template>
