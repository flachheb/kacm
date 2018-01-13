<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Facebook -->
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11&appId=1478719325552721';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- .Facebook -->

<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<!-- NavBar top -->
			<nav>
          <div class="nav-wrapper">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
						<ul class="brand-logo center">
              <li><a href="sass.html">Botola</a></li>
              <li><a href="badges.html">Crône</a></li>
							<li><a href="badges.html">Affrique</a></li>
            </ul>
						<ul class="left hide-on-med-and-down nav-social">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/social/facebook.png" alt="facebook">
              <!-- <li><a href="sass.html" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
              <li><a href="badges.html" class="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<li><a href="badges.html" class="twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							<li><a href="badges.html" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="badges.html" class="google"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li> -->
            </ul>
            <ul class="right hide-on-med-and-down">
              <li><a href="sass.html">الرئيسية</a></li>
              <li><a href="badges.html">اتصل بنا</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Mobile</a></li>
              <li><a class="btn waves-effect waves-light" href="buttons.html">Buttons</a></li>
            </ul>
          </div>
        </nav>
      <!-- end NavBar top -->


			<div class="row menu-principal">
				<div class="col  xl8 l10 m10 s12 offset-xl2 offset-l1 offset-m1  center">
					<div class="col xl4 l4 m4 s12 item-large">
						<a href="#">
							<p class="z-depth-1 hoverable">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/kacm.png" alt="kacm">
								<span>نادي
									الكوكب المراكشي</span>
							</p>
						</a>
					</div>
					<div class="col xl2 l2 m2 s4 item">
							<a href="#">
								<p class="z-depth-1 hoverable">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/sections.png" alt="sections">
									<span>الفروع</span>
								</p>
							</a>
					</div>
					<div class="col xl2 l2 m2 s4 item">
							<a href="#">
								<p class="z-depth-1 hoverable">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/foot.png" alt="foot">
									<span>كرة القدم</span>
								</p>
							</a>
					</div>
					<div class="col xl2 l2 m2 s4 item">
							<a href="#">
								<p class="z-depth-1 hoverable">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/video.png" alt="video">
									<span>فيديو</span>
								</p>
							</a>
					</div>
					<div class="col xl2 l2 m2 s4 item">
							<a href="#">
								<p class="z-depth-1 hoverable">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/news.png" alt="news">
									<span>أخبار</span>
								</p>
							</a>
					</div>
				</div>
			</div>

		</header><!-- .site-header -->

	<div id="content" class="site-content">
