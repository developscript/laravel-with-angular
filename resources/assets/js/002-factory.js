app
.factory('AuthService', function ($http, $location, $auth) {
    var auth = {};

    auth.check = function () {
        return $auth.isAuthenticated();
    };

    auth.login = function (credentials) {
        return $auth
        .login(
            credentials
        )
        .then(function (response) {
            console.log(response);
            $location.path('/');
        });
    };

    auth.register = function (data) {
        return $auth
        .signUp(
            credentials
        )
        .then(function (response) {
            console.log(response);
            $location.path('/');
        });
    };

    auth.logout = function () {
        return $auth
            .logout();
    };

    return auth;
});
