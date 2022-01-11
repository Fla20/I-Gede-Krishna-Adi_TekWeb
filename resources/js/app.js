require("./bootstrap");

window.Vue = require("vue").default;

import App from "./components/App.vue";

import VueAxios from "vue-axios";
import VueRouter from "vue-router";
import axios from "axios";

import { kasirRoutes } from "./routes/kasir";
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.all";

import Vue from "vue";

Vue.use(VueRouter);
Vue.use(VueSweetalert2);
Vue.use(VueAxios, axios);

Vue.component("pagination", require("laravel-vue-pagination"));

const kasirRouter = new VueRouter({
    mode: "history",
    routes: kasirRoutes,
});

const app = new Vue({
    el: "#app",
    router: kasirRouter,
    render: (h) => h(App),
});
