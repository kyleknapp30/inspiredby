<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package madhat
 */
?>

		</div><!-- #content -->
	
	</div><!--.mega-container-->

<?php get_template_part('modules/navigation/main','menu'); ?>

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php echo ( get_theme_mod('madhat_footer_text') == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','madhat')) : get_theme_mod('madhat_footer_text'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<script type="text/javascript">//<![CDATA[
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-15590411-7','auto');ga('require','displayfeatures');ga('send','pageview');var trackOutboundLink=function(url,event){ga('send','event',event,'click',url,{'transport':'beacon','hitCallback':function(){document.location=url;}});}
	var trackModalLink=function(url,event,label,value){ga('send','event',event,'click',label,Math.round(value),{'transport':'beacon','hitCallback':function(){document.location=url;}});}
	//]]></script>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '898057907000184'); // Insert your pixel ID here.
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=898057907000184&ev=PageView&noscript=1"
	/></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
