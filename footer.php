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



	<div class="footer-container">
        <div class="footer row">
    <!-- newsletter area -->
    <div class="footer-subscribe" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/newsletter-bg.jpg)">
        <div class="footer-subscribe-cta">
            <h3>Stay in touch</h3>
            <p>Sign up to hear the latest news, sharpening tips, and new recipes from Work Sharp Culinary.</p>
            <!--[if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({ 
                css: '',
                portalId: '3804151',
                formId: '39e683fc-903a-4b93-9097-63d0a3b2ffcd'
              });
            </script>
        </div>
    </div>
</div>
    <div class="footer row top-buffer bottom-buffer">
        <div class="small-logos text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/top-workplaces-badge45x29.png" style="height=100%;width=auto;margin-top: -10px" alt="Top Workplaces 2017">
            <a href="https://www.facebook.com/worksharpculinary" target="_blank" rel="noopener noreferrer"><div class="social" onmouseover="svgMouseOver('facebook')" onmouseout="svgMouseOut('facebook')"><object id="facebook" data="<?php echo get_template_directory_uri(); ?>/assets/images/footer/facebook-icon.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/facebook-icon.png" alt="Like us on Facebook"></object></div></a>
            <a href="https://www.pinterest.com/wsculinary/?eq=work%20sharp%20culinary&etslf=7055" target="_blank" rel="noopener noreferrer"><div class="social" onmouseover="svgMouseOver('pinterest')" onmouseout="svgMouseOut('pinterest')"><object id="pinterest" data="<?php echo get_template_directory_uri(); ?>/assets/images/footer/pinterest-icon.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/pinterest-icon.png" alt="Follow us on Pinterest"></object></div></a>
            <a href="https://www.youtube.com/channel/UCw7LE4qI5Tu4vF7gDleV0Bw" target="_blank" rel="noopener noreferrer"><div class="social" onmouseover="svgMouseOver('youtube')" onmouseout="svgMouseOut('youtube')"><object id="youtube" data="<?php echo get_template_directory_uri(); ?>/assets/images/footer/youtube-icon.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/youtube-icon.png" alt="Subscribe to our YouTube channel"></object></div></a>
            <a href="https://www.instagram.com/worksharpculinary/" target="_blank" rel="noopener noreferrer"><div class="social" onmouseover="svgMouseOver('instagram')" onmouseout="svgMouseOut('instagram')"><object id="instagram" data="<?php echo get_template_directory_uri(); ?>/assets/images/footer/instagram-icon.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/instagram-icon.png" alt="Follow us on Instagram"></object></div></a>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="text-center">
            <a style="padding-right:15px;vertical-align: -webkit-baseline-middle;" href="//www.worksharpculinary.com/about-us/">About</a>
            <a style="padding-right:15px;vertical-align: -webkit-baseline-middle;" href="//inspiredby.worksharpculinary.com/category/press">Press</a>
            <a style="padding-right:15px;vertical-align: -webkit-baseline-middle;" href="//www.worksharpculinary.com/work-sharp-culinary-policies/">Privacy</a>
            <a style="padding-right:15px;vertical-align: -webkit-baseline-middle;" href="//www.worksharpculinary.com/shipping/">Shipping</a>
            <a style="padding-right:15px;vertical-align: -webkit-baseline-middle;" href="//www.worksharpculinary.com/contact-us/">Contact</a>
            <a style="padding-right:15px;vertical-align: -webkit-baseline-middle;" href="//inspiredby.worksharpculinary.com/">Blog</a>
            <a style="padding-right:15px;vertical-align: -webkit-baseline-middle;" href="//www.worksharpculinary.com/ask-the-ceo">Ask&nbsp;the&nbsp;CEO</a>
        </div>
    </div>

    <div class="footer row footer-border">
            <h3 class="text-uppercase" style="font-weight: 300">A Proud member of the Darex Family</h3>
            <div class="hidden-xs darex-logos">
                <a href="http://www.worksharptools.com" target="_blank"><div><object data="<?php echo get_template_directory_uri(); ?>/assets/images/footer/wso-logo.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/wso-logo.png"/></object></div></a>
                <a href="http://www.drilldoctor.com/" target="_blank"><div><object data="<?php echo get_template_directory_uri(); ?>/assets/images/footer/dd-logo.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/dd-logo.png"/></object></div></a>
                <a href="http://www.darex.com/" target="_blank"><div><object data="<?php echo get_template_directory_uri(); ?>/assets/images/footer/dx-logo.svg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/dx-logo.png"/></object></div></a>
            </div>
            <div class="visible-xs darex-brands">
                <a href="http://www.worksharptools.com" target="_blank">Work Sharp Outdoor</a>
                <a href="http://www.drilldoctor.com" target="_blank">Drill Doctor</a>
                <a href="http://www.darex.com" target="_blank">Darex</a>
            </div>
    </div>


</div>
<script type="application/javascript">

    function svgMouseOver(id){
        var svg = document.getElementById(id).contentDocument.querySelector('svg');
        svg.setAttribute('style', 'fill:#455f73');
    }
    function svgMouseOut(id){
        var svg = document.getElementById(id).contentDocument.querySelector('svg');
        svg.setAttribute('style', 'fill:#929A9C');
    }
    function svgMouseOverHead(id){
        var svg = document.getElementById(id).contentDocument.querySelector('svg');
        if (document.documentElement.clientWidth <= 750) {
            svg.setAttribute('style', 'fill:#324656');
        } else {
            svg.setAttribute('style', 'fill:#FFFFFF');
            }

    }
    function svgMouseOutHead(id){
        var svg = document.getElementById(id).contentDocument.querySelector('svg');
        svg.setAttribute('style', 'fill:#DFDFDF');
    }
</script>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php echo ( get_theme_mod('madhat_footer_text') == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','madhat')) : get_theme_mod('madhat_footer_text'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<script type="text/javascript">//<![CDATA[
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-15590411-7','auto');ga('require','displayfeatures');ga('send','pageview');var trackOutboundLink=function(url,event){ga('send','event',event,'click',url,{'transport':'beacon','hitCallback':function(){document.location=url;}});}
	var trackModalLink=function(url,event,label,value){ga('send','event',event,'click',label,Math.round(value),{'transport':'beacon','hitCallback':function(){document.location=url;}});}
	//]]></script>

	<!-- Begin Amazon Pixel -->
	<script type='text/javascript'>var _pix = document.getElementById('_pix_id_2861e873-ffcd-ffe1-127c-ab2a8073036b');if (!_pix) { var protocol = '//'; var a = Math.random() * 1000000000000000000; _pix = document.createElement('iframe'); _pix.style.display = 'none'; _pix.setAttribute('src', protocol + 's.amazon-adsystem.com/iu3?d=generic&ex-fargs=%3Fid%3D2861e873-ffcd-ffe1-127c-ab2a8073036b%26type%3D43%26m%3D1&ex-fch=416613&ex-src=https://www.worksharpculinary.com/&ex-hargs=v%3D1.0%3Bc%3D2740036006326%3Bp%3D2861E873-FFCD-FFE1-127C-AB2A8073036B' + '&cb=' + a); _pix.setAttribute('id','_pix_id_2861e873-ffcd-ffe1-127c-ab2a8073036b'); document.body.appendChild(_pix);}</script><noscript> <img height='1' width='1' border='0' alt='' src='https://s.amazon-adsystem.com/iui3?d=forester-did&ex-fargs=%3Fid%3D2861e873-ffcd-ffe1-127c-ab2a8073036b%26type%3D43%26m%3D1&ex-fch=416613&ex-src=https://www.worksharpculinary.com/&ex-hargs=v%3D1.0%3Bc%3D2740036006326%3Bp%3D2861E873-FFCD-FFE1-127C-AB2A8073036B' /></noscript>
	<!-- End Amazon Pixel -->
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
