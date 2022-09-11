<script setup>
import ValidationErrors from "@/Components/ValidationErrors.vue";
import AuthenticationLayout from "@/Layouts/Authentication.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: "",
    phone: "",
    password: "",
    password_confirmation: "",
    terms: false,
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <AuthenticationLayout>
        <Head title="Register" />
        <ValidationErrors class="mb-4" />

        <form @submit.prevent="submit" class="p-2 space-y-4">
            <div>
                <label for="name" class="">Prénom.s</label>
                <input
                    type="text"
                    id="name"
                    v-model="form.name"
                    required
                    autocomplete="name"
                    class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                />
                <div class="text-sm text-red-600" v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>
            </div>

            <div>
                <label for="phone" class="">Numéro de téléphone</label>
                <input
                    type="text"
                    id="phone"
                    v-model="form.phone"
                    required
                    autocomplete="phone"
                    class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                />
                <div class="text-sm text-red-600" v-if="form.errors.phone">
                    {{ form.errors.phone }}
                </div>
            </div>

            <div>
                <label for="password" class="">Mot de passe</label>
                <input
                    type="password"
                    id="password"
                    v-model="form.password"
                    required
                    autocomplete="password"
                    class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                />
                <div class="text-sm text-red-600" v-if="form.errors.password">
                    {{ form.errors.password }}
                </div>
            </div>

            <div>
                <label for="password_confirmation" class=""
                    >Confirmer mot de passe</label
                >
                <input
                    type="password"
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                    class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                />
                <div
                    class="text-sm text-red-600"
                    v-if="form.errors.password_confirmation"
                >
                    {{ form.errors.password_confirmation }}
                </div>
            </div>

            <div class="flex flex-row space-x-4 items-center">
                <input
                    type="checkbox"
                    id="accept"
                    v-model="form.terms"
                    class="rounded accent-bouff-secondarytwo"
                />
                <label for="accept" class="text-xs"
                    >J'ai lu et j'accepte les
                    <Link
                        :href="route('cgu')"
                        class="underline underline-offset-1 text-bouff-primaryone hover:text-bouff-secondarytwo duration-300"
                        >Conditions generales d'utilisations</Link
                    ></label
                >
            </div>

            <div class="flex flex-row items-center justify-between space-x-8">
                <Link
                    :href="route('login')"
                    class="text-bouff-secondarytwo hover:text-bouff-primaryone duration-300"
                >
                    <span class="underline underline-offset-1"
                        >Déja un compte</span
                    >
                    ?</Link
                >
                <button
                    type="submit"
                    :disabled="form.processing || !form.terms"
                    :class="{ 'opacity-25': form.processing || !form.terms }"
                    class="px-4 py-3 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                >
                    Créer un compte
                </button>
            </div>
        </form>
    </AuthenticationLayout>
</template>
