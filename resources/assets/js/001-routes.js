app
.config(function ($routeProvider) {
    $routeProvider
    .when('/auth/login', {
        templateUrl: '/auth/login',
        controller: 'AuthController',
    })
    .when('/auth/register', {
        templateUrl: '/auth/register',
        controller: 'AuthController',
    })
    .when('/auth/logout', {
        templateUrl: '/auth/logout',
        controller: 'AuthController',
    });
});
