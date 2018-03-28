
require('./bootstrap');

window.Vue = require('vue');

Vue.component('user-list', require('./components/UserList.vue'));
Vue.component('user-form', require('./components/UserForm.vue'));

const app = new Vue({
    el: '#app',
    data : {
        showForm : false,
        showList : true
    }
});
