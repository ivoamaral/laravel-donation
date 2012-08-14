@layout('layouts/main')

@section('content')
<div class="row">

  @include('plugins.navigation')

<div class="span9">

  <div class="gs-content">
		
		<h1 class="page-title">My Account</h1>
		
		<p class="lead">Here's your account. Manage your information, change your password, update contact methods, set notifications, and pick your profile image.</p>
			
		<!-- start tabs -->
		<div class="tabbable">  
		  
		  <!-- start tab nav -->
		  <ul class="nav nav-tabs">
		    <li class="active"><a href="#tab1" data-toggle="tab">Basic Information</a></li>
		    <li><a href="#tab2" data-toggle="tab">Change Password</a></li>
		    <li><a href="#tab3" data-toggle="tab">Profile Picture</a></li>
		    <li><a href="#tab4" data-toggle="tab">Notification Preferences</a></li>
		  </ul>
		  
		  <!-- start tab content -->
		  <div class="tab-content">
		  
		  	<!-- tab 1 -->
		    <div class="tab-pane active" id="tab1">
				
          <form class="form-horizontal">
            <fieldset>              
                <div id="legend" class="">
                  <legend class="">Account Basics</legend>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01">First Name</label>
                  <div class="controls">
                    <input placeholder="" class="input-xlarge" type="text">
                    <p class="help-block"></p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01">Last Name</label>
                  <div class="controls">
                    <input placeholder="" class="input-xlarge" type="text">
                    <p class="help-block"></p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01">Email Address</label>
                  <div class="controls">
                    <input placeholder="email@address.com" class="input-xlarge" type="text">
                    <p class="help-block"></p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01">Default Address</label>
                  <div class="controls">
                    <input placeholder="" class="input-xlarge" type="text">
                    <p class="help-block">Line 1</p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01"></label>
                  <div class="controls">
                    <input placeholder="" class="input-xlarge" type="text">
                    <p class="help-block">Line 2</p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01"></label>
                  <div class="controls">
                    <input placeholder="" class="input-xlarge" type="text">
                    <p class="help-block">City</p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01"></label>
                  <div class="controls">
                    <input placeholder="" class="input-xlarge" type="text">
                    <p class="help-block">State</p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01"></label>
                  <div class="controls">
                    <input placeholder="" class="input-xlarge" type="text">
                    <p class="help-block">Zipcode</p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Text input-->
                  <label class="control-label" for="input01">Phone</label>
                  <div class="controls">
                    <input placeholder="(123) 456-7890" class="input-xlarge" type="text">
                    <p class="help-block"></p>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label"></label>
                  <!-- Button -->
                  <div class="controls">
                    <button class="btn btn-success">Save</button>
                  </div>
                </div>

            </fieldset>
          </form>
		    </div>
		    
		    <!-- tab 2 -->
		    <div class="tab-pane" id="tab2">
				<form class="form-horizontal">
          <fieldset>
            <div id="legend" class="">
              <legend class="">Change Password</legend>
            </div>

            <div class="control-group">
              <!-- Text input-->
              <label class="control-label" for="input01">Current Password</label>
              <div class="controls">
                <input placeholder="" class="input-xlarge" type="text">
                <p class="help-block"></p>
              </div>
            </div>
    
            <hr>

            <div class="control-group">
              <!-- Text input-->
              <label class="control-label" for="input01">New Password</label>
              <div class="controls">
                <input placeholder="" class="input-xlarge" type="text">
                <p class="help-block">6 character minimum</p>
              </div>
            </div>

            <div class="control-group">
              <!-- Text input-->
              <label class="control-label" for="input01"></label>
              <div class="controls">
                <input placeholder="" class="input-xlarge" type="text">
                <p class="help-block">repeat password</p>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label"></label>
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success">Update Password</button>
              </div>
            </div>

          </fieldset>
        </form>		    
        </div>
		    
		    <!-- tab 3 -->
		    <div class="tab-pane" id="tab3">
				<form class="form-horizontal">
<fieldset>
  <div id="legend" class="">
    <legend class="">Profile Picture</legend>
  </div>

<div class="control-group">
      <label class="control-label">Image Upload</label>

      <!-- File Upload -->
      <div class="controls">
        <input class="input-file" id="fileInput" type="file">
      </div>
    </div>

<div class="control-group">
      <label class="control-label"></label>

      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Upload &amp; Save</button>
      </div>
    </div>

</fieldset>
</form>

		    </div>
		    
		     <!-- tab 4 -->
		    <div class="tab-pane" id="tab4">
				
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class="">Notification Preferences</legend>
      </div>
    

    

    <div class="control-group">
          <label class="control-label">Email me when...</label>
          <div class="controls">
      <!-- Multiple Checkboxes -->
      <label class="checkbox">
        <input value="My recurring payment is successfully processed" checked="checked" type="checkbox">
        My recurring payment is successfully processed
      </label>
      <label class="checkbox">
        <input value="My single payment is successfully processed" checked="checked" type="checkbox">
        My single payment is successfully processed
      </label>
      <label class="checkbox">
        <input value="My credit card is almost expired" checked="checked" type="checkbox">
        My credit card is almost expired
      </label>
      <label class="checkbox">
        <input value="Allow my organizations to contact me" checked="checked" type="checkbox">
        Allow my organizations to contact me
      </label>
      <label class="checkbox">
        <input value="There's something new at Giving Shared" checked="checked" type="checkbox">
        There's something new at Giving Shared
      </label>
  </div>

        </div>

    </fieldset>
  </form>
		    </div>
		    
		  </div> <!-- end tab content -->
		</div>	<!-- end tabs -->
			
	</div></div>

</div>
@endsection