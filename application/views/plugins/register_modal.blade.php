<div class="modal hide" id="register_modal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3>Register New User</h3>
	</div>
	<div class="modal-body">
		<form method="POST" action="{{ URL::to('user/register') }}" id="register_modal_form">
			<label for="email">Email</label>
            <input type="email" placeholder="Your Email Address" name="email" id="email" />
            <label for="password">Password</label>
            <input type="password" placeholder="Your Password" name="password" id="password" />           
	    </form>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
    	<button type="button" onclick="$('#register_modal_form').submit();" class="btn btn-primary">Register</a>
	</div>
</div>