
<link href="{{ asset('css/multiStep.css') }}" rel="stylesheet">

<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md- offset-3">
        <form action="/registerStep1" method="post" id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <input type="text" name="fname" placeholder="First Name"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="lname" placeholder="Last Name"/>
                
                <input type="text" name="phone" placeholder="Phone"/>
                
                <input type="button" name="next" class="next action-button" value="Next"/>
                <button type="submit" value="Submit">
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter"/>
                
                <input type="text" name="facebook" placeholder="Facebook"/>
                
                <input type="text" name="gplus" placeholder="Google Plus"/>
                
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="email" placeholder="Email"/>
            
                <input type="password" name="pass" placeholder="Password"/>
                
                <input type="password" name="cpass" placeholder="Confirm Password"/>
                
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
           
        </form>
        <!-- link to designify.me code snippets -->
        <div class="dme_link">
            <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
        </div>
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'>
</script>
<script type="text/javascript" src="{{ asset('js/multiStep.js') }}"></script>

