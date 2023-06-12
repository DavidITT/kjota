require('./bootstrap');
import { createApp } from 'vue'
import store from './admin/store'

const app = createApp({}).use(store)



/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/
app.component('product-list', require('./admin/modules/products/ProductList.vue').default);

// Mount
app.mount('#admin-app')
