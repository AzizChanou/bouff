<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import EateryDashboard from "@/Layouts/EateryDashboard.vue";

defineProps({
    eatery: Object,
    foods: Object,
});

const truncate = function (string, limit) {
    // if (string.length <= limit) {
    if (string === null) {
        return "Pas de description";
    } else {
        return string.slice(0, limit) + "...";
    }
};

const toggle = function (source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source) checkboxes[i].checked = source.checked;
    }
};
</script>

<template>
    <Head :title="eatery.label" />
    <EateryDashboard>
        <div class="flex flex-col space-y-4 pb-8 h-full">
            <div class="bg-[url('http://localhost:8000/storage/eatery/ok.jpg')] bg-cover">
                <div class="bg-bouff-secondarytwo/20 relative w-full">
                    <div class="p-24">
                        <h2
                            class="text-white font-bold uppercase text-center text-6xl"
                        >
                            {{ eatery.label }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between items-center px-2">
                <h3 class="font-bold uppercase text-xl">Nourriture</h3>
                <div class="flex flex-row space-x-4 p-2">
                    <Link
                        :href="route('food.create')"
                        class="font-medium text-white p-2 bg-bouff-secondarytwo rounded hover:bg-bouff-primaryone duration-500"
                        >Ajouter</Link
                    >
                    <Link
                        :href="route('eatery.index')"
                        class="font-medium text-white p-2 bg-bouff-primaryone rounded hover:bg-bouff-secondarytwo duration-500"
                        >Retour</Link
                    >
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="text-sm text-left w-full">
                    <thead class="text-xs uppercase bg-bouff-primarytree">
                        <tr>
                            <th
                                scope="col"
                                class="p-3 items-center hidden sm:flex"
                            >
                                <input
                                    type="checkbox"
                                    @click="toggle(this)"
                                    class="accent-bouff-secondarytwo"
                                />
                            </th>
                            <th scope="col" class="p-3">Photo</th>
                            <th scope="col" class="p-3">Nom Bouff</th>
                            <th
                                scope="col"
                                class="p-3 hidden sm:flex items-center"
                            >
                                Description
                            </th>
                            <th scope="col" class="p-3">Categorie</th>
                            <th scope="col" class="p-3">Prix</th>
                            <th scope="col" class="p-3">
                                <span class="sr-only">Editer</span>
                            </th>
                            <th scope="col" class="p-3">
                                <span class="sr-only">Supprimer</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="border-b items-center"
                            v-for="food in foods"
                            :key="food.id"
                        >
                            <td class="px-3 py-4 items-center hidden sm:flex">
                                <input
                                    type="checkbox"
                                    class="accent-bouff-secondarytwo"
                                    name=""
                                    id=""
                                />
                            </td>
                            <th scope="row" class="px-3 py-4 text-gray-900">
                                <img
                                    :src="food.picture_path"
                                    :alt="'Picture of ' + food.name"
                                    width="100px"
                                    class="rounded w-12"
                                />
                            </th>
                            <th
                                scope="row"
                                class="px-3 py-4 font-medium text-gray-900"
                            >
                                {{ food.name }}
                            </th>
                            <td class="px-3 py-4 hidden sm:flex">
                                {{ truncate(food.description, 20) }}
                            </td>
                            <td class="px-3 py-4">{{ food.category_id }}</td>
                            <td class="px-3 py-4">{{ food.price }} CFA</td>
                            <td class="px-3 py-4 text-right">
                                <Link
                                    :href="route('food.edit', food.id)"
                                    class="font-medium text-white p-2 bg-bouff-primaryone rounded hover:bg-bouff-secondarytwo duration-500"
                                    >Editer</Link
                                >
                            </td>
                            <td class="px-3 py-4 text-right">
                                <Link
                                    :href="route('food.destroy', food.id)"
                                    class="font-medium text-white p-2 bg-red-500 rounded hover:bg-red-700 duration-500"
                                    >Supprimer</Link
                                >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </EateryDashboard>
</template>
