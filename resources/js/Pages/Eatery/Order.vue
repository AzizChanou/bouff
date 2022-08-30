<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import EateryDashboard from "@/Layouts/EateryDashboard.vue";
import OrderEatery from "@/Components/OrderEatery.vue";

const props = defineProps({
    orders: Object,
});
</script>

<template>
    <Head title="Commandes" />
    <EateryDashboard>
        <div class="h-full py-8">
            <h1 class="text-2xl px-6 font-bold font-sans">Commandes</h1>
            <ul class="h-full divide-y">
                <OrderEatery
                    v-for="order in orders"
                    :order="order"
                    :key="order.id"
                />
                <div class="h-28 md:h-0"></div>
            </ul>
        </div>
    </EateryDashboard>
</template>
