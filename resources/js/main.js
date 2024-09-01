import { createApp } from 'vue';
import App from './App.vue';
import router from './router/index.js';
import './assets/sass/main.scss'

const app = createApp(App);

app.use(router);

router.isReady().then(()=>{
  app.mount("#app");
})


// import Vue from 'vue';
// import App from './App.vue';
// import VUE_ROUTER from './router/index.js';
// import './assets/sass/main.scss'

// new Vue({
//   router: VUE_ROUTER,
//   render: (h) => h(App),
// }).$mount("#app");

