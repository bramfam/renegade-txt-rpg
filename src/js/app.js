require("./bootstrap");
// we can export a router

window.Vue = require('vue');

Vue.component("user-option",require('./components/AccountOption.vue'))
// Vue.component("user-option",require('./components/UserOption.vue'))
	
var vm = new Vue({
	el : '#app',
	data(){
		return {
			sampleData : []
		}
	},
	mounted(){				
		console.log("Mounted ready..");
	}
});


