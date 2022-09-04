<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";

defineProps({
    status: Number,
});
</script>

<template>
    <Head title="Acces non autorise" />
    <UserDashboard>
        <div v-if="status === 403" class="w-full h-full">
            <div class="h-full p-6 flex flex-col place-content-center">
                <div class="flex justify-center items-center">
                    <img src="../../../../public/assets/svg/err.svg" alt="" class="" />
                </div>
                <div class="text-4xl text-center">
                    <h1>Accès interdit !</h1>
                </div>
            </div>
        </div>
    </UserDashboard>
</template>
