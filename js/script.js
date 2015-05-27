var c = false;

/* CLOSE MOBILE MENU */
$(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});

/* VIDEO BACKGROUND IMAGE */
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	var vid = document.getElementsByTagName("video")[0];
	vid.parentNode.setAttribute("id", "hasBg");
	vid.parentNode.removeChild(vid);
}

/* SMOOTH SCROLLING */
$('a[href*=#]:not([href=#])').click(function () {
	var target = $(this.hash);

	$(this).addClass('active');

	$('html, body').stop().animate({
	  scrollTop: target.offset().top+1
	}, 1000);

	return false;
});

/* SET AVTIVE MENU ITEM */
$(window).scroll(function(){
    var windscroll = $(window).scrollTop()

    var a = $(window).scrollTop() + $(window).height();
    var b = $('#statistics').position().top + $('#statistics').height();

    $('#main .navsection').each(function(i) {
        if ($(this).position().top <= windscroll) {
            $('.nav li.active').removeClass('active');
            $('.nav li').eq(i).addClass('active');
        }
    });

    /* STATISTICS */
    if (a > b && c == false) {

      c = true;
      var stats = $('#statistics h3');

      $.each(stats, function(index, value) {
        var timer = setInterval(counter, 100);
        var total = $(value).text();
        var i = 0;

        $(value).text(0);

        function counter() {
          i++;
          $(value).text(i);
          if ($(value).text() == total) {
            clearInterval(timer);
          }
        }
      });
    }

	return false;
});

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

$("ul#teamList > :first-child").addClass("active");
$("#teamMembers ul > :first-child a").addClass("active");

$("#teamMembers ul li a").on("click", function(e)
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

	$("#team .container .individualMember:not(#"+id+") .memberProfile").css({"position": "absolute", "left": "35"});
	$.when($("#team .container .individualMember:not(#"+id+") .memberProfile").animate({"margin-left":"10%", "opacity":"0"})).then(function ()
	{
	 	$(this).css({"display": "none"});

		$("#team .container .individualMember:not(#"+id+") .memberProfile").css({"margin-left":"10%"});


		$("#team .container .individualMember#"+id+" .memberProfile").css({"display": "block"});

		$("#team .container #"+id+" .memberProfile").animate({"opacity":"1","margin-left":"5%"});

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

	if(vpWidth <= 768)
	{
		$(".individualMember .memberProfile, .individualMember .memberImage").css({"display": "block", "opacity":"1"});
		$(".individualMember .memberProfile").css({"margin-left":"0%"});
		$(".individualMember .memberProfile").css({"position":"static"});
		$(".individualMember .memberImage").css({"margin-left":"0%"});
	}
	else
	{
		$("#teamMembers ul li a").removeClass("active");
		$("#teamMembers ul > :first-child a").addClass("active");

		$("ul#teamList li").removeClass("active");
		$("ul#teamList > :first-child").addClass("active");

		$(".individualMember .memberProfile, .individualMember .memberImage").css({"display": "none", "opacity":"0"});
		$(".individualMember.active .memberImage, .individualMember.active .memberProfile").css({"margin-left":"5%", "display": "block", "opacity":"1"});
		$(".individualMember .memberImage").css({"margin-left":"0%"});
		$(".individualMember .memberProfile").css({"margin-left":"10%"});
		$(".individualMember.active .memberProfile").css({"margin-left":"5%"});
		$(".individualMember .memberImage").css({"margin-left":"-5%%"});
		$(".individualMember.active .memberImage").css({"margin-left":"0%"});
		$(".individualMember .memberProfile").css({"position":"absolute"});
	}

});


