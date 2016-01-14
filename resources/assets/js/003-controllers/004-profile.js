app
.controller('ProfileController', ['$scope', '$http', 'AuthService', function ($scope, $http, AuthService) {
    $scope.title = 'Profile';

    $http
        .get('/api/profile/show')
        .then(function (response) {
            $scope.profile = response.data.user;
        });
}]);
