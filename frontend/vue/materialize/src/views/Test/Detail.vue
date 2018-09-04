<template>
	<div class="detail">
		<h1>This is an detail page</h1>
	</div>
</template>

<script>
	export default {

		data () {
			return {
				data: null
			}
		},
		methods: {
			// attributes () {
			// 	let col = Object.keys(this.dataProvider.data[0])
			// }
			getData() {
				let session = this;
				this.$http.get('http://localhost/micro/efies/')
				.then(function(res){
					session.dataProvider.data = res.data;
					session.attributes = Object.keys(session.dataProvider.data[0])
					console.log(session.dataProvider.data);
				})
				.catch(function (err) {
					console.log(err);
				}) 

			},
		},
		mounted () {
			// console.log("this.id");
		}
	}


	
</script>

<style lang="scss"></style>