<md-content layout="row" layout-padding>
    <md-whiteframe class="md-whiteframe-1dp" flex>
        <h1>
            <md-icon>
                lock_outline
            </md-icon>
            Login
        </h1>

        <form name="loginForm" ng-submit="login(credentials)">

            <md-input-container class="md-block">
                <label>Email</label>

                <input type="email" name="email" ng-model="credentials.email" required/>

                <div ng-messages="loginForm.email.$error">
                    <div ng-message-exp="['required', 'email']">
                        Your email is required and must look like an e-mail address.
                    </div>
                </div>

            </md-input-container>

            <md-input-container class="md-block">
                <label>Password</label>

                <input type="password" name="password" ng-model="credentials.password" minlength="6" maxlength="16" required/>

                <div ng-messages="loginForm.password.$error">
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
    </md-whiteframe>
</md-content>
