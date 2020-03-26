/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from "vue";
import Vuex from "vuex";
import VueRouter from "vue-router";
import store from './store';

import VueDataTables from 'vue-data-tables'
import VueSignaturePad from 'vue-signature-pad';
import * as VueGoogleMaps from 'vue2-google-maps'


Vue.component('spinner' , require('@/components/common/Spinner.vue'));


import router from "./routes";

Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VueDataTables);
Vue.use(VueSignaturePad);


Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyDoVDtqy0CWpJpPZW792OAMUzYJz-uUHbU',
    libraries: 'places',
  },
  installComponents: true
})

const app = new Vue({
	el: "#app",
	router: router,
	store
});

