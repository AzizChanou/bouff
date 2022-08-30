<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps(["formValues"]);
</script>

<template>
    <div class="p-2 space-y-4">
        <div>
            <label for="label" class="">Nom du restaurant</label>
            <input
                type="text"
                id="label"
                v-model="props.formValues.label"
                required
                autocomplete="label"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.label"
            >
                {{ props.formValues.errors.label }}
            </div>
        </div>

        <div>
            <label for="address" class="">Adresse</label>
            <input
                type="text"
                id="address"
                v-model="props.formValues.address"
                required
                autocomplete="address"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.address"
            >
                {{ props.formValues.errors.address }}
            </div>
        </div>

        <div>
            <label for="ifu" class="">IFU</label>
            <input
                type="text"
                id="ifu"
                v-model="props.formValues.ifu"
                required
                autocomplete="ifu"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.ifu"
            >
                {{ props.formValues.errors.ifu }}
            </div>
        </div>
        <div>
            <label for="rccm" class="">RCCM</label>
            <input
                type="text"
                id="rccm"
                v-model="props.formValues.rccm"
                required
                autocomplete="rccm"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.rccm"
            >
                {{ props.formValues.errors.rccm }}
            </div>
        </div>
    </div>
</template>
