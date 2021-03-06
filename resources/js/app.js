/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// This needs to be at top of this file in order for icons to work properly
import L from 'leaflet';
delete L.Icon.Default.prototype._getIconUrl;

L.Icon.Default.mergeOptions({
  iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
  iconUrl: require('leaflet/dist/images/marker-icon.png'),
  shadowUrl: require('leaflet/dist/images/marker-shadow.png')
});

// ****** About Page ******

// About
Vue.component('vue-about', require('./components/about/About.vue').default);

// Portfolio Card
Vue.component('portfolio-card', require('./components/about/PortfolioCard.vue').default);

// ****** Leaflet Maps ******

// Basic Map Create Component
Vue.component('basic-map-create', require('./components/maps/BasicMapCreate.vue').default);

// Basic Map Edit Component
Vue.component('basic-map-edit', require('./components/maps/BasicMapEdit.vue').default);

// Basic Map Output Component
Vue.component('basic-map-output', require('./components/maps/BasicMapOutput.vue').default);

// Multi Marker Output Component
Vue.component('multi-marker-output', require('./components/maps/MultiMarkerOutput.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
