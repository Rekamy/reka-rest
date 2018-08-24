<template>
	<div id="content-container">
		<div id="main">
			<div class="wrapper">
				<!-- <app-sidebar-left /> -->
				<app-floating-button/>
				<app-breadcrums/>

				<router-view/>
				<app-sidebar-right />
			</div>
		</div>
	</div>
</template>

<script>
	import LeftSidebar from '@/components/layout/LeftSidebar.vue'
	import RightSidebar from '@/components/layout/RightSidebar.vue'
	import Content from '@/components/layout/Content.vue'
	import FloatingButton from '../widget/FloatingButton.vue'
	import Breadcrums from '../widget/Breadcrums.vue'

	export default {
		name: 'content-container',
		components: {
			'app-sidebar-right': RightSidebar,
			'app-sidebar-left': LeftSidebar,
			'app-content': Content,
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