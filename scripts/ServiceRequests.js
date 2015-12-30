/* 
 * Cascade Software Systems.
 * Copyright 2015
 */
angular.module("cssServiceRequest",['ngRoute'])
.config(['$routeProvider','$locationProvider',function($routeProvider,$locationProvider){
        $routeProvider
        .when('/new', {
           templateUrl:'views/newServiceRequest.html',
           controller:'newServiceRequestController'
        })
        .when('/search', {
           templateUrl:'views/searchServiceRequest.html',
           controller:'searchServiceRequestController'
        })
        .otherwise({templateUrl:'views/newServiceRequest.html'});

        $locationProvider.html5Mode(true); //to allow html 5 path standards
}])

.factory('WorkRequestCodesService',function(){
    var WorkRequestCodes = {};
    
    WorkRequestCodes.getWorkRequestCodes = function(){
        return [{Wrq:'BTM01',Descr:'ACCESS CONTROL/CARD READERS'},
                {Wrq:'BTM02',Descr:'APPLIANCE REPAIRS/REPLACEMENT'},
                {Wrq:'BTM03',Descr:'AUDIO VISUAL REPAIR'}];
    };
    return WorkRequestCodes;
});
