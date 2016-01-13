app
.controller('ApplicationController', ['$scope', '$cookies', '$mdSidenav', 'AuthService', function ($scope, $cookies, $mdSidenav, AuthService) {
    $scope.title = 'Application';

    $scope.toggle = function () {
        $mdSidenav('left').toggle();
    }

    $scope.laravel = function ()
    {
        return $cookies.get('XSRF-TOKEN');
    }

    $scope.logout = function () {
        return AuthService.logout();
    }

    $scope.check = function () {
        return AuthService.check();
    }
}]);
