$(document).ready(function(){
							
	$("#select1 dd").click(function () {
		$(this).addClass("selected").siblings().removeClass("selected");
		if ($(this).hasClass("select-all")) {
			$("#selectA").remove();
			$("#select2 dd").show();
		} else {
			var copyThisA = $(this).clone();
			if ($("#selectA").length > 0) {
				$("#selectA a").html($(this).text());
			} else {
				$(".select-result dl").append(copyThisA.attr("id", "selectA"));
			}
		}
		if ($(this).hasClass("qt")) {
			$(".one").show();
			$(".two").hide();
			$(".three").hide();
			$(".four").hide();
		} 
		if ($(this).hasClass("ht")) {
			$(".one").hide();
			$(".two").show();
			$(".three").hide();
			$(".four").hide();
		} 
		if ($(this).hasClass("ydd")) {
			$(".one").hide();
			$(".two").hide();
			$(".three").show();
			$(".four").hide();
		} 
		if ($(this).hasClass("sj")) {
			$(".one").hide();
			$(".two").hide();
			$(".three").hide();
			$(".four").show();

		} 
	});
	
	$("#select2 dd").click(function () {
			$(".one").show();
			$(".two").show();
			$(".three").show();
			$(".four").show();
		$(this).addClass("selected").siblings().removeClass("selected");
		if ($(this).hasClass("select-all")) {
			$("#selectB").remove();
			$("#select2 dd").show();
		} else {
			var copyThisB = $(this).clone();
			if ($("#selectB").length > 0) {
				$("#selectB a").html($(this).text());
			} else {
				$(".select-result dl").append(copyThisB.attr("id", "selectB"));
			}
		}
	});
	
	
	$("#selectA").live("click", function () {
		$(this).remove();
		$("#select1 .select-all").addClass("selected").siblings().removeClass("selected");
	});
	
	$("#selectB").live("click", function () {
		$(this).remove();
		$("#select2 .select-all").addClass("selected").siblings().removeClass("selected");
	});
	
	
	$(".select dd").live("click", function () {
		if ($(".select-result dd").length > 1) {
			$(".select-no").hide();
		} else {
			$(".select-no").show();
		}
	});
	
});