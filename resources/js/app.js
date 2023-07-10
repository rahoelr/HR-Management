require('./bootstrap')

import { createApp } from 'vue'
import Dashboard from './components/Dashboard.vue'
import Login from './components/Login.vue'
import Timesheet from './components/Timesheet.vue'
import Sidebar from './components/Sidebar.vue'
// import AddTimesheet from './components/AddTimesheet.vue'

const app = createApp({})

app.component('dashboard', Dashboard)
app.component('login', Login)
app.component('timesheet', Timesheet)
app.component('sidebar', Sidebar)
// app.component('addtimesheet', AddTimesheet)

app.mount('#app')