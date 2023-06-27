<script setup>
import { useCartStore } from "@/store/cart";
import Button from "@/Components/Button.vue";
import { useForm, usePage } from "@inertiajs/inertia-vue3";
import { computed, onMounted, onUnmounted, ref } from "vue";
import {
    openKkiapayWidget,
    addKkiapayListener,
    removeKkiapayListener,
} from "kkiapay";
import { Inertia } from "@inertiajs/inertia";
const user = usePage().props.value?.auth?.user;
const cartStore = useCartStore();

const form = useForm({
    cart: cartStore,
    comment: "String",
    address: "",
    phone: "61000000",
    transactionid: null,
    account: "",
});

const submit = () => {
    form.post(route("order.store"));
    cartStore.resetCart();
};
const isMounted = ref(true);

const pay = () => {
    if (user?.rule !== "user") {
        Inertia.get(route("login"));
    } else {
        if (navigator.onLine) {
            openKkiapayWidget({
                callback: "",
                data: "",
                amount: cartStore.totalCartPrice + 500,
                api_key: "40c5cb501c9611ed995cd39f617b9df2",
                paymentmethod: "momo",
                theme: "#f39719",
                sandbox: true,
                address: form.address,
                email: "azobo@yopmail.fr",
                phone: form.phone,
            });
        } else {
            alert("Veuillez vous connecter à internet et ressayer !");
        }
    }
};

const successHandler = (response) => {
    if (isMounted.value) {
        form.transactionid = response.transactionId;
        form.account = response.account;
        if (response.transactionId) {
            submit();
        }
    }
};

onMounted(() => {
    addKkiapayListener("success", successHandler);
});

onUnmounted(() => {
    isMounted.value = false;
    removeKkiapayListener("success", successHandler);
});
</script>

<template>
    <div
        v-if="cartStore.totalCart == 0"
        class="flex h-[95%] justify-center items-center"
    >
        <p class="">Aucune Bouff</p>
    </div>
    <div v-else class="flex flex-col h-[95%] justify-between">
        <div class="flex w-full flex-col items-center p-1 space-y-3">
            <div
                class="flex flex-row items-center px-2 py-1 flex-nowrap bg-bouff-primarytree w-full rounded"
            >
                <span class="w-[10%] flex items-center justify-center">
                    <i class="fi-sr-marker"></i>
                </span>
                <div class="w-full pl-2">
                    <h3 class="text-sm font-semibold">Localisation</h3>
                    <input
                        type="text"
                        v-model="form.address"
                        class="w-full bg-bouff-primarytree outline-none"
                        placeholder="Konoha, Leaf village"
                    />
                </div>
            </div>
            <div
                class="flex flex-row items-center px-2 py-1 flex-nowrap bg-bouff-primarytree w-full rounded"
            >
                <span class="w-[10%] flex items-center justify-center">
                    <i class="fi-sr-smartphone"></i>
                </span>
                <div class="w-full pl-2">
                    <h3 class="text-sm font-semibold">Numéro de téléphone</h3>
                    <input
                        type="text"
                        v-model="form.phone"
                        class="w-full bg-bouff-primarytree outline-none"
                        placeholder="Numéro de téléphone"
                    />
                </div>
            </div>
        </div>
        <ul class="overflow-y-scroll h-full space-y-1 p-2">
            <li
                v-for="cart in cartStore.getCart"
                :key="cart.food.id"
                class="flex items-start justify-between"
            >
                <h3 class="">
                    {{ cart.food.name }}
                    <span class="block text-xs text-bouff-primaryone"
                        >à {{ cart.food.price }} CFA</span
                    >
                </h3>
                <div class="text-right">
                    <span class="block"
                        >{{ cart.quantity * cart.food.price }} CFA</span
                    >
                    <div class="text-white">
                        <button
                            @click="cartStore.removeFoodFromCart(cart.food)"
                            class="px-1 bg-bouff-primaryone rounded-l-md hover:bg-bouff-secondarytwo duration-500"
                        >
                            <i class="fi-sr-minus"></i>
                        </button>
                        <span class="text-bouff-secondarytwo p-2">{{
                            cart.quantity
                        }}</span>
                        <button
                            @click="cartStore.addFoodToCart(cart.food)"
                            class="px-1 bg-bouff-primaryone rounded-r-md hover:bg-bouff-secondarytwo duration-500"
                        >
                            <i class="fi-sr-plus"></i>
                        </button>
                    </div>
                </div>
            </li>
        </ul>

        <div class="flex flex-col space-y-2">
            <div class="flex flex-col space-y-2 p-2 border-y-2">
                <div class="flex flex-row justify-between">
                    <span>Frais de livraison</span><span>500 CFA</span>
                </div>
                <div class="flex flex-row justify-between">
                    <span>Frais de service</span
                    ><span
                        >{{
                            (cartStore.totalCartPrice * 0.01).toFixed(2)
                        }}
                        CFA</span
                    >
                </div>
                <div class="flex flex-row justify-between">
                    <span>Sous total</span
                    ><span>{{ cartStore.totalCartPrice }} CFA</span>
                </div>
            </div>
            <div class="flex flex-col px-2 space-y-3">
                <div class="flex flex-row justify-between">
                    <span>Total (TVA inclus)</span>
                    <span>{{ cartStore.totalCartTva }} CFA</span>
                </div>
                <Button
                    @click="pay()"
                    :disabled="
                        cartStore.totalCart < 1 ||
                        $page?.props?.auth?.user?.rule === 'deliverer' ||
                        $page?.props?.auth?.user?.rule === 'eatery' ||
                        form.address.length <= 0
                    "
                    :class="{
                        'opacity-25':
                            cartStore.totalCart < 1 ||
                            $page?.props?.auth?.user?.rule === 'deliverer' ||
                            $page?.props?.auth?.user?.rule === 'eatery' ||
                            form.address.length <= 0,
                    }"
                    name="yes"
                    text="Passer commande"
                />
            </div>
            <div class="h-28 md:h-0"></div>
        </div>
    </div>
</template>
