<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import OrderUser from "@/Components/OrderUser.vue";
import UserDashboard from "@/Layouts/UserDashboard.vue";

const order = defineProps({
    orders: Object,
});

const currentYear = new Date().getFullYear();
</script>
<template>
    <Head title="Commandes" />
    <UserDashboard>
        <div class="h-full py-6">
            <h1 class="text-2xl px-6 font-bold font-sans">Commandes</h1>
            <ul class="h-full overflow-y-scroll divide-y">
                <OrderUser
                    v-for="order in orders"
                    :order="order"
                    :key="order.id"
                />
                <div class="h-28 md:h-0"></div>
            </ul>
        </div>
    </UserDashboard>
</template>
