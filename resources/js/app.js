require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/Welcome.vue'
import Login from './components/Login.vue'
import Timesheet from './components/Timesheet.vue'
import AddTimesheet from './components/AddTimesheet.vue'

const app = createApp({})

app.component('welcome', Welcome)
app.component('Login', Login)
app.component('timesheet', Timesheet)
app.component('addtimesheet', AddTimesheet)

app.mount('#app')