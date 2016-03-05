angular.module('cssServiceRequest')
.factory('WrqFactory',  ['$http',function($http){
	
	var WrqFactory = {};        
	WrqFactory.getAllWrqCodes = function () {
            //Wrqs = [{wrq:'BTM01', descr:'ACCESS CONTROL/CARD READERS'},{wrq:'BTM02', descr:'APPLIANCE REPAIRS/REPLACEMENT'},
            //        {wrq:'BTM03', descr:'AUDIO VISUAL REPAIR'},{wrq:'BTM04', descr:'BACKFLOW DEVICE REPAIR/REPLACEMENT'}];
            Wrqs = $http.get('urlgoeshere');
            return Wrqs;
	};
        
	return WrqFactory;
]});
