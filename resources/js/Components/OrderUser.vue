<script setup>
import OrderStatus from "./OrderStatus.vue";
import VueQrcode from "vue-qrcode";
defineProps({
    order: Object,
});
</script>

<template>
    <li class="flex-shrink hover:bg-bouff-primarytree/20 duration-500">
        <details class="group">
            <summary
                class="flex items-center justify-between p-4 cursor-pointer"
            >
                <div
                    class="flex flex-row items-center justify-between w-full space-y-2"
                >
                    <p class="pl-2">
                        <span class="font-bold">Commande N°</span>
                        {{ "Bouff_CX_" + order.id }}
                    </p>
                    <OrderStatus :state="order.status" />
                </div>

                <svg
                    class="flex-shrink-0 ml-1.5 w-5 h-5 transition duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19 9l-7 7-7-7"
                    />
                </svg>
            </summary>

            <div
                class="px-6 my-2 leading-relaxed text-gray-700 space-y-2 text-justify"
            >
                <div
                    v-for="order_item in order.order_items"
                    class="flex justify-between space-x-3"
                >
                    <span class="text-bouff-primaryone"
                        >x{{ order_item.quantity }}</span
                    >
                    <span>{{ order_item.name }}</span>
                    <span class="text-bouff-primaryone"
                        >{{ order_item.price }} CFA</span
                    >
                </div>
            </div>

            <div class="flex items-center justify-center">
                <VueQrcode
                    :value="'Bouff_CX_' + order.id"
                    type="image/png"
                    :width="10"
                    :scale="5"
                    :color="{ dark: 'blue', light: '#fff' }"
                    :quality="1"
                />
            </div>
        </details>
    </li>
</template>
