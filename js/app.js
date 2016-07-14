var app = angular.module('app', ['ngRoute', 'ngSanitize']);

app.config(function ($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);

    var defaultPageId = parseInt(settings.defaultPageId);
    var defaultPagePath = 'page/' + defaultPageId;

    $routeProvider
        .when('/page/:id', {
            templateUrl: settings.partialsPath + 'page.html',
            controller: 'PageCtrl'
        })
        .when('/error', {
            templateUrl: settings.partialsPath + 'error.html'
        })
        .otherwise({
            redirectTo: defaultPageId > 0 ? defaultPagePath : 'error'
        });
});