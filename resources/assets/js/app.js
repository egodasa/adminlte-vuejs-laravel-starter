
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap'
import Vue from 'vue'
import contohHalaman from './views/contohHalaman.vue'
import header from './components/master/header.vue'
import sidebar from './components/master/sidebar.vue'
import content from './components/master/content.vue'
import footer from './components/master/footer.vue'
import formGenerator from './components/master/formGenerator.vue'
import Vuetable from 'vuetable-2/src/components/Vuetable'

window.Vue = Vue;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('contoh-halaman', contohHalaman);
Vue.component('header-section', header);
Vue.component('sidebar-section', sidebar);
Vue.component('content-section', content);
Vue.component('footer-section', footer);
Vue.component('form-generator', formGenerator);
Vue.component('vuetable', Vuetable);
Vue.component('vuetable-pagination', Vuetable.VuetablePagination);
Vue.component('vuetable-pagination-info', Vuetable.VuetablePaginationInfo);

