<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important">

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent
<script type="text/javascript">
    window.cookieconsent_options = {"message":"ECDL.ie uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"https://www.ics.ie/privacy/","theme":"dark-top"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
 End Cookie Consent plugin -->



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=$description>
    <meta name="keywords" content=$keywords>
	<meta name="author" content="ECDL Ireland">

    
	<?php wp_head(); ?>

</head>

<body class="eupopup eupopup-fixedtop eupopup-color-inverse" ng-app="stripeIntegrationApp" ng-controller="stripeController">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PDBCVT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PDBCVT');</script>
<!-- End Google Tag Manager -->

<div id="header">
	<nav class="float-right" role="top-bar" id="top-bar">
        <div class="container">
			<ul class="nav navbar-nav social-stick">
				<!--<li class="divider-left" id="contact">
					<a href="http://localhost/wordpress/contact/" ><i class="fa fa-phone"></i></a>
				</li>
				<li class="divider-right" id="user">
					<a data-toggle="modal" data-target="#login" ><i class="fa fa-sign-in"></i></a>
				</li>-->
				<li class="divider-left" id="facebook">
					<a href="https://www.facebook.com/ECDLIreland" target="blank"><i class="fa fa-facebook"></i></a>
				</li>
				<li class="divider-right" id="twitter">
					<a href="https://twitter.com/ecdl_ireland" target="blank"><i class="fa fa-twitter"></i></a>
				</li>
				<li class="divider-right" id="linkedin">
					<a href="https://www.linkedin.com/company/ecdl-ireland" target="blank"><i class="fa fa-linkedin"></i></a>
				</li>


			</ul>


		</div>
	</nav>

	<!-- Login -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header md-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="ion-close-circled"></i></span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="loginLabel">Welcome, learner</h4>
				</div>
				<div class="modal-body">
					<form action="https://cms.ics-skills.net/workforce/login" method="post" id="login-form" autocomplete="off" onsubmit="return doValidate()">
						<div class="form-group">
							<label for="login-username">Email address</label>
							<input class="form-control" name="username" id="login-username" placeholder="Email" type="text">
						</div>
						<div class="form-group">
							<label for="login-password">Password</label>
							<input class="form-control" name="password" id="login-password" placeholder="Password" type="password">
						</div>
						<p><a href="https://cms.ics-skills.net/workforce/retrievepassword" target="_blank">Forgot password?</a></p>
						<div id="msg_box"> </div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success btn-sm">Sign in</button>
					</div>
					</form><!-- /form -->
				</div><!-- /modal body -->
			</div><!-- /modal content -->
		</div><!-- /modal dialog -->
	</div><!-- /modal holder -->
	<!-- End Login -->

    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/ecdl-ireland-logo.png" class="img-responsive center-block"/></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<?php /* Primary navigation */
					wp_nav_menu( array(
					  'menu' => 'Primary',
					  'depth' => 2,
					  'container' => false,
					  'menu_id' => 'main-navi',
					  'menu_class' => 'nav navbar-nav center-block ',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker())

					);

				?>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	</div>

