angular.module('cssServiceRequest')
.controller("newSrqFormController",['WrqFactory',
    function(WrqFactory){
        self = this;
        WrqFactory.getAllWrqCodes().then(function(result) { //promise
        self.WrqCodes = result;
        });
    
        self.submitNewSrq = function(Form){            
        };
}]);
