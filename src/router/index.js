import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Client from '../views/Client.vue'
import Service from '../views/Service.vue'
import Facture from '../views/Facture.vue'
import Parametrage from '../views/Parametrage.vue'

Vue.use(VueRouter)

const routes = [

    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/client',
        name: 'Client',
        component: Client
    },
    {
        path: '/service',
        name: 'Service',
        component: Service
    },
    {
        path: '/facturation',
        name: 'Facture',
        component: Facture
    },
    {
        path: '/settings',
        name: 'Parametrage',
        component: Parametrage
    },
    {
        path: '/about',
        name: 'About',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: function () {
            return import(/* webpackChunkName: "about" */ '../views/About.vue')
        }
    },
    {
      path:'*',
      redirect : '/'
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
