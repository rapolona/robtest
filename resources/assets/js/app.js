
require('./bootstrap');

window.Vue = require('vue');

import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);

Vue.component('user-list', require('./components/UserList.vue'));
Vue.component('user-form', require('./components/UserForm.vue'));

const app = new Vue({
    el: '#app',
    data : {
        showForm : false,
        showList : true
    },
    methods : {

    }
});
