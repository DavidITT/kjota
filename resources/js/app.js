require('./bootstrap');
import { createApp } from 'vue'
import store from './client/store'

const app = createApp({}).use(store)

//Client Components
app.component('hello-world', require('./client/HelloWorld.vue').default);

app.mount('#app')
