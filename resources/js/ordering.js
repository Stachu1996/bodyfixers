window.Vue = require('vue');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('bs-stepper');

Vue.component('variants-component', require('./components/VariantsComponent.vue').default);
Vue.component('ordering-component', require('./components/OrderingComponent.vue').default);

const app = new Vue({
    el: '#app',
});
