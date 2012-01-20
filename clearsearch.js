$(document).ready(function(){
	var bar = document.getElementById('edit-search-block-form-1');
	if(!bar){
		return false;
	}
	
	bar.value = "Search";
	bar.onfocus = function(){
		if(this.value == "Search") this.value="";
		$(this).addClass("focused");
	}
	bar.onblur = function(){
		if(this.value == "") {
			$(this).removeClass("focused");
			this.value="Search";
		}
	}
});
