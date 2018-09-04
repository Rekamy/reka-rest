<template>
	<v-toolbar fixed app :clipped-left="clipped" color="purple">
		<v-toolbar-title v-text="title"></v-toolbar-title>
		<v-menu offset-y open-on-hover>
			<v-btn slot="activator" flat >
				Dropdown
			</v-btn>
			<v-list>
				<v-list-tile v-for="item in items" :key="item" @click="">
					<v-list-tile-title v-text="item"></v-list-tile-title>
				</v-list-tile>
			</v-list>
		</v-menu>
		<v-btn  icon @mouseover.native.stop="miniVariant = !miniVariant" >
			<v-icon v-html="miniVariant ? 'chevron_right' : 'chevron_left'"></v-icon>
		</v-btn>
		<v-btn icon @click.native.stop="clipped = !clipped" >
			<v-icon>web</v-icon>
		</v-btn>
		<v-btn icon @click.native.stop="fixed = !fixed" >
			<v-icon>remove</v-icon>
		</v-btn>
		<v-spacer></v-spacer>
		<v-btn icon @mouseover.native.stop="rightDrawer = !rightDrawer" >
			<v-icon>menu</v-icon>
		</v-btn>
	</v-toolbar>

</template>
