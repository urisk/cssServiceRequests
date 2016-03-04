/* 
 * Cascade Software Systems.
 * Copyright 2015
 */
angular.module("cssServiceRequest",['ngRoute'])
.config(['$routeProvider','$locationProvider',function($routeProvider,$locationProvider){
        $routeProvider
        .when('/new', {
           templateUrl:'views/newServiceRequest.html',
           controller:'newSrqFormController',
           controllerAs:'newSrqController'
        })
        .when('/search', {
           templateUrl:'views/searchServiceRequest.html',
           controller:'searchSrqFormController',
           controllerAs:'searchSrqController'
        })
        .otherwise({templateUrl:'views/newServiceRequest.html'});

        $locationProvider.html5Mode(true); //to allow html 5 path standards
}]);

