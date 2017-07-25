window.Vue = require('vue');

Vue.component('uv-settlement', require('./Components/Settlement.vue'));

const universe = new Vue({
	el: '#universe'
});
