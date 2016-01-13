app
.run(function ($rootScope, $location, RouteService) {
    $rootScope.$on('$routeChangeStart', function (event, next) {
        if (RouteService.cannot(next)) {
            return $location.path('/');
        }
        
        return next;
    });
});
