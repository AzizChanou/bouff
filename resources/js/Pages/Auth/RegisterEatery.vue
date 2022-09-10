<script setup>
import AuthenticationLayout from "@/Layouts/Authentication.vue";
import FirstStep from "./Steps/FirstStep.vue";
import SecondStep from "./Steps/SecondStep.vue";
import LastStep from "./Steps/LastStep.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

const step = ref(0);

const steps = [FirstStep, SecondStep, LastStep];

const form = useForm({
    name: "",
    surname: "",
    address: "",
    phone: "",
    email: "",
    label: "",
    ifu: "",
    rccm: "",
    description: "",
    password: "",
    password_confirmation: "",
    terms: true,
});

const submit = () => {
    form.post(route("register.eatery"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};

const previousStep = () => {
    step.value--;
};
const nextStep = () => {
    step.value++;
};
</script>

<template>
    <AuthenticationLayout>
        <div>
            <h2 class="sr-only">Steps</h2>

            <div>
                <div class="overflow-hidden bg-gray-200 rounded-full">
                    <div
                        v-if="step == 0"
                        class="w-1/12 h-2 bg-bouff-primaryone rounded-full"
                    ></div>
                    <div
                        v-if="step == 1"
                        class="w-1/2 h-2 bg-bouff-primaryone rounded-full"
                    ></div>
                    <div
                        v-if="step > 1"
                        class="w-full h-2 bg-bouff-primaryone rounded-full"
                    ></div>
                </div>

                <ol
                    class="grid grid-cols-3 mt-4 text-sm font-medium text-gray-500"
                >
                    <li
                        class="flex items-center justify-start text-bouff-primaryone"
                        @click="step = 0"
                    >
                        <span class="hidden sm:inline"> Utilisateur </span>

                        <svg
                            class="w-6 h-6 sm:w-5 sm:h-5 sm:ml-2"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                            />
                        </svg>
                    </li>

                    <li
                        class="flex items-center mx-3 justify-center"
                        :class="{ 'text-bouff-primaryone': step >= 1 }"
                        @click="step = 1"
                    >
                        <span class="hidden sm:inline">Restaurant</span>

                        <svg
                            class="w-6 h-6 sm:w-5 sm:h-5 sm:ml-2"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>
                    </li>

                    <li
                        class="flex items-center justify-end"
                        :class="{ 'text-bouff-primaryone': step > 1 }"
                        @click="step = 2"
                    >
                        <span class="hidden sm:inline">CGV</span>

                        <svg
                            class="w-6 h-6 sm:w-5 sm:h-5 sm:ml-2"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                            />
                        </svg>
                    </li>
                </ol>
            </div>
        </div>

        <form @submit.prevent="submit" class="max-w-xl">
            <Component :is="steps[step]" :formValues="form"></Component>

            <div class="flex flex-row items-center justify-between px-2 mt-2">
                <button
                    type="button"
                    @click="previousStep()"
                    :disabled="step < 1"
                    :class="{ 'opacity-25': step < 1 }"
                    class="px-4 py-3 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                >
                    Precedant
                </button>
                <button
                    type="button"
                    @click="nextStep()"
                    v-if="step < 2"
                    class="px-4 py-3 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                >
                    Suivant
                </button>
                <button
                    type="submit"
                    v-if="step == 2"
                    :disabled="!form.terms"
                    :class="{ 'opacity-75': !form.terms }"
                    class="px-4 py-3 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                >
                    S'inscrire
                </button>
            </div>
        </form>
    </AuthenticationLayout>
</template>
