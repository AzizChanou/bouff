<script setup>
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    eatery: Object,
});

const classN =
    "w-[calc(100%-1rem)] sm:w-[calc(50%-1rem)] md:w-[calc(100%-1rem)] lg:w-[calc(50%-1rem)] shadow-md rounded-xl hover:scale-95 duration-500";
</script>

<template>
    <li :class="classN">
        <div class="relative overflow-hidden rounded-xl shadow cursor-pointer">
            <img
                class="object-cover object-top w-full rounded-xl h-48"
                v-lazy="eatery.picture_path"
                alt="Flower and sky"
            />
            <Link
                :href="route('eatery.show', eatery.id)"
                class="absolute top-0 left-0 bg-bouff-secondaryone/40 rounded-xl w-full h-full p-2 flex flex-col justify-between"
            >
                <div class="flex flex-row justify-between pb-2">
                    <span class="font-medium">{{
                        eatery.address ? eatery.address : " "
                    }}</span>
                    <span
                        class="bg-bouff-primaryone px-2 py-1 text-white rounded-full font-medium"
                        >{{ eatery.status ? "Ouvert" : "Ferme" }}</span
                    >
                </div>
                <div class="text-center p-10">
                    <h3 class="text-2xl font-bold inline uppercase">
                        {{ eatery.label }}
                    </h3>
                    <p class="text-sm">
                        {{ eatery.description }}
                    </p>
                </div>
                <div class="hidden flex-row justify-between pt-2">
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
        </div>
    </li>
</template>
