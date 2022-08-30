<script setup>
import { Head, useForm } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";

const props = defineProps({
    user: Object,
});

const form = useForm({
    id: props.user.id,
    name: props.user.name,
    surname: props.user.surname,
    phone: props.user.phone,
    email: props.user.email,
    address: props.user.address,
});

const submit = () => {
    form.put(route("user.update", form.id), {
        onSuccess: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Editer profil" />
    <UserDashboard>
        <div class="flex flex-col w-full h-full space-y-6 px-6 py-8">
            <h1 class="text-2xl font-bold font-sans">Profil</h1>
            <div class="w-full flex flex-col justify-between space-y-16">
                <form
                    @submit.prevent="submit"
                    class="flex flex-col space-y-3 justify-center"
                >
                    <div>
                        <label for="name" class="">Prenom.s</label>
                        <input
                            type="text"
                            id="name"
                            v-model="form.name"
                            required
                            autocomplete="name"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.name"
                        >
                            {{ form.errors.name }}
                        </div>
                    </div>
                    <div>
                        <label for="surname" class="">Nom</label>
                        <input
                            type="text"
                            id="surname"
                            v-model="form.surname"
                            autocomplete="surname"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.surname"
                        >
                            {{ form.errors.surname }}
                        </div>
                    </div>
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
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.phone"
                        >
                            {{ form.errors.phone }}
                        </div>
                    </div>
                    <div>
                        <label for="email" class="">Email</label>
                        <input
                            type="text"
                            id="email"
                            v-model="form.email"
                            autocomplete="email"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.email"
                        >
                            {{ form.errors.email }}
                        </div>
                    </div>
                    <div>
                        <label for="address" class="">Adresse</label>
                        <input
                            type="text"
                            id="address"
                            v-model="form.address"
                            autocomplete="address"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.address"
                        >
                            {{ form.errors.address }}
                        </div>
                    </div>
                    <button
                        type="submit"
                        :disabled="form.processing"
                        :class="{ 'opacity-25': form.processing }"
                        class="px-4 py-3 mt-4 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                    >
                        Modifier
                    </button>
                </form>
            </div>
        </div>
    </UserDashboard>
</template>
