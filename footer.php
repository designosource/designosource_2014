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
	</script>
</body>
</html>
