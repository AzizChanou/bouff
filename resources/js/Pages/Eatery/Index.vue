<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import EateryDashboard from "@/Layouts/EateryDashboard.vue";

const truncate = function (string, limit) {
    if (string.length <= limit) {
        return string;
    }
    return string.slice(0, limit) + "...";
};

const toggle = function (source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source) checkboxes[i].checked = source.checked;
    }
};

defineProps({
    eatery: Object,
});
</script>

<template>
    <Head title="Restaurant" />
    <EateryDashboard>
        <div class="flex flex-col space-y-4 pb-8 relative h-full">
            <div
                class="bg-cover"
                :style="
                    'background-image: url(\'' + eatery.picture_path + '\');'
                "
            >
                <div class="bg-bouff-secondarytwo/20 relative w-full">
                    <div class="p-24">
                        <h2 class="text-white uppercase font-bold text-center text-3xl">
                            {{ eatery.label }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="p-4 grid grid-cols-2 gap-2 md:gap-6">
                <Link :href="route('food.index')" as="a">
                    <div
                        class="flex flex-col bg-bouff-primarytree/40 shadow-sm text-bouff-secondarytwo rounded-md space-y-4 items-center justify-center p-2"
                    >
                        <i
                            class="fi-sr-hat-chef text-7xl text-bouff-primaryone"
                        ></i>
                        <span class="font-medium text-center uppercase"
                            >Menu</span
                        >
                    </div>
                </Link>
                <Link :href="route('order.treatedeatery')" as="a">
                    <div
                        class="flex flex-col bg-bouff-primarytree/40 shadow-sm text-bouff-secondarytwo rounded-md space-y-4 items-center justify-center p-2"
                    >
                        <i
                            class="fi-sr-assept-document text-7xl text-bouff-primaryone"
                        ></i>
                        <span class="font-medium text-center uppercase"
                            >Commandes Traitées</span
                        >
                    </div>
                </Link>
               <!--  <Link :href="route('eatery.stats')" as="a">
                    <div
                        class="flex flex-col bg-bouff-primarytree/40 shadow-sm text-bouff-secondarytwo rounded-md space-y-4 items-center justify-center p-2"
                    >
                        <i
                            class="fi-sr-stats text-7xl text-bouff-primaryone"
                        ></i>
                        <span class="font-medium text-center uppercase"
                            >Statistique</span
                        >
                    </div>
                </Link> -->
                <Link :href="route('eatery.edit', eatery.id)" as="a">
                    <div
                        class="flex flex-col bg-bouff-primarytree/40 shadow-sm text-bouff-secondarytwo rounded-md space-y-4 items-center justify-center p-2"
                    >
                        <i
                            class="fi-sr-shop text-7xl text-bouff-primaryone"
                        ></i>
                        <span class="font-medium text-center uppercase"
                            >Informations Compte</span
                        >
                    </div>
                </Link>
                <div class="h-28 md:h-0"></div>
            </div>
        </div>
    </EateryDashboard>
</template>
