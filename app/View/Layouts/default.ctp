<?php
$siteDescription = __d('Web App Sys', 'Web App Sys');
$siteVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Web App Sys</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php echo $this->Html->css('bootstrap'); ?>
    <?php echo $this->Html->css('custom'); ?>
    <?php echo $this->Html->css('font-awesome'); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <?php echo $this->Html->script('html5shiv'); ?>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="favicon.ico">

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-146052-10']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
	 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    
    <?php echo $this->Html->script('jquery'); ?>
    <?php echo $this->Html->script('bootstrap-transition'); ?>
    <?php echo $this->Html->script('bootstrap-alert'); ?>
    <?php echo $this->Html->script('bootstrap-modal'); ?>
    <?php echo $this->Html->script('bootstrap-dropdown'); ?>
    <?php echo $this->Html->script('bootstrap-scrollspy'); ?>
    <?php echo $this->Html->script('bootstrap-tab'); ?>
    <?php echo $this->Html->script('bootstrap-tooltip'); ?>
    <?php echo $this->Html->script('bootstrap-popover'); ?>
    <?php echo $this->Html->script('bootstrap-button'); ?>
    <?php echo $this->Html->script('bootstrap-collapse'); ?>
    <?php echo $this->Html->script('bootstrap-carousel'); ?>
    <?php echo $this->Html->script('bootstrap-typeahead'); ?>
    <?php echo $this->Html->script('bootstrap-affix.js'); ?>
    <?php echo $this->Html->script('html5shiv'); ?>
    <?php echo $this->Html->script('holder/holder'); ?>
    <?php echo $this->Html->script('google-code-prettify/prettify'); ?>
    <?php echo $this->Html->script('application'); ?>
    <?php echo $scripts_for_layout; ?>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">
      <div id="index">

    <!-- Navbar
    ================================================== -->
	<header>
    <div class="navbar navbar-inverse">
		<div class="header-sec">
			<div class="top-mspace container">
				<button type="button" class="nav-btn btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
		            <span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="clearfix">
					<h1 class="pull-left">
                        <?php echo $this->Html->link(
                                $this->Html->image('logo.png', array('alt' => '[image:Musica]', 'title' => 'WAS')),
                                array('controller'=>'pages','action' => 'home'),
                                array('escape' => false)
                            );
                        ?>
					</h1>
				</div>
			</div>
			
			<?php echo $this->element('main-menu'); ?>
		</div>
	</div>
	</header>
	<section class="main">
		
	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>	
		
	</section>
	
	<?php echo $this->element('footer-menu'); ?>

    <!-- Analytics
    ================================================== -->
    <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>
      </div>
  </body>
</html>
