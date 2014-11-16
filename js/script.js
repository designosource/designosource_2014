$("#processSteps a").on("click", function(e)
{	
	if(!$(this).hasClass("active"))
	{
		$("#processSteps a").removeClass("active");
		$(this).addClass("active");

		var id = $(this).attr("id");
		replaceText(id);
	}
	e.preventDefault();
});

function replaceText(id)
{
	$("#process .container p:not(#"+id+")").css({"position":"relative"});
	
	$.when($("#process .container p:not(#"+id+")").animate({"margin-left":"-10%", "opacity":"0"})).then(function () 
	{
	 	$(this).css({"display": "none"});
		$("#process .container p:not(#"+id+")").css({"margin-left":"10%"});

		$("#process .container p#"+id).css({"display": "block"});
		$("#process .container p#"+id).animate({"opacity":"1","margin-left":"0%"});
	});
}


$("#teamMembers a").on("click", function(e)
{	
	if(!$(this).hasClass("active"))
	{
		$("#teamMembers a").removeClass("active");
		$(this).addClass("active");

		var id = $(this).attr("id");
		replaceProfile(id);
	}
	e.preventDefault();
});

function replaceProfile(id)
{			
	$.when($("#team .container .individualMember:not(#"+id+") .memberImage").animate({"margin-left":"-5%", "opacity":"0"})).then(function () 
	{
	 	$(this).css({"display": "none"});
		$("#team .container .individualMember:not(#"+id+") .memberImage").css({"margin-left":"-5%"});

		$("#team .container .individualMember#"+id +" .memberImage").css({"display": "block"});
		$("#team .container #"+id +" .memberImage").animate({"opacity":"1","margin-left":"0%"});
	});

	$("#team .container .individualMember:not(#"+id+") .memberProfile").css({"position": "absolute", "left": "37.5%"});
	$.when($("#team .container .individualMember:not(#"+id+") .memberProfile").animate({"margin-left":"5%", "opacity":"0"})).then(function () 
	{
	 	$(this).css({"display": "none"});
		$("#team .container .individualMember:not(#"+id+") .memberProfile").css({"margin-left":"5%"});

		$("#team .container .individualMember#"+id+" .memberProfile").css({"display": "block"});
		$("#team .container #"+id+" .memberProfile").animate({"opacity":"1","margin-left":"0%"});
	});
}

function viewport() 
{
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) 
    {
        a = 'client';
        e = document.documentElement || document.body;
    }

    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

$(window).resize(function()
{
	var vpWidth = viewport().width;

	if(vpWidth <= 990)
	{
		$(".individualMember .memberProfile, .individualMember .memberImage").css({"display": "block", "opacity":"1"});
		$(".individualMember .memberProfile").css({"margin-left":"5%"});
		$(".individualMember .memberProfile").css({"position":"static"});
		$(".individualMember .memberImage").css({"margin-left":"0%"});
	}
	else
	{
		$("#teamMembers a").removeClass("active");
		$("#teamMembers #member1").addClass("active");

		$(".individualMember .memberProfile, .individualMember .memberImage").css({"display": "none", "opacity":"0"});
		$(".individualMember.active .memberImage, .individualMember.active .memberProfile").css({"display": "block", "opacity":"1"});
		$(".individualMember.active .memberProfile, .individualMember.active .memberImage").css({"margin-left":"0"});
		$(".individualMember.active .memberProfile").css({"position":"absolute"});
	}
	
});