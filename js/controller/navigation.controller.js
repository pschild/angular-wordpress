app.controller('NavigationCtrl', function ($scope, $http, NavigationService) {
    NavigationService.loadMenuByName('main-nav').then(function(response) {
        $scope.mainNavItems = response.data.items;
    });
});