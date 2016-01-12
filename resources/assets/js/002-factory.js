app
.factory('AuthService', function ($http) {

    var auth = {};

    auth.login = function (credentials) {
        return $http
        .post(
            [
                '/auth/login',
                credentials
            ]
        )
        .then(
            function (response) {
                return response;
            }
        );
    };

    auth.register = function (data) {
        return $http
        .post(
            [
                '/auth/register',
                data
            ]
        )
        .then(
            function (response) {
                return response;
            }
        );
    };

    auth.logout = function () {
        return $http
        .get('/auth/logout')
        .then(
            function (response) {
                return response;
            }
        );
    };

    return auth;
});
