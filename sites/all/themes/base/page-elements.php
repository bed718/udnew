

<script type="text/javascript">
    
	jQuery( document ).ready(function() {
	   var front_feed = new Instafeed({
	   	  accessToken: '439464896.467ede5.ec3cad453bb14c139d3addf0fca15e22',
	        get: 'user',
	        target: 'front-instafeed',
	        userId: 439464896,
	        limit: '3',
	        resolution: 'standard_resolution',
	        clientId: '84b8e0f7d72a430c948d42c3a84c3e36'
	    });
	    front_feed.run();
	});
    
</script>


<div id="front-devider">
	<h3>Instagram: <a href="http://instagram.com/udxola">@udxola</a></h3>
	<div class="main">
		<div id="front-instafeed"></div>
	</div>
</div>



<script type="text/javascript">
    
	jQuery( document ).ready(function() {
	   var footer_feed = new Instafeed({
	   	  accessToken: '439464896.467ede5.ec3cad453bb14c139d3addf0fca15e22',
	        get: 'user',
	        userId: 439464896,
	        target: 'footer-instafeed',
	        limit: '1',
	        resolution: 'standard_resolution',
	        clientId: '84b8e0f7d72a430c948d42c3a84c3e36'
	    });
	    footer_feed.run();
	});
    
</script>
<div id="footer-instafeed"></div>



<div id="about-page">
	<div id="about-slide">
		<div class="inner">
			<div class="content">
				<span class="divider"></span>
				<p>Upstairs Downstairs is here to celebrate what being a woman is all about. What better way than lingerie? So much more than just what you put on underneath your clothes, it’s a love for the experience of being a woman.</p>
				<p>Be confident, embrace your femininity, and celebrate your body, it’s an intimate relationship with the most important person: yourself.</p>
				<span class="divider"></span>
			</div>
		</div>
	</div>
	<div id="megan-slide">
		<div class="inner">
			<div class="image"><img src="/<?php print path_to_theme(); ?>/images/UDXO-Megan-1.jpg" alt="Megan Luke Edwards"></div>
			<div class="content">
				<h2>A bit about Megan...</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In adipisci recusandae numquam, cum quos minus repudiandae maxime, illo et quidem labore distinctio perspiciatis placeat quo non ratione praesentium, modi quisquam.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint at, cupiditate voluptatem porro soluta sapiente iure aliquam itaque fugiat deleniti, eligendi illum architecto ipsum veniam eum, asperiores doloribus molestias possimus omnis a.</p>
			</div>
		</div>
	</div>
	<div id="quote-slide">
		<div class="inner">
			<div class="content">
				<div class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, distinctio.</div>
				<div class="author">some lady</div>
			</div>
		</div>
	</div>
	<div id="contact-slide">
		<div class="inner">
			<h2>Get in touch</h2>
			<div class="email"><a href="mailto:hello@upstairsdownstairs.com">hello@upstairsdownstairs.com</a></div>
		</div>
	</div>
</div>







