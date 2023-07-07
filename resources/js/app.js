require('./bootstrap')

import { createApp } from 'vue'
import Dashboard from './components/Dashboard.vue'
import Login from './components/Login.vue'
import Timesheet from './components/Timesheet.vue'

const app = createApp({})

app.component('dashboard', Dashboard)
app.component('Login', Login)
app.component('timesheet', Timesheet)

app.mount('#app')