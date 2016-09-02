<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="col-xs-12 col-sm-12 col-md-1 site-footer" role="contentinfo">
		<a href="https://www.facebook.com/shanehillers" id="facebook"><i class="icon-facebook-squared" aria-hidden="true"></i></a>
		<a href="https://twitter.com/shanehillers" id="twitter"><i class="icon-twitter-squared" aria-hidden="true"></i></a>
		<a href="https://www.instagram.com/shaneworld/" id="instagram"><i class="icon-instagram" aria-hidden="true"></i></a>
		<a href="https://medium.com/@shanehillers" id="medium"><i class="icon-medium" aria-hidden="true"></i></a>
		<a href="https://www.linkedin.com/in/shanehillers" id="linkedin"><i class="icon-linkedin-squared" aria-hidden="true"></i></a>
	</footer><!-- #colophon -->
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/bower_components/bootstrap-material-design/dist/js/material.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/bower_components/bootstrap-material-design/dist/js/ripples.min.js"></script>
	<script type="text/javascript">
		$('#site-navigation').hide();
		$( document ).ready(function()
		{
			$('.comment-reply-link').addClass('btn btn-primary');
			$.material.init();
			$.material.options = {
    "withRipples": ".btn:not(.btn-link), .card-image, .navbar a:not(.withoutripple), .nav-tabs a:not(.withoutripple), #navbar-button, .nav-previous > a, .nav-next > a, .more-link, .withripple",
    "inputElements": "input.form-control, textarea.form-control, select.form-control",
    "checkboxElements": ".checkbox > label > input[type=checkbox]",
    "radioElements": ".radio > label > input[type=radio]"
					}

			var navOpen = false;

			document.getElementById("navbar-button").onclick = function() {
				if (navOpen)
				{
					if ($(document).width() < 768)
						$('#site-navigation').slideUp();
					else
						$('#site-navigation').hide("slide", { direction: "left" }, 500);
					navOpen = false;
				}
				else {
					if ($(document).width() < 768)
						$('#site-navigation').slideDown();
					else
						$('#site-navigation').show("slide", { direction: "left" }, 500);
					navOpen = true;
				}
			};
		});
		</script>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
