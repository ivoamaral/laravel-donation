@layout('layouts/main')
 
@section('content')

	<div class="row">
		<div class="span4 offset4" style="text-align:center;">

    		<h1>Welcome to Lavarel Donations!</h1>
            <p>Make your donations very easy!</p>

            <form class="well" method="POST" action="user/login">
                <input type="email" placeholder="Email" name="email" id="email" />
                <input type="password" placeholder="Password" name="password" id="password" />
                <br />
                <button type="submit" class="btn btn-success">Login</button> or
                <button type="button" class="btn btn-primary" onclick="$('#register_modal').modal();">Register</button>
            </form>        
        </div>
	</div>    	

@endsection