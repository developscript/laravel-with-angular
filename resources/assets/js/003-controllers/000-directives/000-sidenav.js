app
.controller(
    'SidenavController',
    [
        '$scope',
        '$mdSidenav',
        function ($scope, $mdSidenav) {
            $scope.title = 'Sidenav';

            $scope.items = [
                {name: 'Login', href: '/#/login', token: false, icon: 'lock_outline'},
                {name: 'Register', href: '/#/register', token: false, icon: 'assignment'},
                {name: 'Profile', href: '/#/profile', token: true, icon: 'account_circle'},
                {name: 'Logout', href: '/#/logout', token: true, icon: 'exit_to_app'},
            ];

            $scope.close = function () {
                $mdSidenav('left').close();
            }

            $scope.toggle = function () {
                $mdSidenav('left').toggle();
            }
        }
    ]
);
