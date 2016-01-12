app
.controller('AuthController', ['$scope', 'AuthService', function ($scope, AuthService) {
    $scope.title = 'Auth';

    $scope.credentials = {
        email: '',
        password: '',
        password_confirmation: '',
        remember: false,
    };

    $scope.login = function (credentials) {

        console.log(credentials);

        AuthService
        .login(credentials)
        .then(
            function (response) {
                console.log(response, 'success');
            },
            function (response) {
                console.log(response, 'failure');
            }
        );
    };
}]);
