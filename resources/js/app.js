require('./bootstrap');



import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)
import VueRouter from 'vue-router'
Vue.use(VueRouter)


const router = new VueRouter({
    mode: 'history',
    routes: require('./routes.js')
})