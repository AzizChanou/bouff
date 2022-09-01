<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";

defineProps({
    status: Number,
});
</script>

<template>
    <Head title="Page not found" />
    <UserDashboard>
        <div v-if="status === 404" class="w-full h-full">
            <div class="h-full p-6 flex flex-col place-content-center">
                <div class="flex justify-center items-center">
                    <img src="../../../../public/assets/svg/err.svg" alt="" class="" />
                </div>
                <div class="text-4xl text-center">
                    <h1>Vous etes perdu.e ?</h1>
                    <p>Il n'y a pas à manger ici.</p>
                </div>
            </div>
        </div>
    </UserDashboard>
</template>
