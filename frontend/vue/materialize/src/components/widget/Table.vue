<template>
	<div id="hoverable-table">
		<input type="checkbox" name="check_all"> </input>
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<h4 class="header"> {{ module.name }}</h4>
						<div class="col s12">
							<table class="highlight bordered centered">
								<thead>
									<tr>
										<th width="10%">#</th>
										<th v-for='col in attributes'>{{ col.toUpperCase() }}</th>
										<th width="15%">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="(data, index) in dataProvider.data" :key='data.id'>					
										<td>{{ index + 1 }}</td>
										<td v-for="col in attributes">{{ data[col] }}</td>
										<td>
											<router-link :to="module.url.view + `/` + data.id" class="btn-floating waves-effect waves-dark brown lighten-5 "><i class="material-icons small black-text">visibility</i></router-link>&nbsp;
											<router-link :to="module.url.update + `/` + data.id" class="btn-floating waves-effect waves-dark brown lighten-5 "><i class="material-icons small black-text">create</i></router-link>&nbsp;
											<router-link :to="module.url.delete + `/` + data.id" class="btn-floating waves-effect waves-dark brown lighten-5 "><i class="material-icons small black-text">delete</i></router-link>&nbsp;
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {

		data () {
			return {
				test: null,
				dataProvider: {
					page: '',
					prev: '',
					next: '',
					query: '',
					data: [
					{
						id: '1',
						name: 'Name 1',
						description: 'description 1',
						value: 'description 1',
						status: 'description 1',
						test: 'description 1',
					},
					// {
					// 	id: '2',
					// 	name: 'Name 1',
					// 	description: 'description 1',
					// 	value: 'description 1',
					// 	status: 'description 1',
					// 	test: 'description 1',
					// },
					// {
					// 	id: '3',
					// 	name: 'Name 1',
					// 	description: 'description 1',
					// 	value: 'description 1',
					// 	status: 'description 1',
					// 	test: 'description 1',
					// },
					],
				},
				attributes: [],
				module: {
					name: 'Module Name',
					url: {
						create:'/form',
						view:'/detail',
						update:'/form',
						delete:'/delete',
					}
				},
			}
		},
		mounted() {
			this.getData();
			// foreach
			// console.log(Object.keys(this.dataProvider.data[0]));
			// console.log(this.dataProvider.data[0][this.attributes[0]]);
		},
		methods: {
			// attributes () {
			// 	let col = Object.keys(this.dataProvider.data[0])
			// }
			getData() {
				let session = this;
				this.$http.get('http://localhost/micro/efies')
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
	}
</script>


<style lang="scss">
table {
	display: block;
	overflow-x: auto;
	white-space: nowrap;
}
</style>