/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

import Form from "vform";
window.Form = Form;
import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

let routes = [
    {
        path: "/data-barang",
        component: require("./components/user/data-barang.vue").default,
    },
    {
        path: "/permintaan-barang",
        component: require("./components/user/permintaan-barang.vue").default,
    },
    {
        path: "/manage-dataBarang",
        component: require("./components/warehouse/data-barang.vue").default,
    },
    {
        path: "/data-user",
        component: require("./components/warehouse/data-user.vue").default,
    },
    {
        path: "/list-permintaan",
        component: require("./components/manager/data-permintaanBarang.vue")
            .default,
    },
    {
        path: "/list-permintaan-a",
        component: require("./components/warehouse/data-permintaan.vue")
            .default,
    },
    {
        path: "/list-data-masuk",
        component: require("./components/manager/data-pemasukanBarang.vue")
            .default,
    },
    {
        path: "/list-data-keluar",
        component: require("./components/manager/data-pengeluaranBarang.vue")
            .default,
    },
];

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

const router = new VueRouter({
    routes,
});

const app = new Vue({
    el: "#app",
    router,
});
