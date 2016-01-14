app
.config(function ($httpProvider, $routeProvider, $authProvider, $locationProvider) {
    $httpProvider.interceptors.push('RequestInterceptor');

    $authProvider.loginUrl = '/api/login';
    $authProvider.signupUrl = '/api/register';

    $routeProvider
    .when(
        '/',
        {
            templateUrl: '/view/home',
            controller: 'HomeController',
        }
    )
    .when(
        '/login',
        {
            templateUrl: '/view/login',
            controller: 'AuthController',
            token: false,
        }
    )
    .when(
        '/register',
        {
            templateUrl: '/view/register',
            controller: 'AuthController',
            token: false,
        }
    )
    .when(
        '/profile',
        {
            templateUrl: '/view/profile',
            controller: 'ProfileController',
            token: true,
        }
    )
    .when(
        '/logout',
        {
            template: '',
            controller: 'LogoutController',
            token: true,
        }
    )
    .otherwise({
        redirectTo: '/',
    });

    $locationProvider.html5Mode(true);
});
