<script setup>
import Button from "@/Components/Button.vue";
import VueQrcode from "vue-qrcode";
defineProps({
    delivery: Object,
});
</script>

<template>
    <div
        v-if="Object.order"
        class="flex flex-col items-center justify-between space-y-8"
    >
        <div class="flex flex-row justify-center">
            <VueQrcode
                value="123e4567-e89b-12d3-a456-426614174000"
                type="image/png"
                :width="10"
                :scale="5"
                :color="{ dark: 'blue', light: '#fff' }"
                :quality="1"
            />
        </div>
        <div class="flex flex-row justify-between space-x-6">
            <div class="bg-bouff-primarytree rounded-full">
                <div
                    class="bg-bouff-primaryone rounded-full flex items-center"
                    role="progressbar"
                    style="height: 55%"
                >
                    <span class="text-xs text-white"> % </span>
                </div>
            </div>
            <ul class="space-y-24">
                <li>Preparation</li>
                <li>Recuperation</li>
                <li>Livraison</li>
            </ul>
        </div>
        <div class="justify-center flex">
            <Button name="yes" text="Livrer" />
        </div>
        <div class="h-28 md:h-2"></div>
    </div>
    <div v-else class="flex items-center justify-center h-full">
        <p class="">Aucune Commande</p>
    </div>
</template>
