/* 
 * Cascade Software Systems.
 * Copyright 2015
 */
angular.module("cssServiceRequest",['ngRoute'])
.config(['$routeProvider',function($routeProvider){
        $routeProvider
        .when('/new', {
           templateUrl:'views/newServiceRequest.html' 
        })
        .when('/search', {
           templateUrl:'views/searchServiceRequest.html' 
        })
        .otherwise({templateUrl:'views/newServiceRequest.html'});
        
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
