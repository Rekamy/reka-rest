<template>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="card-panel">
				<h4 class="header2">Form Advance</h4>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input id="first_name" type="text">
								<label for="first_name" class="">First Name</label>
							</div>
							<div class="input-field col s6">
								<input id="last_name" type="text">
								<label for="last_name" class="">Last Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="email5" type="email">
								<label for="email" class="">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password6" type="password">
								<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="file-field input-field col s6">
								<input class="file-path validate" type="text">
								<div class="btn">
									<span>Age</span>
									<input type="file">
								</div>
							</div>
							<div class="input-field col s6">
								<span>Image</span>
								<p class="range-field">
									<input type="range" id="test5" min="0" max="100"><span class="thumb"><span class="value"></span></span>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="message5" class="materialize-textarea" length="120"></textarea>
								<label for="message">Message</label>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
										<i class="material-icons right">send</i>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'form-text',
		data: function() {
/*			formObject : {
				field : {
					name :'test'
				}
				type:'text, email, password, submit, ',
				class:'input-field, file-field, file-path, validate, materialize-textarea, mater',
			}*/
			return {
				form: {
					
				}
			}
		}
	}

</script>