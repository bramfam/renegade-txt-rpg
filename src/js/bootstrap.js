window._ = require('lodash');

import Vue from 'vue';

import $ from 'jquery';

import VueRouter from 'vue-router';

import VModal from 'vuejs-modal';

Vue.use(VModal);


$(function(){
	console.log("JQuery is now running.");

	$("#registerAccount").on('click',function(evt){
		console.log(evt);
	});

	$("#loginForm").hide();

	$('#loginOption').on('click',function(reg){
		console.log(reg);
		$('#user-actions > form#registerForm')
		.replaceWith("<h1>Lorem ipsum dolor sit amet.</h1>");
	});	
	
});	