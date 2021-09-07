require('./bootstrap');

window.Vue = require('vue').default;

// Auto register
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('CombineGeometry', require('./components/CombineGeometry.vue').default);

const app = new Vue({
    el: '#app',
});
