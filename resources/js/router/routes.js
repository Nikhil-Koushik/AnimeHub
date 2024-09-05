import HOME_PAGE from "../views/home.vue";
import ABOUT_PAGE from "../views/about.vue";
import BATCHES_PAGE from "../views/batches.vue";

export default [
  {
    path: "/ah/home",
    component: HOME_PAGE,
  },
  {
    path: "/ah/about",
    component: ABOUT_PAGE,
  },
  {
    path: "/ah/batches",
    component: BATCHES_PAGE,
  },

];
