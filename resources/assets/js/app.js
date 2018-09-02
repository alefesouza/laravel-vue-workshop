import App from './App.vue';
import Vue from 'vue';
import router from './router';

import 'bootstrap';

new Vue({
  router,
  render: h => h(App),
}).$mount('#app');
