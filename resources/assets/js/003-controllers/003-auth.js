app
.controller(
    'AuthController',
    [
        '$scope',
        '$location',
        'AuthService',
        function ($scope, $location, AuthService) {
            $scope.title = 'Auth';

            $scope.login = function (credentials) {
                AuthService
                    .login(
                        credentials
                    )
                    .then(function (response) {
                        $location.path('/profile');
                    })
                    .catch(function (response) {
                        var errors = response.data.errors;
                        if (errors) {
                            $scope.errors = errors;
                        }
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
                        var errors = response.data;
                        if (errors) {
                            $scope.errors = errors;
                        }
                    });
            };
        }
    ]
);
