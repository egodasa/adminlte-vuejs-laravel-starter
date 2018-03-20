
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap'
import Vue from 'vue'
import contohHalaman from './views/contohHalaman.vue'
import tabs from './components/master/tabs.vue'
import tab from './components/master/tab.vue'
import header from './components/master/header.vue'
import modal from './components/master/modal.vue'
import alert from './components/master/alert.vue'
import col_1_header from './components/master/col-1-header.vue'
import sidebar from './components/master/sidebar.vue'
import content from './components/master/content.vue'
import col_1_content from './components/master/col-1-content.vue'
import footer from './components/master/footer.vue'
import col_1_footer from './components/master/col-1-footer.vue'
import formGenerator from './components/master/formGenerator.vue'
import Vuetable from 'vuetable-2/src/components/Vuetable'
import VuetablePagination from 'vuetable-2/src/components/VuetablePagination'
import VuetablePaginationInfo from 'vuetable-2/src/components/VuetablePaginationInfo'
import Notify from 'vue2-notify'
import store from 'store'
import vuecookies from 'vue-cookies'

window.Vue = Vue;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(Notify,{
	position : 'bottom-right'
})
Vue.component('contoh-halaman', contohHalaman);
Vue.component('alert', alert);
Vue.component('tab', tab);
Vue.component('tabs', tabs);
Vue.component('modal', modal);
Vue.component('header-section', header);
Vue.component('col-1-header-section', col_1_header);
Vue.component('sidebar-section', sidebar);
Vue.component('content-section', content);
Vue.component('col-1-content-section', col_1_content);
Vue.component('footer-section', footer);
Vue.component('col-1-footer-section', col_1_footer);
Vue.component('form-generator', formGenerator);
Vue.component('vuetable', Vuetable);
Vue.component('vuetable-pagination', VuetablePagination);
Vue.component('vuetable-pagination-info', VuetablePaginationInfo);

const cks = {
    setCookies (x,y,z = null){
        z == null ? vuecookies.set(x,y) : vuecookies.set(x,y,z)
    },
    getCookies (x){
        return vuecookies.get(x)
    },
    clearCookies (x){
        vuecookies.remove(x)
    },
    isCookies (x){
        return vuecookies.isKey(x)
    }
}
const localStorage = {
    setLcs (x,y){
        store.set(x,y)
    },
    getLcs (x){
        return store.get(x)
    },
    clearLcs (){
        store.clearAll()
    },
    removeLcs (x){
        store.remove(x)
    }
}
Vue.prototype.$lcs = localStorage
Vue.prototype.$cks = cks
