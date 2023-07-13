require('./bootstrap');
import {createApp} from 'vue'
import store from './admin/store'
import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs'
const app = createApp({});

/*
|--------------------------------------------------------------------------
| Store
|--------------------------------------------------------------------------
*/
app.use(store)

/*
|--------------------------------------------------------------------------
| Spatie in vue
|--------------------------------------------------------------------------
*/

app.use(LaravelPermissionToVueJS)


/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/
app.component('product-list', require('./admin/modules/products/ProductList.vue').default);
/*
|--------------------------------------------------------------------------
| Categories
|--------------------------------------------------------------------------
*/
app.component('category-list', require('./admin/modules/categories/Category.vue').default);
/*
|--------------------------------------------------------------------------
| Orders
|--------------------------------------------------------------------------
*/
app.component('order-list', require('./admin/modules/orders/OrderList.vue').default);

/*
|--------------------------------------------------------------------------
| Sales
|--------------------------------------------------------------------------
*/
app.component('sale-list', require('./admin/modules/sales/SalesList.vue').default);
/*
|--------------------------------------------------------------------------
| Content
|--------------------------------------------------------------------------
*/

//               Branchs
app.component('branch-list', require('./admin/modules/content/branchs/Branch.vue').default);

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/
app.component('contact-main', require('./admin/modules/contact/Contact.vue').default);


/*
|--------------------------------------------------------------------------
| Mount App
|--------------------------------------------------------------------------
*/
app.mount('#admin-app')
