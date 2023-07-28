require('./bootstrap')

import { createApp } from 'vue'
import Dashboard from './components/Dashboard.vue'
import Login from './components/Login.vue'
import Timesheet from './components/Timesheet.vue'
// import AddTimesheet from './components/AddTimesheet.vue'

const app = createApp({})
// Vue.prototype.$userId = document.querySelector("meta[name='user_id']").getAttribute('content');
// Vue.prototype.$user = window.User;

app.component('dashboard', Dashboard)
app.component('login', Login)
app.component('timesheet', Timesheet)
// app.component('addtimesheet', AddTimesheet)

app.mount('#app')