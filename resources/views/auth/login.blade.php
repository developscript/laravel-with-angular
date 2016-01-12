<h1>
    Login
</h1>

<form name="loginForm" ng-submit="login(credentials)">

    <md-input-container class="md-block">
        <label>Email</label>
        <input type="text" name="email" ng-model="credentials.email" required/>
        <div ng-messages="loginForm.email.$error">
            <div ng-message="required">
                Required.
            </div>
            <div ng-message="pattern">
                Email.
            </div>
        </div>
    </md-input-container>

    <md-input-container class="md-block">
        <label>Password</label>
        <input type="password" name="password" ng-model="credentials.password" required/>
        <div ng-messages="loginForm.password.$error">
            <div ng-message="required">
                Required.
            </div>
        </div>
    </md-input-container>

    <md-input-container class="md-block">
        <md-checkbox name="remember">
            Remember me
        </md-checkbox>
    </md-input-container>

    <md-input-container class="md-block">
        <md-button type="submit" class="md-raised md-primary">
            Log in
        </md-button>
    </md-input-container>

</form>
