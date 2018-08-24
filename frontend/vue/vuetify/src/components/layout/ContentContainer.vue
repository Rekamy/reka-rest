<template>
	<v-content>
		<router-view/>
	</v-content>
</template>

<script>
	import LeftSidebar from '@/components/layout/LeftSidebar.vue'
	import RightSidebar from '@/components/layout/RightSidebar.vue'
	import Content from '@/components/layout/Content.vue'

	export default {
		name: 'content-container',
		components: {
			'app-sidebar-right' : RightSidebar,
			'app-sidebar-left' : LeftSidebar,
			'app-content' : Content
		}
	}
</script>


<style>
	#content-container {
		margin-top:64px;
	}
</style>