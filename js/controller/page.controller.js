app.controller('PageCtrl', function ($scope, $routeParams, $http, PageService) {
    PageService.loadPageById($routeParams.id).then(function(response) {
        $scope.title = response.data.title.rendered;
        $scope.content = response.data.content.rendered;
    });
});