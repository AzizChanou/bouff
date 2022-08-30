<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import EateryDashboard from "@/Layouts/EateryDashboard.vue";

const truncate = function (string, limit) {
    if (string.length <= limit) {
        return string;
    }
    return string.slice(0, limit) + "...";
};

const props = defineProps({
    eatery: Object,
    food_categories: Object,
});

const form = useForm({
    name: "",
    price: "",
    description: "",
    category: "",
    picture: null,
});

const submit = () => {
    form.post(route("food.store"));
};
</script>

<template>
    <Head title="Ajouter bouff" />
    <EateryDashboard>
        <div class="px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="space-y-2">
                <h1 class="text-4xl font-bold text-center">
                    Ajouter de la<span class="text-bouff-primaryone">
                        Bouff</span
                    >
                </h1>
                <p class="text-justify py-4 font-medium text-xl">
                    Veuillez remplir les champs suivant pour ajouter de la
                    Bouffe.
                </p>
            </div>
            <div class="lg:col-span-3">
                <form @submit.prevent="submit" class="space-y-4">
                    <div>
                        <label class="font-semibold" for="name">Nom</label>
                        <input
                            class="w-full p-3 text-sm bg-bouff-primarytree/40 outline-bouff-primaryone rounded-md"
                            v-model="form.name"
                            placeholder=""
                            type="text"
                            id="name"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.name"
                        >
                            {{ form.errors.name }}
                        </div>
                    </div>

                    <div class="">
                        <label class="font-semibold" for="picture">Photo</label>
                        <input
                            class="w-full p-3 text-sm bg-bouff-primarytree/40 outline-bouff-primaryone rounded-md"
                            type="file"
                            @input="form.picture = $event.target.files[0]"
                            id="picture"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.picture"
                        >
                            {{ form.errors.picture }}
                        </div>
                        <!--  <progress
                            v-if="form.progress"
                            class="w-full p-3 text-sm text-white font-bold rounded-md"
                            :value="form.progress.percentage"
                            max="100"
                        >
                            {{ form.progress.percentage }}%
                        </progress> -->
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="font-semibold" for="category"
                                >Categorie</label
                            >
                            <select
                                class="w-full p-3 text-sm bg-bouff-primarytree/40 outline-bouff-primaryone rounded-md"
                                v-model="form.category"
                                id="category"
                            >
                                <option
                                    v-for="categorie in food_categories"
                                    :key="categorie.id"
                                    :value="categorie.id"
                                >
                                    {{ categorie.name }}
                                </option>
                            </select>
                            <div
                                class="text-sm text-red-600"
                                v-if="form.errors.category"
                            >
                                {{ form.errors.category }}
                            </div>
                        </div>

                        <div>
                            <label class="font-semibold" for="price"
                                >Prix</label
                            >
                            <input
                                class="w-full p-3 text-sm bg-bouff-primarytree/40 outline-bouff-primaryone rounded-md"
                                v-model="form.price"
                                placeholder=""
                                type="text"
                                id="price"
                            />
                            <div
                                class="text-sm text-red-600"
                                v-if="form.errors.price"
                            >
                                {{ form.errors.price }}
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="font-semibold" for="description"
                            >Description</label
                        >
                        <textarea
                            class="w-full p-3 text-sm bg-bouff-primarytree/40 outline-bouff-primaryone rounded-md"
                            v-model="form.description"
                            placeholder=""
                            rows="8"
                            id="description"
                        ></textarea>
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.description"
                        >
                            {{ form.errors.description }}
                        </div>
                    </div>

                    <div class="mt-4 space-x-4">
                        <button
                            type="submit"
                            :disabled="form.processing"
                            :class="{ 'opacity-75': form.processing }"
                            class="px-4 py-3 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                        >
                            Ajouter
                        </button>
                        <Link
                            as="button"
                            :href="route('food.index')"
                            class="px-4 py-3 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                            >Retour</Link
                        >
                    </div>
                </form>
            </div>
        </div>
    </EateryDashboard>
</template>
