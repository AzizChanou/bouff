import { defineStore } from "pinia";
import { ref } from "vue";

export const useModalStore = defineStore("modal", {
    state: () => ({
        isModalVisible: false,
    }),
    getters: {
        modalState() {
            return this.isModalVisible;
        },
    },
    actions: {
        toggleModal() {
            this.isModalVisible = !this.isModalVisible;
        },
    },
})
