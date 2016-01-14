app
.controller('ProfileController', ['$scope', '$http', function ($scope, $http) {
    $scope.title = 'Profile';

    $http
    .get('/api/profile/show')
    .then(function (response) {
        $scope.profile = response.data.user;
    });
}]);
