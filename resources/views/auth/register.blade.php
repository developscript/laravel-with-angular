<h1>
    Register
</h1>

<form name="registerForm" ng-submit="register(credentials)">

    <md-input-container class="md-block">
        <label>Name</label>

        <input type="text" name="name" ng-model="credentials.name" minlength="3" required/>

        <div ng-messages="registerForm.name.$error">
            <div ng-message-exp="['required', 'minlength']">
                Your name is required and must have at least 3 characters long.
            </div>
        </div>
    </md-input-container>

    <md-input-container class="md-block">
        <label>Email</label>

        <input type="email" name="email" ng-model="credentials.email" required/>

        <div ng-messages="registerForm.email.$error">
            <div ng-message-exp="['required', 'email']">
                Your email is required and must look like an e-mail address.
            </div>
        </div>
    </md-input-container>

    <md-input-container class="md-block">
        <label>Password</label>

        <input type="password" name="password" ng-model="credentials.password" minlength="6" maxlength="16" required/>

        <div ng-messages="registerForm.password.$error">
            <div ng-message-exp="['required', 'minlength', 'maxlength']">
                Your password is required and must be between 6 and 16 characters long.
            </div>
        </div>
    </md-input-container>

    <md-input-container class="md-block">
        <label>Repeat Password</label>

        <input type="password" name="password_confirmation" ng-model="credentials.password_confirmation" minlength="6" maxlength="16" required/>

        <div ng-messages="registerForm.password_confirmation.$error">
            <div ng-message-exp="['required', 'minlength', 'maxlength']">
                Your password is required and must be between 6 and 16 characters long.
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

<div ng-if="errors">
    <p ng-repeat="error in errors">
        {{ error }}
    </p>
</div>
