app
.config(function ($routeProvider, $authProvider) {

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
        }
    )
    .when(
        '/register',
        {
            templateUrl: '/view/register',
            controller: 'AuthController',
        }
    )
    .otherwise('/');
});
