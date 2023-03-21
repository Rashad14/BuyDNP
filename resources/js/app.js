import { createApp } from 'vue/dist/vue.esm-bundler'
import wishlistStore from './store/wishlist'
import store from './store/cart'
import bus from './event-bus'

// ProductHoverActions components
import AddProductToWishlist from './components/ProductHoverActions/AddToWishlist.vue';
import ProductHoverAction from './components/ProductHoverActions/ProductHoverAction.vue';
import QuickViewProduct from "./components/ProductHoverActions/QuickViewProduct.vue";
import UtilizeWishlist from "./components/ProductHoverActions/UtilizeWishlist.vue";
import Wishlist from './components/ProductHoverActions/Wishlist.vue';

// Messages components
import AddToCart from "./components/Messages/AddToCart.vue";
import AddToWishlist from "./components/Messages/AddToWishlist.vue";

// Cart components
import ProductDetailsCart from "./components/Cart/ProductDetailsCart.vue";
import CheckoutCart from "./components/Cart/CheckoutCart.vue";
import ShoppingCart from "./components/Cart/ShoppingCart.vue";
import UtilizeCart from "./components/Cart/UtilizeCart.vue";
import ClearCart from "./components/Cart/ClearCart.vue";
import YourCart from "./components/Cart/YourCart.vue";
import MiniCart from "./components/Cart/MiniCart.vue";

const app = createApp({})

// Product Hover Actions Components
app.component('add-product-to-wishlist', AddProductToWishlist)
app.component('product-hover-action', ProductHoverAction)
app.component('quick-view-product', QuickViewProduct)
app.component('utilize-wishlist', UtilizeWishlist)
app.component('wishlist', Wishlist)

// Messages components
app.component('add-to-wishlist', AddToWishlist);
app.component('add-to-cart', AddToCart);

// Cart components
app.component('product-details-cart', ProductDetailsCart);
app.component('checkout-cart', CheckoutCart);
app.component('shopping-cart', ShoppingCart);
app.component('utilize-cart', UtilizeCart);
app.component('clear-cart', ClearCart);
app.component('your-cart', YourCart);
app.component('mini-cart', MiniCart);

app.config.globalProperties.$wishlistStore = wishlistStore
app.config.globalProperties.$bus = bus

// Registering the stores
app.use(wishlistStore)
app.use(store)

app.mount('#app')
