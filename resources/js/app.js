require('./bootstrap');
import { createApp } from 'vue'
import store from './client/store'

const app = createApp({}).use(store)

//Client Components
app.component('branch-map', require('./client/modules/contact/MapSection.vue').default);
app.mount('#app')
