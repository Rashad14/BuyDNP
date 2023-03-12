import { createApp } from 'vue/dist/vue.esm-bundler'
import bus from './event-bus.js'

import QuickViewProduct from "./components/ProductHoverActions/QuickViewProduct.vue"
import ProductHoverAction from './components/ProductHoverActions/ProductHoverAction.vue'

const app = createApp({})

// Product Hover Actions Components
app.component('product-hover-action', ProductHoverAction)
app.component('quick-view-product', QuickViewProduct)

app.config.globalProperties.$bus = bus

app.mount('#app')
