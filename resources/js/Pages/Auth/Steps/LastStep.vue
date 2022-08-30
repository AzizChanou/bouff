<script setup>
import { Link, useForm } from "@inertiajs/inertia-vue3";

const props = defineProps(["formValues"]);
</script>

<template>
    <div class="p-2 space-y-4">
        <div>
            <label for="description" class="">Description</label>
            <input type="text" class="hidden" autocomplete="hidden" />
            <textarea
                type="text"
                id="description"
                v-model="props.formValues.description"
                required
                autocomplete="description"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                cols="30"
                rows="4"
            ></textarea>

            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.description"
            >
                {{ props.formValues.errors.description }}
            </div>
        </div>

        <div>
            <label for="password" class="">Mot de passe</label>
            <input
                type="password"
                id="password"
                v-model="props.formValues.password"
                required
                autocomplete="password"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.password"
            >
                {{ props.formValues.errors.password }}
            </div>
        </div>

        <div>
            <label for="password_confirmation" class=""
                >Confirmer mot de passe</label
            >
            <input
                type="password"
                id="password_confirmation"
                v-model="props.formValues.password_confirmation"
                required
                autocomplete="new-password"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.password_confirmation"
            >
                {{ props.formValues.errors.password_confirmation }}
            </div>
        </div>

        <div class="flex flex-row space-x-4 items-center">
            <input
                type="checkbox"
                id="accept"
                v-model="props.formValues.terms"
                class="rounded accent-bouff-secondarytwo"
            />
            <label for="accept" class="text-xs"
                >J'ai lu et j'accepte les
                <Link
                    href="/CGU"
                    class="underline underline-offset-1 text-bouff-primaryone hover:text-bouff-secondarytwo duration-300"
                    >Conditions generales d'utilisations</Link
                ></label
            >
        </div>
    </div>
</template>
