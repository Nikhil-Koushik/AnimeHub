import { createWebHistory, createRouter } from "vue-router";

import AHRoutes from "./routes";

const routes = [...AHRoutes];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
    scrollBehavior(to, from, savedPosition) {
        return { left: 0, top: 0 };
    },
});

router.beforeEach((to, from, next) => {
  next();
})

export default router;
