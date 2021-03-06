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
 * Eg. ./components/InfoUserCompoment.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('card-user-component', require('./components/CardUserCompoment').default);
Vue.component('info-user-component', require('./components/InfoUserCompoment.vue').default);
Vue.component('liste-user-component', require('./components/ListeUsersCompoment').default);
Vue.component('table-presence-component', require('./components/tablePresenceCompoment').default);
Vue.component('permission-component', require('./components/permission/PermissionCompoment').default);
Vue.component('tab-component', require('./components/permission/TabCompoment').default);
Vue.component('tabRecu-component', require('./components/permission/TabRecuCompoment.vue').default);
Vue.component('tabHistory-component', require('./components/permission/TabHistoryCompoment').default);
Vue.component('tabcontent-component', require('./components/permission/TabContentCompoment').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
// export const bus = new Vue();
