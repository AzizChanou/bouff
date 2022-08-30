<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import EateryDashboard from "@/Layouts/EateryDashboard.vue";
import Loading from "@/Components/Loading.vue";

const props = defineProps({
    eatery: Object,
});
</script>

<template>
    <Head title="Statistique" />
    <EateryDashboard>
        <div class="flex flex-col w-full h-full space-y-6 px-6 py-8">
            <p class="flex items-center justify-center p-20 w-full h-full">
                <Loading />
            </p>
        </div>
    </EateryDashboard>
</template>
