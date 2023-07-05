require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/Welcome.vue'
import Login from './components/Login.vue'
import Timesheet from './components/Timesheet.vue'

const app = createApp({})

app.component('welcome', Welcome)
app.component('login', Login)
app.component('timesheet', Timesheet)

app.mount('#app')