require('./bootstrap');
import axios from 'axios';
import Vue from 'vue/dist/vue';


var app = new Vue({
	el: '#app',
	data: {
		message: 'Hello Vue',
		array : [],
		id: ""
	},
	mounted: function(){
		axios
			.get('http://127.0.0.1:8000/api/quotes')
			.then((response) => {
				this.array = response.data;
			})
	},
	methods: {
		search: function(){
			axios
				.get('http://127.0.0.1:8000/api/quotes/search/' + this.id)
				.then((response) => {
					this.array = [];
					this.array.push(response.data);
				})
		}
	}
})

