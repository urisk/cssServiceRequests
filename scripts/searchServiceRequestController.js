angular.module('cssServiceRequest')
.controller("searchServiceRequestFormController",['WrqFactory',
    function(WrqFactory){
        WrqCodes = WrqFactory.getAllWrqCodes();
        alert(WrqCodes[2].descr);
}]);
