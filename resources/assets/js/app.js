
require('./bootstrap');

window.Vue = require('vue');

import VeeValidate from 'vee-validate';
import VueAxios from 'axios';
import VuejsDialog from 'vuejs-dialog';

Vue.use(VeeValidate);
Vue.use(VueAxios);
Vue.use(VuejsDialog, {
    html : true,
    okText : 'Proceed',
    cancelText: 'Cancel',
    animation : 'bounce'
});

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
