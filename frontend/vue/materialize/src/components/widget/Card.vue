<template>
	<div class="row">

		<div v-for="item in items" class="col s12 m6 l3">
			<div :class="`card ${item.style.cardClass}`">
				<div class="padding-4">
					<div class="col s7 m7">
						<i class="material-icons background-round mt-5">{{ item.icon }}</i>
						<p>{{ item.name }}</p>
					</div>
					<div class="col s5 m5 right-align">
						<h5 class="mb-0">{{ item.value.panel1 }}</h5>
						<p class="no-margin">{{ item.value.panel2 }}</p>
						<p>{{ item.value.panel3 }}</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</template>

<script>
	export default {
		name: 'widget-card',	
		data() {
			return {
				items: [
				{
					name: 'Orders',
					icon: 'add_shopping_cart',
					style: {
						rowClass: '',
						cardClass: 'gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text',
					},
					value: {
						panel1: '690',
						panel2: 'New',
						panel3: '6,00,00',
					}
				},
				{
					name: 'Clients',
					icon: 'perm_identity',
					style: {
						rowClass: '',
						cardClass: 'gradient-45deg-red-pink gradient-shadow min-height-100 white-text',
					},
					value: {
						panel1: '1885',
						panel2: 'New',
						panel3: '1,12,900',
					}
				},
				{
					name: 'Sales',
					icon: 'timeline',
					style: {
						rowClass: '',
						cardClass: 'gradient-45deg-amber-amber gradient-shadow min-height-100 white-text',
					},
					value: {
						panel1: '80%',
						panel2: 'Growth',
						panel3: '3,42,230',
					}
				},
				{
					name: 'Profit',
					icon: 'attach_money',
					style: {
						rowClass: '',
						cardClass: 'gradient-45deg-green-teal gradient-shadow min-height-100 white-text',
					},
					value: {
						panel1: '$890',
						panel2: 'Today',
						panel3: '$25,000',
					}
				},
				],
			}
		},
	}
</script>