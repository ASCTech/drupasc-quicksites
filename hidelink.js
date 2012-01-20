$(document).ready(function(){
	if($("body").hasClass("layout-a")){
		var featuresHeight = ($("#front_block1").height() || $("#front_block2").height()) + $("#front_block3").height() - 30;
		if(featuresHeight > 0) $("#front-content").height(featuresHeight);
		$(".view-id-front_page .views-field-body").height($("#front-content").height() - 15);
	}
	if($("body").hasClass("front") && $(".view-id-front_page .views-field-body > .field-content").height() <= $(".view-id-front_page .views-field-body").height()){
		$(".view-id-front_page .views-field-view-node").hide();
		$(".view-id-front_page .views-field-nothing").hide();
	}
});
