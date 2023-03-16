import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'

const wishlistStore = createStore({
    state: {
        wishlist: []
    },
    mutations: {
        addToWishlist(state, product) {
            const index = state.wishlist.findIndex(item => item.id === product.id)
            if (index === -1) {
                state.wishlist.push(product)
            }
        },
        removeFromWishlist(state, index) {
            state.wishlist.splice(index, 1);
        }
    },
    actions: {
        addToWishlist({ commit, getters }, product) {
            if (!getters.productInWishlist(product.id)) {
                commit('addToWishlist', product)
            }
        },
        removeFromWishlist({ commit }, index) {
            commit('removeFromWishlist', index)
        }
    },
    getters: {
        productInWishlist: state => productId => {
            return state.wishlist.find(item => item.id === productId) !== undefined
        },
        wishlistProducts: state => {
            return state.wishlist
        },
        wishlistProductCount: state => {
            return state.wishlist.length;
        },
        wishlistTotalPrice: state => {
            return state.wishlist.reduce((total, item) => {
                return total + (item.quantity * item.price)
            }, 0)
        }
    },
    plugins: [createPersistedState()]
})

export default wishlistStore
