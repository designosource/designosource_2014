<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package designosource
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<!--<span>Made by the designosource 2014-2015 team</span>-->
	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!--<script src="js/script.js"></script>-->
	<!--<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>-->

	<script type="text/javascript">

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

	</script>
</body>
</html>
