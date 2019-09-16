/* eslint-disable no-unused-vars */
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue'

var SocialSharing = require('vue-social-sharing');
Vue.use(SocialSharing)


import Siema from 'vue2-siema'
Vue.use(Siema)

Vue.component('social-share', require('./components/SocialShare.vue').default);
Vue.component('video-embed', require('./components/VideoEmbed.vue').default);
Vue.component('hero-slider', require('./components/HeroSlider.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            options: {
                loop: true,
                perPage: 3,
            }
        }
    }
});
