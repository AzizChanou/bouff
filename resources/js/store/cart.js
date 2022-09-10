import { defineStore } from "pinia";
import Storage from './localstorage';

const carts = Storage.fetchAll();

export const useCartStore = defineStore("cart", {
    state: () => ({
        cart: carts || [],
    }),
    getters: {
        totalCart() {
            return this.cart.length;
        },
        getCart() {
            return this.cart;
        },
        totalCartPrice() {
            let totalPrice = 0;
            for (let i = 0; i < this.cart.length; i++) {
                totalPrice += this.cart[i].quantity * this.cart[i].food.price;
            }
            return totalPrice;
        },
        totalCartTva() {
            return ((this.totalCartPrice + 500) + (this.totalCartPrice * 0.019));
        }, 
    },
    actions: {
        addFoodToCart(nfood) {
            if (this.cart.length != 0) {
                if (this.cart.find(({ food }) => food.id === nfood.id)) {
                    this.cart.find(({ food }) => food.id === nfood.id).quantity++;
                } else {
                    this.cart.push({
                        food: nfood,
                        quantity: 1,
                    });
                }
            } else {
                this.cart.push({
                    food: nfood,
                    quantity: 1,
                });
            }
        },
        removeFoodFromCart(nfood) {
            if (this.cart.length != 0) {
                if (this.cart.find(({ food }) => food.id === nfood.id)) {
                    if (this.cart.find(({ food }) => food.id === nfood.id).quantity <= 1) {
                        this.cart = this.cart.filter(({ food }) => food.id != nfood.id);
                    } else {
                        this.cart.find(({ food }) => food.id === nfood.id).quantity--;
                    }
                }
            }
        },
        resetCart() {
            this.cart.splice(0, this.cart.length);
            //this.cart = carts || [];
        },
    },
})
