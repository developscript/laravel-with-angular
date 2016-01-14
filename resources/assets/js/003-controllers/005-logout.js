app
.controller('LogoutController', ['$location', 'AuthService', function ($location, AuthService) {
    AuthService.logout();

    $location.path('/login');
}]);
