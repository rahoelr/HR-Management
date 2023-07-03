require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/Welcome.vue'
import Login from './components/Login.vue'

const app = createApp({})

app.component('welcome', Welcome)
app.component('Login', Login)

app.mount('#app')