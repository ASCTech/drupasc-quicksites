function updateThemePreview(){
	$("#theme_preview").attr("src", $("#theme_preview")[0].src
		.replace(/\/theme-\d+\//, "/theme-"+$("input:radio[name='quickSites_theme']:checked").val()+"/")
		.replace(/\/preview-[a-z]+/, "/preview-"+$("input:radio[name='quickSites_layout']:checked").val()));

	if($("input:radio[name='quickSites_theme_header']:checked").val() == ''){
		$("#theme_preview_header").hide();
	}else{
		$("#theme_preview_header").show().attr("src", $("#theme_preview_header")[0].src
		.replace(/\/header-\d*\//, "/header-"+$("input:radio[name='quickSites_theme_header']:checked").val()+"/"));
	}

	if($("input:radio[name='quickSites_theme_footer']:checked").val() == ''){
		$("#theme_preview_footer").hide();
	}else{
		$("#theme_preview_footer").show().attr("src", $("#theme_preview_footer")[0].src
		.replace(/\/footer-\d*\//, "/footer-"+$("input:radio[name='quickSites_theme_footer']:checked").val()+"/"));
	}
}

$(document).ready(function(){
	$("input:radio[name='quickSites_theme'], input:radio[name='quickSites_theme_header'], input:radio[name='quickSites_theme_footer'], input:radio[name='quickSites_layout']").change(updateThemePreview);
	updateThemePreview();
});
