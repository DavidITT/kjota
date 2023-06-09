require('./bootstrap');
import { createApp } from 'vue'
import store from './admin/store'

const app = createApp({}).use(store)

app.mount('#admin-app')
