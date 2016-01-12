app
.controller('AuthController', ['$scope', 'AuthService', function ($scope, AuthService) {
    $scope.title = 'Auth';

    $scope.credentials = {
        email: '',
        password: '',
        password_confirmation: '',
        remember_token: false,
    };

    $scope.login = function (credentials) {
        return AuthService.login(credentials);
    };

    $scope.register = function (credentials) {
        return AuthService.register(credentials);
    };
}]);
