<script setup>
import { useCartStore } from "@/store/cart";
import { useModalStore } from "@/store/modal";
import ButtonVue from "@/Components/Button.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { onMounted, onUnmounted } from "vue";
import {
    openKkiapayWidget,
    addKkiapayListener,
    removeKkiapayListener,
} from "kkiapay";

const cartStore = useCartStore();
const modalStore = useModalStore();

const form = useForm({
    cart: cartStore,
    comment: "String",
    address: "Cotonou",
    phone: "61000001",
    transactionid: String,
    account: String,
});

const submit = () => {
    form.post(route("order.store"));
};

const pay = () => {
    if (navigator.onLine) {
        openKkiapayWidget({
            callback: "",
            data: "",
            amount: cartStore.totalCartPrice + 500,
            api_key: "40c5cb501c9611ed995cd39f617b9df2",
            paymentmethod: "momo",
            theme: "#f39719",
            sandbox: true,
            email: "randomgail@gmail.com",
            phone: "61000000",
        });
    } else {
        alert("Veuillez vous connecter a internet et ressayer !");
    }
};

const successHandler = (response) => {
    console.log(response);
    form.transactionid = response.transactionId;
    form.account = response.account;
};

onMounted(() => {
    addKkiapayListener("success", successHandler);
    console.log("Entre");
    console.log(form.transactionid);
});
onUnmounted(() => {
    removeKkiapayListener("success", successHandler);
    console.log("Sort");
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
        <div>
            <div class="flex w-full flex-col items-center p-1 space-y-3">
                <div
                    class="flex flex-row items-center px-4 py-1 flex-nowrap bg-bouff-primarytree w-full rounded"
                >
                    <span class="w-[10%] flex items-center justify-center">
                        <i class="fi-sr-marker"></i>
                    </span>
                    <div class="w-full pl-2">
                        <h3 class="text-sm font-semibold">Localisation</h3>
                        <input
                            type="text"
                            class="w-full bg-bouff-primarytree"
                            placeholder="Cotonou, Serietei Karakura "
                        />
                        <select name="localisation" id="" class="hidden">
                            <option value="Cotonou, Marina" selected>
                                Cotonou, Serietei Karakura
                            </option>
                            <option value="Cotonou, Marina">
                                Porto-novo, Konoha
                            </option>
                        </select>
                    </div>
                </div>
                <div
                    class="flex flex-row items-center px-4 py-1 flex-nowrap bg-bouff-primarytree w-full rounded"
                >
                    <span class="w-[10%] flex items-center justify-center">
                        <i class="fi-sr-smartphone"></i>
                    </span>
                    <div class="w-full pl-2">
                        <h3 class="text-sm font-semibold">
                            Numéro de téléphone
                        </h3>
                        <select
                            name="localisation"
                            id=""
                            class="w-full bg-bouff-primarytree"
                        >
                            <option value="Cotonou, Marina" selected>
                                +229 96 00 00 00
                            </option>
                            <option value="Cotonou, Marina">
                                +229 48 15 26 55
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <ul class="overflow-y-auto space-y-1 p-2">
                <li
                    v-for="cart in cartStore.getCart"
                    :key="cart.food.id"
                    class="flex items-start justify-between"
                >
                    <h3>
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
        </div>

        <div class="flex flex-col space-y-2">
            <div class="flex flex-col space-y-2 p-2 border-y-2">
                <div class="flex flex-row justify-between">
                    <span>Frais de livraison</span><span>500 CFA</span>
                </div>
                <div class="flex flex-row justify-between">
                    <span>Frais de service</span
                    ><span>{{ cartStore.totalCartPrice * 0.019 }} CFA</span>
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
                <ButtonVue
                    @click="pay()"
                    :disabled="
                        cartStore.totalCart < 1 || $page.props.auth.user == null
                    "
                    :class="{
                        'opacity-25':
                            cartStore.totalCart < 1 ||
                            $page.props.auth.user == null,
                    }"
                    name="yes"
                    text="Passer commande"
                />
            </div>
            <div class="h-28 md:h-0"></div>
        </div>
    </div>
</template>
