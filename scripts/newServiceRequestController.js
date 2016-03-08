angular.module('cssServiceRequest')
.controller("newSrqFormController",['WrqFactory','initialData',
    function(WrqFactory){
        self = this;
        WrqFactory.getAllWrqCodes().then(function(result) { //promise
            self.WrqCodes = result;
            console.log(self.WrqCodes);
            console.log(self.WrqCodes[0].Wrq);
            console.log(self.WrqCodes[0].Descr);
        });
        self.submitNewSrq = function(Form){            
        };
}]);
