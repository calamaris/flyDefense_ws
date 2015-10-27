
$(document).ready(function(){
	if ($("body").width()>=1023) {
		var s = skrollr.init({
				    forceHeight: false
				});
		console.log("se cargo skrollr")
	};
});
