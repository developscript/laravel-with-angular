app
.service('RequestInterceptor', function ($q, $injector) {
    var interceptor = {};

    interceptor.responseError = function (response) {
        var error = response.data.error,
            errors = [
                'token_not_provided',
                'token_expired',
                'token_invalid',
                'user_not_found',
            ];

        if (errors.indexOf(error) !== -1) {
            $injector
                .get('AuthService')
                .logout();
        }

        return $q.reject(response);
    }

    return interceptor;
});
