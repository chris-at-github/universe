<template>
	<div class="object" v-bind:style="styleObject">
		<div class="object--header">{{name}}</div>
		<!--<div v-on:click="store">Speichern</div>-->
	</div>
</template>

<script>
	import axios from 'axios';

	export default {

		// @see: https://vuejs.org/v2/guide/components.html#Local-Registration
		components: {
		},

		data: function() {
			return {
				'uuid': '58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1',
				'name': 'S2'
			}
		},

		computed: {
			styleObject: function() {
				return {
					'color': '#000'
				}
			}
		},

		created: function() {
//			axios
//				.get('/settlement/58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1')
//				.then(response => {
//					this.name = response.data.name;
//				});
		},

		methods: {
			store: function() {
				axios.post('/settlement/store', {
					name: this.name,
					style: this.styleObject
				})
				.then(response => {
					console.log('r', response);

				})
				.catch(e => {
					console.log('e', e);
				})
			}
		}
	}
</script>