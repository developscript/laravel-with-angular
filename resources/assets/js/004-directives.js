app
.directive('sidenav', function () {
    return {
        restrict: 'E',
        replace: true,
        templateUrl: '/directive/sidenav',
        controller: 'SidenavController',
    };
})
.directive('toolbar', function () {
    return {
        restrict: 'E',
        replace: true,
        templateUrl: '/directive/toolbar',
        controller: 'ToolbarController',
    };
});
