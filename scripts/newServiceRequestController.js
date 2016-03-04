angular.module('cssServiceRequest')
.controller("newServiceRequestFormController",['WrqFactory',
    function(WrqFactory){
        WrqCodes = WrqFactory.getAllWrqCodes();
        alert(WrqCodes[1].descr);
}]);
