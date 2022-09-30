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
        <div class="h-full py-6">
            <h1 class="text-2xl px-6 font-bold font-sans">Commandes</h1>
            <ul class="h-full overflow-y-scroll divide-y">
                <OrderEatery
                    v-for="order in orders"
                    :order="order"
                    :key="order.id"
                />
            </ul>
        </div>
    </EateryDashboard>
</template>
