import { createApp } from 'vue/dist/vue.esm-bundler'
import ProductComponent from './components/ProductComponent.vue'

const app = createApp({})
app.component('product-component', ProductComponent)
app.mount('#app')
