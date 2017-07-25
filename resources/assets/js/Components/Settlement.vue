<template>
	<div class="object" v-bind:style="styleObject">
		<div class="object--header">{{name}}</div>
	</div>
</template>

<script>
	export default {

		// @see: https://vuejs.org/v2/guide/components.html#Local-Registration
		components: {
		},

		data: function() {
			return {
				'uuid': '58e729ec-3ecb-4ba9-8ad5-7d1a6bfac8e1',
				'name': 'Settlement S01'
			}
		},

		computed: {
			styleObject: function() {
				return {}
			},
		}
	}
</script>