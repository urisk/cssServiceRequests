angular.module('cssServiceRequest')
.factory('WrqFactory',  function(){
	
	var WrqFactory = {};
	var WrqCodes = [];
        
	WrqFactory.getAllWrqCodes = function () {
            Wrqs = [{wrq:1, descr:'Music'},{wrq:2, descr:'Cinema'},{wrq:3, descr:'Games'},{wrq:4, descr:'Special Category'}];
		return Wrqs;
	};
        
	return WrqFactory;
});


