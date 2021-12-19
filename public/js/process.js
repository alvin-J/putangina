(function(){
	function ___start() {
		$(document).on("click",".radiobtn",function(){
			$(this).addClass("selectedlbl").siblings().removeClass("selectedlbl");
		});
	}

	___start();
})();