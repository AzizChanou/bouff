<script setup>
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    eatery: Object,
});

const truncate = function (string, limit) {
    // if (string.length <= limit) {
    if (string === null) {
        return "Pas de description";
    } else {
        return string.slice(0, limit) + "...";
    }
};
</script>

<template>
    <li
        class="bg-cover bg-center max-w-full min-w-[70%] w-full shadow-md rounded-xl hover:scale-95 duration-500"
        :style="'background-image: url(\'' + props.eatery.picture_path + '\');'"
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
                <h3 class="text-2xl font-bold uppercase px-4 truncate">
                    {{ eatery.label }}
                </h3>
                <p class="text-sm text-center">
                    {{ truncate(eatery.description, 100) }}
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
    </li>
</template>
