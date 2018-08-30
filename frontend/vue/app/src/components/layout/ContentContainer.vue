<template>
	<div id="content-container">
		<div id="main">
			<div class="wrapper">
				<!-- <app-sidebar-left /> -->
				<app-floating-button/>
				<router-view/>
				<app-sidebar-right />
			</div>
		</div>
	</div>
</template>

<script>
	import LeftSidebar from '@/components/layout/LeftSidebar.vue'
	import RightSidebar from '@/components/layout/RightSidebar.vue'
	import FloatingButton from '@/components/widget/FloatingButton.vue'
	import Breadcrums from '@/components/widget/Breadcrums.vue'

	export default {
		name: 'content-container',
		components: {
			'app-sidebar-right': RightSidebar,
			'app-sidebar-left': LeftSidebar,
			'app-floating-button': FloatingButton,
			'app-breadcrums': Breadcrums,
		}
	}
</script>


<style>
	#content-container {
		margin-top: 64px;
	}
</style>