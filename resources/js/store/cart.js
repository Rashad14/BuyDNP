import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'

const store = createStore({
    state: {
        cart: []
    },
    mutations: {
        addToCart(state, product) {
            // check if product already exists in cart
            const cartItem = state.cart.find(item => item.id === product.id);
            if (cartItem) {
                // if it does, increase the quantity of that item
                cartItem.quantity++;
            } else {
                // otherwise, add the product to the cart with a quantity of 1
                state.cart.push({...product, quantity: 1});
            }
        },
        decrementQuantity(state, product) {
            // Find the product in the cart
            const existingProduct = state.cart.find(p => p.id === product.id);

            if (existingProduct) {
                // If the product exists and its quantity is greater than 1, decrement the quantity
                if (existingProduct.quantity > 1) {
                    existingProduct.quantity--;
                } else {
                    // If the quantity is 1, remove the product from the cart
                    state.cart.splice(state.cart.indexOf(existingProduct), 1);
                }
            }
        },
        removeFromCart(state, index) {
            state.cart.splice(index, 1);
        },
    },
    getters: {
        cartItemCount(state) {
            return state.cart.reduce((total, item) => total + item.quantity, 0);
        },
        cartTotalPrice(state) {
            return state.cart.reduce((total, item) => total + item.price * item.quantity, 0);
        },
        cartProducts(state) {
            return state.cart.map(item => ({
                ...item,
                total: item.price * item.quantity
            }));
        },
    },
    plugins: [createPersistedState()]
});

export default store
