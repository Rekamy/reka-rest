<template>
	<v-navigation-drawer temporary :right="right" v-model="rightDrawer" fixed app>
		<v-list>
			<v-list-tile @click="right = !right">
				<v-list-tile-action>
					<v-icon>compare_arrows</v-icon>
				</v-list-tile-action>
				<v-list-tile-title>Switch drawer (click me)</v-list-tile-title>
			</v-list-tile>
		</v-list>
	</v-navigation-drawer>
</template>

<script>
	export default {
		name: 'right-sidebar',
		props: {
			clipped: Boolean,
			drawer: Boolean,
			fixed: Boolean,
			items: Array,
			miniVariant: Boolean,
			right: Boolean,
			rightDrawer: Boolean,
			title: String
		},
	}
</script>