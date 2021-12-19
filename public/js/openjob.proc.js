(function(){
	function openajob() {
		$(document).on("click","#oneday",function(){
			$(document).find(".tabshow").addClass("withbordertop");

			$(document).find("#todiv").hide();
			$(document).find("#fromdiv").show();
		})

		$(document).on("click",'#multidate',function(){
			$(document).find(".tabshow").addClass("withbordertop");

			$(document).find("#fromdiv").show();
			$(document).find("#todiv").show();
		})

		document.getElementById('rangeinput').oninput = function() {
			var msg = "kms";
			if (this.value == 1) {
				msg = "km";
			} 

			document.getElementById("kminwords").innerHTML = this.value +" "+ msg;
		}
	}

	openajob();
})();