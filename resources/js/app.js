import { createApp } from 'vue/dist/vue.esm-bundler'
import wishlistStore from './store/wishlist'
import store from './store/cart'
import bus from './event-bus'

// ProductHoverActions components
import ProductHoverAction from './components/ProductHoverActions/ProductHoverAction.vue'
import QuickViewProduct from "./components/ProductHoverActions/QuickViewProduct.vue"
import Wishlist from './components/ProductHoverActions/Wishlist.vue'

// Messages components
import AddToCart from "./components/Messages/AddToCart.vue";
import AddToWishlist from "./components/Messages/AddToWishlist.vue";

// Cart components
import ProductDetailsCart from "./components/Cart/ProductDetailsCart.vue";
import YourCart from "./components/Cart/YourCart.vue";
import MiniCart from "./components/Cart/MiniCart.vue";

const app = createApp({})

// Product Hover Actions Components
app.component('product-hover-action', ProductHoverAction)
app.component('quick-view-product', QuickViewProduct)
app.component('wishlist', Wishlist)

// Messages components
app.component('add-to-wishlist', AddToWishlist);
app.component('add-to-cart', AddToCart);

// Cart components
app.component('product-details-cart', ProductDetailsCart);
app.component('your-cart', YourCart);
app.component('mini-cart', MiniCart);

app.config.globalProperties.$wishlistStore = wishlistStore
app.config.globalProperties.$bus = bus

// Registering the stores
app.use(wishlistStore)
app.use(store)

app.mount('#app')
