$(function(){
	if(window.location.pathname.includes("/gameEng/")){
		$("#mPage").removeClass("active");
		$("#aPage").removeClass("active");
		$("#sPage").removeClass("active");
		$("#gPage").addClass("active");
	} else if(window.location.pathname.includes("/specEng/")){
		$("#mPage").removeClass("active");
		$("#aPage").removeClass("active");
		$("#sPage").addClass("active");
		$("#gPage").removeClass("active");
	} else if(window.location.pathname.includes("/addPage/")){
		$("#mPage").removeClass("active");
		$("#aPage").addClass("active");
		$("#fourthPage").removeClass("active");
		$("#gPage").removeClass("active");
	}
	 else {
		$("#mPage").addClass("active");
		$("#aPage").removeClass("active");
		$("#sPage").removeClass("active");
		$("#gPage").removeClass("active");
	}
});