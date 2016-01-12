app
.controller('ApplicationController', ['$scope', '$mdSidenav', function ($scope, $mdSidenav) {
    $scope.title = 'Application';

    $scope.toggle = function () {
        $mdSidenav('left').toggle();
    }
}]);