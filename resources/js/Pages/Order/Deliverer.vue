<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import OrderDeliverer from "@/Components/OrderDeliverer.vue";
import DelivererDashboard from "@/Layouts/DelivererDashboard.vue";

const order = defineProps({
    orders: Object,
});

const currentYear = new Date().getFullYear();
</script>
<template>
    <Head title="Commandes" />
    <DelivererDashboard>
        <div class="h-full">
            <h1 class="text-2xl px-6 font-bold font-sans">Commandes</h1>
            <ul class="h-full overflow-y-scroll divide-y">
                <OrderDeliverer
                    v-for="order in orders"
                    :accepted="false"
                    :order="order"
                    :key="order.id"
                />
                <div class="h-28 md:h-0"></div>
            </ul>
        </div>
    </DelivererDashboard>
</template>
