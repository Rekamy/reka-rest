<template>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="card-panel">
				<h4 class="header2">Form Advance</h4>
				<div class="row">
					<form class="col s12" @submit="checkForm">
						<div class="row parent">
							<!-- Normal select -->
							<div class="input-field multsel col s12 m6">
									<label class="typo__label">Simple select / dropdown</label>
									<multiselect 
										v-model="form.solo" 
										:options="options" 
										:close-on-select="true" 
										:clear-on-select="false" 
										:hide-selected="true" 
										:preserve-search="true" 
										placeholder="Search here..." 
										label="name" 
										track-by="name" 
										:preselect-first="false">
										<!-- <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.language }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template> -->
									</multiselect>
							</div>

							<!-- Multi select -->
							<div class="input-field multsel col s12 m6">
									<label class="typo__label">Multiple select / dropdown</label>
									<multiselect 
										v-model="multi" 
										:options="options" 
										:multiple="true" 
										:close-on-select="false" 
										:clear-on-select="true" 
										:hide-selected="true" 
										:preserve-search="true" 
										placeholder="Search here..." 
										label="name" 
										track-by="name"
										:preselect-first="false">
									  <!-- <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.language }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template> -->
									</multiselect>
							</div>

							<div class="input-field col s12 m6">
									<input v-model="form.auto" type="text" id="autocomplete-input" class="autocomplete">
									<label for="autocomplete-input">Autocomplete</label>
							</div>

							<div class="input-field col s12 m6">
								<input v-model="form.date" id="date" type="text" class="datepicker">
								<label for="date">Datepicker</label>
							</div>
							<div class="input-field col s12 m6">
								<label v-model="form.time" for="time">Timepicker</label>
								<input id="time" type="text" class="timepicker">
							</div>

							<div class="file-field input-field col s12 m6">
								<div class="btn right">
									<span><i class="material-icons">cloud_upload</i></span>
									<input type="file">
								</div>
								<div class="file-path-wrapper">
									<input v-model="form.file" class="file-path validate" type="text" disabled placeholder="Click to choose file">
								</div>
							</div>
									
							<div class="input-field col s12 m6">
								<input v-model="form.input" id="inp" type="text" class="validate">
								<label for="inp">Text</label>
							</div>
							<div class="input-field col s12 m12">
								<textarea id="message5" class="materialize-textarea"></textarea>
								<label for="message">Message</label>
							</div>

							<div class="input-field right col s12 m6">
								<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import Form from './Form'
	export default Form
</script>

<style lang="scss" scoped>
	@import './Form';
</style>