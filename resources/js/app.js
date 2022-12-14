require('./bootstrap');

window.Vue = require('vue').default;
import { store } from "./store/index";

Vue.component("comment", require("./components/Comment").default);
Vue.component("comments", require("./components/Comments").default);
Vue.component("new-comment", require("./components/NewComment").default);

const app = new Vue({
    el: '#app',
});