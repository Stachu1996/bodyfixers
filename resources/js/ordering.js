window.Vue = require('vue');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.component('variants-component', require('./components/VariantsComponent.vue').default);

const app = new Vue({
    el: '#app',
});
