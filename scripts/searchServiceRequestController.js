angular.module('cssServiceRequest')
.controller("searchSrqFormController",['WrqFactory',
    function(WrqFactory){
        self = this;
        self.WrqCodes = WrqFactory.getAllWrqCodes();
        
        
}]);
