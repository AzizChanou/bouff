<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";

defineProps({
    status: Number,
});
</script>

<template>
    <Head title="Statisques" />
    <UserDashboard>
        <div class="w-full h-full"></div>
    </UserDashboard>
</template>
