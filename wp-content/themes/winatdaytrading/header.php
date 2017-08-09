<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<?php wp_head(); ?>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-102706275-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="100">

<nav class="navbar navbar-toggleable-md navbar-light bg-default fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><img src="/wp-content/uploads/2017/07/winlogo-e1499103518219.png" alt=""> At Day Trading</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		<?php
      wp_nav_menu( array(
        'theme_location'		=> 'navbar',
        'container'         => false,
        'menu_class'				=> '',
        'fallback_cb'				=> '__return_false',
      	'items_wrap'				=> my_nav_wrap(),
        'depth'							=> 2,
				'walker'            => new b4st_walker_nav_menu(),
      ) );
    ?>
  </div>

</nav>
