<h1>
    Login
</h1>

<form name="login-form" ng-submit="login(credentials)">

    <md-input-container class="md-block">

        <label>Email</label>

        <input type="email" name="email" ng-model="credentials.email" required/>

        <div ng-messages="login.email.$error">
            <div ng-message="required">
                Required.
            </div>
            <div ng-message="email">
                Email.
            </div>
        </div>

    </md-input-container>

    <md-input-container class="md-block">

        <label>Password</label>

        <input type="password" name="password" ng-model="credentials.password" required/>

        <div ng-messages="login.password.$error">
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
