angular.module("cssServiceRequest",['ngRoute'])
.config(['$routeProvider','$locationProvider',function($routeProvider,$locationProvider){
        $routeProvider
        .when('/new', {
           templateUrl:'views/newServiceRequest.html',
           controller:'newSrqFormController',
           controllerAs:'newSrqController',
           resolve: {
               initialData: function(WrqFactory){
                   return WrqFactory.getAllWrqCodes();
               }
           }
        })
        .when('/search', {
           templateUrl:'views/searchServiceRequest.html',
           controller:'searchSrqFormController',
           controllerAs:'searchSrqController'
        })
        .otherwise({redirectTo: '/new'} );

        $locationProvider.html5Mode(true); //to allow html 5 path standards
}]);

