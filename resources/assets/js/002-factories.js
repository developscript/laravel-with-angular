app
.factory('AuthService', function ($auth) {
    var service = {};

    service.check = function () {
        return $auth.isAuthenticated();
    };

    service.signin = function (token) {
        return $auth.setToken(token);
    };

    service.login = function (credentials) {
        return $auth.login(credentials);
    };

    service.register = function (data) {
        return $auth.signup(data);
    };

    service.logout = function () {
        return $auth.logout();
    };

    return service;
})
.factory('RouteService', ['$route', 'AuthService', function ($route, AuthService) {
    var service = {};

    service.resolve = function (route) {
        if (typeof(route) === 'string') {
            return $route
                .routes[name]
                .token;
        }

        return route.token;
    };

    service.can = function (route) {
        var token = service.resolve(route);

        if (undefined === token) {
            return true;
        }
        if (token == true && ! AuthService.check()) {
            return false;
        }
        if (token == false && AuthService.check()) {
            return false;
        }

        return true;
    }

    service.cannot = function (route) {
        return ! service.can(route);
    }

    return service;
}]);
