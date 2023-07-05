require('./bootstrap');
import { createApp } from 'vue'
import store from './client/store'

const app = createApp({}).use(store)


/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/
app.component('general', require('./client/modules/account/components/General.vue').default);
app.component('change-password', require('./client/modules/account/components/ChangePassword.vue').default);
/*
|--------------------------------------------------------------------------
| Branch Map
|--------------------------------------------------------------------------
*/
app.component('branch-map', require('./client/modules/contact/MapSection.vue').default);

/*
|--------------------------------------------------------------------------
| Mount App
|--------------------------------------------------------------------------
*/
app.mount('#app')
