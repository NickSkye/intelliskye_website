/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import AOS from 'aos';
$(document).ready(function() {
    $('header .menu__toggle').on('click', function() {
        $('.mobile__menu').toggleClass('show__menu');
        $('.mobile__menu.show__menu').fadeIn(400);

    });
    $('.mobile__menu .close').on('click', function() {
        $('.mobile__menu').removeClass('show__menu');
    });
    //AOS
    AOS.init();
});
// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

//action when scrolled
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.keep-menu').addClass('fixed');
        $('.keep-menu').addClass('box-shadow');



    } else {


        $('.keep-menu').removeClass('fixed');
        $('.keep-menu').removeClass('box-shadow');

    }
});