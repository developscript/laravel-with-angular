app
.controller('AuthController', ['$scope', '$location', 'AuthService', function ($scope, $location, AuthService) {
    $scope.title = 'Auth';

    $scope.credentials = {
        email: '',
        password: '',
        password_confirmation: '',
        remember_token: false,
    };

    $scope.login = function (credentials) {
        AuthService
            .login(
                credentials
            )
            .then(function (response) {
                $location.path('/profile');
            })
            .catch(function (response) {
                console.error(response);
            });
    };

    $scope.register = function (credentials) {
        AuthService
            .register(
                credentials
            )
            .then(function (response) {
                AuthService
                    .signin(
                        response.data.token
                    );

                $location.path('/profile');
            })
            .catch(function (response) {
                console.error(response);
            });
    };
}]);
