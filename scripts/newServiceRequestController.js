angular.module('cssServiceRequest')
.controller("newSrqFormController",['WrqFactory',
    function(WrqFactory){
        self = this;
        self.WrqCodes=WrqFactory.getAllWrqCodes();
        
        self.submitNewSrq = function(Form){            
        };
}]);
