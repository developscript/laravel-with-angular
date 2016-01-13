app
.controller('ApplicationController',
    [
        '$scope',
        '$cookies',
        '$location',
        '$mdSidenav',
        'AuthService',
        function ($scope, $cookies, $location, $mdSidenav, AuthService) {
            $scope.title = 'Application';

            $scope.toggle = function () {
                $mdSidenav('left').toggle();
            }

            $scope.check = function () {
                return AuthService.check();
            }

            $scope.logout = function () {
                var success = AuthService.logout();

                $scope.toggle();

                if (success) {
                    $location.path('/home');
                }
            }
        }
    ]
);
