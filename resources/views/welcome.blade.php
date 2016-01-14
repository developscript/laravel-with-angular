<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="[% csrf_token() %]">

        <title>Laravel</title>

        <link rel="stylesheet" href="[% asset('css/all.css') %]">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="[% asset('js/app.js') %]"></script>

    </head>

    <body ng-app="app" ng-controller="ApplicationController" layout="column" ng-cloak>

        <md-toolbar>

            <div class="md-toolbar-tools">

                <md-button class="md-icon-button" ng-click="toggle()">
                    <md-icon>menu</md-icon>
                </md-button>

                <h2>
                  <span>Application</span>
                </h2>

                <span flex></span>

                <md-button class="md-icon-button">
                    <md-icon>more_vert</md-icon>
                </md-button>

            </div>
        </md-toolbar>

        <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
            <md-list>

                <md-list-item ng-href="/#/" ng-click="toggle()">
                    <p>Home</p>
                </md-list-item>

                <div ng-if="! check()">

                    <md-list-item ng-href="/#/login" ng-click="toggle()">
                        <p>Login</p>
                    </md-list-item>

                    <md-list-item ng-href="/#/register" ng-click="toggle()">
                        <p>Register</p>
                    </md-list-item>

                </div>
                <div ng-if="check()">

                    <md-list-item ng-href="/#/profile" ng-click="toggle()">
                        <p>Profile</p>
                    </md-list-item>

                    <md-list-item ng-click="logout()">
                        <p>Logout</p>
                    </md-list-item>

                </div>

            </md-list>
        </md-sidenav>

        <ng-view flex>
        </ng-view>

    </body>

</html>
