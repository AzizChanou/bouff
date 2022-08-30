<script setup>
import ValidationErrors from "@/Components/ValidationErrors.vue";
import AuthenticationLayout from "@/Layouts/Authentication.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    phone: "69457894",
    password: "password",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <AuthenticationLayout>
        <Head title="Log in" />

        <ValidationErrors />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="p-2 space-y-4">
            <div>
                <label for="phone" class="">Phone</label>
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

            <div class="">
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

            <div class="flex space-x-3 px-1 items-center">
                <input
                    type="checkbox"
                    id="remember"
                    v-model="form.remember"
                    class="rounded accent-bouff-secondarytwo"
                />
                <label for="remember">Se rappeler</label>
            </div>

            <div class="flex flex-row items-center justify-between space-x-8">
                <Link
                    :href="route('register')"
                    class="text-bouff-secondarytwo hover:text-bouff-primaryone duration-300"
                >
                    <span class="underline underline-offset-1"
                        >Créer un compte</span
                    >
                    ?</Link
                >
                <button
                    type="submit"
                    :disabled="form.processing"
                    :class="{ 'opacity-25': form.processing }"
                    class="px-4 py-3 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                >
                    Se connecter
                </button>
            </div>
        </form>
    </AuthenticationLayout>
</template>
