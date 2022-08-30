export default new class Storage {
    constructor() {
        this.storage = localStorage;
    }

    #save(cart) {
        this.storage.setItem('cart', JSON.stringify(cart));
    }

    fetchAll() {
        const serializedcart = this.storage.getItem('cart');
        return JSON.parse(serializedcart);
    }

    performUpdate(data) {
        this.#save(data);
    }
}
