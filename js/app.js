var app = angular.module('app', ['ngRoute']);

app.config(function ($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);

    $routeProvider
        .when('/', {
            templateUrl: localized.partials + 'page.html',
            controller: 'PageCtrl'
        })
        .when('/page/:id', {
            templateUrl: localized.partials + 'page.html',
            controller: 'PageCtrl'
        })
        .otherwise({
            redirectTo: '/'
        });
});