app
.controller('ApplicationController',
    [
        '$scope',
        '$cookies',
        '$location',
        'AuthService',
        function ($scope, $cookies, $location, AuthService) {
            $scope.title = 'Application';

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
