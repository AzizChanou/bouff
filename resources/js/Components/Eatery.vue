<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    eatery: Object,
});
</script>

<template>
    <li
        class="bg-[url('http://localhost:8000/storage/eatery/eatery.png')] w-[calc(100%-1rem)] sm:w-[calc(50%-1rem)] md:w-[calc(100%-1rem)] lg:w-[calc(50%-1rem)] bg-cover shadow-md rounded-xl hover:scale-95 duration-500"
    >
        <Link
            :href="route('eatery.show', eatery.id)"
            class="bg-bouff-secondaryone/40 w-full h-full p-2 rounded-xl flex flex-col justify-between"
        >
            <div class="flex flex-row justify-between pb-2">
                <span class="font-medium">{{
                    eatery.address ? eatery.address : " "
                }}</span
                ><span
                    class="bg-bouff-primaryone px-2 py-1 text-white rounded-full font-medium"
                    >{{ eatery.status ? "Ouvert" : "Ferme" }}</span
                >
            </div>
            <div class="text-center p-10">
                <h3 class="text-2xl font-bold uppercase">
                    {{ eatery.label }}
                </h3>
                <p class="text-sm">
                    {{ eatery.description }}
                </p>
            </div>
            <div class="hidden flex-row justify-between  pt-2">
                <div class="space-x-1">
                    <i class="fi-sr-smile-beam"></i>
                    <span>89%</span>
                </div>
                <div class="space-x-1">
                    <i class="fi-sr-biking-mountain"></i>
                    <span>12km</span>
                </div>
                <div class="space-x-1">
                    <i class="fi-sr-clock"></i>
                    <span>50min</span>
                </div>
            </div>
        </Link>
    </li>
</template>
