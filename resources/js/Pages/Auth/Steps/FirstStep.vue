<script setup>
const props = defineProps(["formValues"]);
</script>

<template>
    <div class="p-2 space-y-4">
        <div>
            <label for="name" class="">Prénom(s)</label>
            <input
                type="text"
                id="name"
                v-model="props.formValues.name"
                required
                autocomplete="name"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.name"
            >
                {{ props.formValues.errors.name }}
            </div>
        </div>
        <div>
            <label for="surname" class="">Nom</label>
            <input
                type="text"
                id="surname"
                v-model="props.formValues.surname"
                required
                autocomplete="surname"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.surname"
            >
                {{ props.formValues.errors.surname }}
            </div>
        </div>

        <div>
            <label for="phone" class="">Numero</label>
            <input
                type="text"
                id="phone"
                v-model="props.formValues.phone"
                required
                autocomplete="phone"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.phone"
            >
                {{ props.formValues.errors.phone }}
            </div>
        </div>

        <div>
            <label for="email" class="">Email</label>
            <input
                type="text"
                id="email"
                v-model="props.formValues.email"
                required
                autocomplete="email"
                class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
            />
            <div
                class="text-sm text-red-600"
                v-if="props.formValues.errors.email"
            >
                {{ props.formValues.errors.email }}
            </div>
        </div>
    </div>
</template>
