<!DOCTYPE html>

<html>

<head>

	<title>Purchase ECDL toolkit | ECDL Ireland</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<base href="wp-content/themes/ecdl-ireland/" />

	<link href="assets/css/bootstrap.min35.css" rel="stylesheet"> 

	<link href="assets/css/ecdl-for-you-purchase.css" rel="stylesheet">

	<link href="assets/css/ecdl-workplace-old.css" rel="stylesheet">

	

	<link href="assets/css/ecdl-for-you.css" rel="stylesheet">

	<link href="assets/css/animate.min.css" rel="stylesheet">

	<link href="assets/css/font-awesome.min43.css" rel="stylesheet" />

	<link href="assets/css/ionicons.min.css" rel="stylesheet" />



	<link rel='stylesheet' href='https://www.ecdl.ie/wp-includes/css/dashicons.min.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-includes/css/admin-bar.min.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/plugins/siteorigin-panels/css/front.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/plugins/font-awesome-4-menus/css/font-awesome.min.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/plugins/spacer/admin-style.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/datatable.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/bootstrap.min.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/dataTables.bootstrap.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/jquery-eu-cookie-law-popup.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/font-awesome/css/font-awesome.css' />

	

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/contact-form.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/magnific-popup.css' />

	<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/plugins/font-awesome/assets/css/font-awesome.min.css' />

	<link href="assets/css/ecdl-ireland.css" rel="stylesheet">		<link rel='stylesheet' href='https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/css/logo.css' />


	<script src="https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/js/jquery.js" > </script>	<script src="https://checkout.stripe.com/checkout.js"></script>    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.js"></script>    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>             <script src="https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/js/bootstrap.js" > </script>	<script src="https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/js/logohover.js"></script>	<script src="https://www.ecdl.ie/wp-content/themes/ecdl-ireland/assets/js/show-more.js"></script>	<script src="assets/js/smoothscroll.js"></script>	<script src="assets/js/numscroller-1.0.js"></script>





	<!--[if IE 9]>

      <script src="assets/js/html5shiv.min.js"></script>

      <script src="assets/js/respond.min.js"></script>

	<![endif]-->



	  <style>

      .navbar-inverse {

        background-color: white;

    }

	  </style>

	

	<script>

	

	



	

	/**

	 * Module for displaying "Waiting for..." dialog using Bootstrap

	 *

	 * @author Eugene Maslovich <ehpc@em42.ru>

	 */



	var waitingDialog = waitingDialog || (function ($) {

	    'use strict';



		// Creating modal dialog's DOM

		var $dialog = $(

			'<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +

			'<div class="modal-dialog modal-m">' +

			'<div class="modal-content">' +

				'<div class="modal-header"><h3 style="margin:0;"></h3></div>' +

				'<div class="modal-body">' +

					'<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +

				'</div>' +

			'</div></div></div>');



		return {

			/**

			 * Opens our dialog

			 * @param message Custom message

			 * @param options Custom options:

			 * 				  options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";

			 * 				  options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".

			 */

			show: function (message, options) {

				// Assigning defaults

				if (typeof options === 'undefined') {

					options = {};

				}

				if (typeof message === 'undefined') {

					message = 'Loading';

				}

				var settings = $.extend({

					dialogSize: 'm',

					progressType: '',

					onHide: null // This callback runs after the dialog was hidden

				}, options);



				// Configuring dialog

				$dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);

				$dialog.find('.progress-bar').attr('class', 'progress-bar');

				if (settings.progressType) {

					$dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);

				}

				$dialog.find('h3').text(message);

				// Adding callbacks

				if (typeof settings.onHide === 'function') {

					$dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {

						settings.onHide.call($dialog);

					});

				}

				// Opening dialog

				$dialog.modal();

			},

			/**

			 * Closes dialog

			 */

			hide: function () {

				$dialog.modal('hide');

			}

		};



	})(jQuery);

	

	/**************************************/





	<?php 

	if (gethostname() == 'cerulean.ics.local')  {

	   echo "var apiLocation = 'http://localhost:50981';\n";

	   echo "var stripePublicKey = 'pk_test_v4DwKfCso58vqfYNoPSMktwA';\n";

	}

	else { 

	   echo "var apiLocation = 'https://cms.ics-skills.net';\n";

	   echo "var stripePublicKey = 'pk_live_4XTD8CKF43ImGi3CjZEqfq48';\n";

	}

	?>

    var app = angular.module("stripeIntegrationApp", ['ngAnimate']);



    app.controller("stripeController", function ($scope, $http) {


    	$scope.products2010 = [

    	                   

    	                   {type:"m1", mid: 1, id : 1733, title :"ECDL Computer Essentials", version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 2, id : 1734, title :"ECDL Online Essentials",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 3, id : 1735, title : "ECDL Word Processing",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 4, id : 1737, title : "ECDL Spreadsheets",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 5, id : 1741, title : "ECDL Presentation",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 6, id : 1739, title : "ECDL Using Databases",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 7, id : 1743, title : "ECDL IT Security",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 8, id : 1744, title : "ECDL Online Collaboration", version : 2010,  price : 9900, desc: ""},

    	                   {type:"m1", mid: 9, id : 1745, title : "ECDL Image Editing",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 10,  id : 1746, title : "ECDL Web Editing",  version : 2010, price : 9900, desc: ""},

    	                   {type:"m1", mid: 11, id : 1748, title : "ECDL-endorsed Data Protection",  version : 2010, price : 9900, desc: ""}

    	                   ]

    	

    	$scope.products2013 = [

        	                   

        	                   {type:"m1", mid: 1, id : 1733, title :"ECDL Computer Essentials",  version : 2013, price : 9900, desc: ""},

        	                   {type:"m1", mid: 2, id : 1734, title :"ECDL Online Essentials", version : 2013,price : 9900, desc: ""},

        	                   {type:"m1", mid: 3, id : 1736, title : "ECDL Word Processing", version : 2013,price : 9900, desc: ""},

        	                   {type:"m1", mid: 4, id : 1738, title : "ECDL Spreadsheets", version : 2013,price : 9900, desc: ""},

        	                   {type:"m1", mid: 5, id : 1742, title : "ECDL Presentation", version : 2013,price : 9900, desc: ""},

        	                   {type:"m1", mid: 6, id : 1740, title : "ECDL Using Databases", version : 2013,price : 9900, desc: ""},

        	                   {type:"m1", mid: 7, id : 1743, title : "ECDL IT Security", version : 2013,price : 9900, desc: ""},

        	                   {type:"m1", mid: 8, id : 1744, title : "ECDL Online Collaboration", version : 2013,price : 9900, desc: ""},

        	                   {type:"m1", mid: 9, id : 1745, title : "ECDL Image Editing", version : 2013, price : 9900, desc: ""},

        	                   {type:"m1", mid: 10, id : 1746, title : "ECDL Web Editing", version : 2013, price : 9900, desc: ""},

        	                   {type:"m1", mid: 11, id : 1748, title : "ECDL-endorsed Data Protection", version : 2013, price : 9900, desc: ""}

        	                   ]

    	

	$scope.fiveModuleToolkit2010 = [

        	                   

        	                   {type:"m2", mid: 1, id : 1727, title :"MS Office Toolkit",  version : 2010, price : 29900 , desc : "ECDL Online Essentials, ECDL Word Processing, ECDL Spreadsheets, ECDL Presentation and ECDL Using Databases."},

        	                   {type:"m2", mid: 2, id : 1725, title :"Essentials Toolkit", version : 2010,price : 29900, desc : "ECDL Computer Essentials, ECDL Online Essentials, ECDL Word Processing, ECDL-endorsed Data Protection and ECDL IT Security"},

        	                   {type:"m2", mid: 3, id : 1753, title : "Marketing Toolkit", version : 2010,price : 29900, desc : "ECDL Online Collaboration, ECDL Image Editing, ECDL Web Editing, ECDL-endorsed Data Protection and ECDL Presentation"},

        	                

        	                   ]

    	

    	$scope.fiveModuleToolkit2013 = [

    	         	                   

    	         	                   {type:"m2", mid: 1, id : 1726, title :"MS Office Toolkit",  version : 2013, price : 29900, desc : "ECDL Online Essentials, ECDL Word Processing, ECDL Spreadsheets, ECDL Presentation and ECDL Using Databases."},

    	         	                   {type:"m2", mid: 2, id : 1726, title :"Essentials Toolkit", version : 2013, price : 29900, desc : "ECDL Computer Essentials, ECDL Online Essentials, ECDL Word Processing, ECDL-endorsed Data Protection and ECDL IT Security"},

    	         	                   {type:"m2", mid: 3, id : 1753, title : "Marketing Toolkit", version : 2013, price : 29900, desc : "ECDL Online Collaboration, ECDL Image Editing, ECDL Web Editing, ECDL-endorsed Data Protection and ECDL Presentation"},

    	         	                

    	         	                   ]

    	

    	

      	$scope.unlimited = [

     	         	                   

     	         	                   {type:"m3", mid: 1, id : 1761, title :"Unlimited 2010",  version : 2010, price : 39900, desc : ""},

     	         	                   {type:"m3", mid: 2, id : 1758, title :"Unlimited 2013", version : 2013, price : 39900, desc : ""}

     	         	                   ]

     	         	                  

    	
	$scope.securityessentials = [

     	         	                   

     	         	                   {type:"m4", mid: 1, id : 2053, title :"IT Security Essentials",  version : 2016, price : 9900, desc : ""},

     	         	                   ]
    	

    	

    	  $scope.handler = StripeCheckout.configure({

    		    key: stripePublicKey,

    		   

    		    locale: 'auto',

    		    token: function(token) {

    		      // You can access the token ID with `token.id`.

    		      // Get the token ID to your server-side code for use.

    		      

    		      

    		      	waitingDialog.show('Preparing your account...   ', {dialogSize: 'sm', progressType: 'info'});

    		      

    		      var stripeParams = "?stripeToken=" + token.id + "&" + "stripeEmail=" + token.email + "&packageId=" + $scope.currentProduct.id;


                var data = {stripeToken : token.id, stripeEmail : token.email, packageId : $scope.currentProduct.id };

                $http.get(apiLocation + "/s1/chargeandcreate" + stripeParams).then(function () {

                                        window.location.href = apiLocation + '/s1/profileupdate?chargeId=' +  token.id;

                    

                }, function () {

                    console.log("faile");

                    alert("Failure on posting")

                });





 	      

    		      

    		    }

    		  });

    	

    	

    	$scope.changeChoiceSingleModule = function () {



			if ($scope.currentProduct != null ) {

				//We need to toggle

				

				if ($scope.currentProduct.type == "m2") {

					$scope.currentProduct ={};

					return;

				} 

				

    			if ($scope.currentProduct.version == "2010") {


						for(var i = 0 ; i < $scope.products2013.length; i++) {

							if ($scope.products2013[i].mid == $scope.currentProduct.mid) {

								$scope.currentProduct = $scope.products2013[i];

								break;
							}

						}


    			} else {





    				for(var i = 0 ; i < $scope.products2010.length; i++) {



						if ($scope.products2010[i].mid == $scope.currentProduct.mid) {

							$scope.currentProduct = $scope.products2010[i];

							break;



						}

					}

    				

    			}

			} 

    	}





    	$scope.changeChoiceFiveModule = function () {



			if ($scope.currentProduct != null ) {

				//We need to toggle

				

				if ($scope.currentProduct.type == "m1") {

					$scope.currentProduct ={};

					return;

				} 



				

    			if ($scope.currentProduct.version == "2010") {


						for(var i = 0 ; i < $scope.fiveModuleToolkit2013.length; i++) {

							console.log("looking for 2013 %d", i);

							if ($scope.fiveModuleToolkit2013[i].mid == $scope.currentProduct.mid) {

								$scope.currentProduct = $scope.fiveModuleToolkit2013[i];

								break;

							}

						}

    			} else {


    				for(var i = 0 ; i < $scope.fiveModuleToolkit2010.length; i++) {



						if ($scope.fiveModuleToolkit2010[i].mid == $scope.currentProduct.mid) {

							$scope.currentProduct = $scope.fiveModuleToolkit2010[i];

							break;

						}

					}

    				

    			}

			} 

    	}

    	

    	$scope.buytoolkit = function () {


    	  	    // Open Checkout with further options:

    	  	    $scope.handler.open({

    	  	      name:  "ECDL Workforce" ,

    	  	      description:  $scope.currentProduct.title + " (" + $scope.currentProduct.version + ")",

    	  	    allowRememberMe : false,

    	  	      currency: "eur",

    	  	      amount:  $scope.currentProduct.price

    	  	    });

    		

    	}


		

		
    	$scope.buySecurityEssentials = function () {


    	  	   	var packageId =2053;

    		//Change the current product

    		$scope.currentProduct = {type: "m4", id: packageId, version: "2016", desc: "IT Security" , price : 9900}


	  	    // Open Checkout with further options:

	  	    $scope.handler.open({

	  	      name:  "ECDL Workforce (IT Security Essentials)" ,

	  	      description:  " (" + $scope.currentProduct.version + ")",

	  	    allowRememberMe : false,

	  	      currency: "eur",

	  	      amount:  $scope.currentProduct.price

	  	    });


    		

    	}

    	

    	$scope.showModal = function () {

    		waitingDialog.show('Custom message', {dialogSize: 'sm', progressType: 'warning'});

    	}

    	

    	$scope.buyFiveModuleToolkit = function () {


	  	    // Open Checkout with further options:

	  	    $scope.handler.open({

	  	      name:  "ECDL Workforce (5 Modules)" ,

	  	      description:  $scope.currentProduct.title + " (" + $scope.currentProduct.version + ")",

	  	    allowRememberMe : false,

	  	      currency: "eur",

	  	      amount:  $scope.currentProduct.price

	  	    });

		

	}

	

    	$scope.buyUnlimitedToolkit = function () {

    		var packageId = $scope.version.name == "2010" ? 1758 : 1761;

    		//Change the current product

    		$scope.currentProduct = {type: "m3", id: packageId, version: $scope.version.name, desc: "unlimited" , price : 39900}


	  	    // Open Checkout with further options:

	  	    $scope.handler.open({

	  	      name:  "ECDL Workforce (Unlimited)" ,

	  	      description:  " (" + $scope.currentProduct.version + ")",

	  	    allowRememberMe : false,

	  	      currency: "eur",

	  	      amount:  $scope.currentProduct.price

	  	    });

		

	}



    	$scope.currentProduct = {};


    	   $scope.version = {

                   name: '2010'

               };



             

               $scope.hide = false;



               $scope.slide = function () {



                   $scope.hide = ! $scope.hide;



               }



    })


	$(document).ready(function() {



		$('#nav').affix({

		  offset: {

			top: $('header').height()

			  }

		});	



		$('body').scrollspy({ target: '#nav' })



		$('input[type=checkbox]').each(function() {

			this.checked = false; });

		//$('#btn-buy-toolkit').attr('disabled', 'disabled');

		//$('#btn-buy-bundle').attr('disabled', 'disabled');



		$('#btn-buy-toolkit').attr("disabled",true);

			$('.cbox').change(function() {

				$('#btn-buy-toolkit').attr('disabled', $('.cbox:checked').length == 0);

		});



		$(function() {

			$('#form-buy-toolkit').click(function() {

				if ($(this).is(':checked')) { 

					$('#btn-buy-toolkit').attr('disabled', 'disabled');

				} else {

					$('#btn-buy-toolkit').removeAttr('disabled');

				}

			});

		});



		$('#btn-buy-bundle').attr("disabled",true);

			$('.cboxm').change(function() {

				$('#btn-buy-bundle').attr('disabled', $('.cboxm:checked').length == 0);

		});



  		$(function() {

			$('#form-buy-bundle').click(function() {

				if ($(this).is(':checked')) { 

					$('#btn-buy-bundle').attr('disabled', 'disabled');

				} else {

					$('#btn-buy-bundle').removeAttr('disabled');

				}

			});

		});

  		

  	  $('#btn-buy-toolkitx').on('click', function(e) {

  		  console.log("clkcing");

  	    // Open Checkout with further options:

  	    handler.open({

  	      name: 'Demo Site for',

  	      description: '2 widgets',

  	 

  	      currency: "eur",

  	      amount: 2000

  	    });

  	    e.preventDefault();

  	  });



	});



	</script>





<script>

  var handler = StripeCheckout.configure({

    key: stripePublicKey,

   

    locale: 'auto',

    token: function(token) {

      // You can access the token ID with `token.id`.

      // Get the token ID to your server-side code for use.

      

      var stripeParams = "stripeToken=" + token.id + "&" + "stripeEmail=" + token.email;

      window.location.href = 'https://cms.ics-skills.net/s1/index?' + stripeParams;

    }

  });







  // Close Checkout on page navigation:

  $(window).on('popstate', function() {

    handler.close();

  });

</script>


</head>





<body ng-app="stripeIntegrationApp" ng-controller="stripeController">





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

                <a class="navbar-brand" href="https://www.ecdl.ie/" class="img-responsive center-block" style="padding: 1px;"/><img src="assets/img/ecdl-ireland-logo.png" /></a>

				

            </div>

			

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul id="main-navi" class="nav navbar-nav center-block ">

                <li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a title="ECDL FOR YOU" href="https://www.ecdl.ie/ecdl-for-you/">ECDL FOR YOU</a></li>

                <li id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a title="WORKFORCE" href="https://www.ecdl.ie/workforce/">WORKFORCE</a></li>

                <li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a title="SCHOOL ECDL" href="https://www.ecdl.ie/school-ecdl/">SCHOOL ECDL</a></li>

                <li id="menu-item-798" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-798"><a title="Conference" href="https://www.ecdl.ie/conference/">Conference</a></li>

                <li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a title="FIND TEST CENTRE" href="https://www.ecdl.ie/find-test-centre/">FIND TEST CENTRE</a></li>

                <li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"><a title="CONTACT" href="https://www.ecdl.ie/contact/">CONTACT</a></li>

                <li><a data-toggle="modal" data-target="#login" >LOGIN</a></li></ul>        

            </div>

            <!-- /.navbar-collapse -->

        </div>

        <!-- /.container -->

    </nav>

	</div>









<IMG SRC="assets/img/ecdl-half-full-width.png" class="img-responsive" ALT="ECDL image">





<div class="block-vertical block-buy-options">

	<div class="container">



	



		<div class="pricing-tables">

			<div class="row">

				<div class="col-sm-4 col-sm-offset-2 col-md-4" >
					<div class="plan"  >

					<div class="head">

							<h2>IT Security Essentials</h2>

					</div>

					<p  class="buy-option-module">						<br/>						<b>No MS Office required.</b>						
					</p>

										<p onmouseover="collapseITSecurity()">View modules to be purchased:<br/>											<i class="fa fa-chevron-down"></i>										</p>																				
									<div id="more-it-secure" class="plan-collapse collapse">
										<ul class="item-list fa-ul" style="text-align:left" >

								

											<li><i class="fa-li fa fa-check"></i>ECDL IT Security</li>

										
											<li><i class="fa-li fa fa-check"></i>ECDL-endorsed Data Protection</li>

										</ul>										<p>											<a>												<i class ="fa fa-chevron-up" onclick="collapseOutITSecurity()"></i>											</a>										</p>									</div>

										<div class="price">

											<h3><span class="symbol">&#8364;</span>99<span class="option-detail">all modules</span></h3>

										</div>

										<button type="button" class="btn btn-success" ng-click="buySecurityEssentials()">Purchase</button>



					</div><!-- /plan -->



				</div>



				<div class="col-sm-4 col-md-4"   >

					<div class="plan">

						<div class="head">

							<h2>Single module toolkits</h2>

						</div>

						<p class="buy-option-module">

						<label><input type="radio" name="optradio1" ng-click = "changeChoiceSingleModule()" ng-model="version.name" value="2010">&nbsp;MS Office 2010</label>

						<label><input type="radio" name="optradio1" ng-click = "changeChoiceSingleModule()" ng-model="version.name" value="2013">&nbsp;MS Office 2013</label>
						<label><input type="radio" name="optradio1" ng-click = "changeChoiceSingleModule()" ng-model="version.name" value="2016">&nbsp;MS Office 2016</label>

						

						</p>

						<p onmouseover="collapseSingleModule()">Hover to view and purchase a module:<br/>							<i class="fa fa-chevron-down"></i>						</p>
					<div id="more-single-toolkits" class="plan-collapse collapse">
						<form id="form-buy-toolkit">

						

							<ul class="item-list" style="text-align:left"   ng-show="version.name == 2010">

							<span class="checkbox" ng-repeat="item in products2010">

									<li><label><input class="cbox" type="radio" name="chooseWorkForce" ng-model="$parent.currentProduct"  ng-value="item">&nbsp;{{item.title}}</label></li>

								</span>

							

							</ul>

							<ul class="item-list" style="text-align:left"   ng-show="version.name == 2013">

							<span class="checkbox" ng-repeat="item in products2013">

									<li><label><input class="cbox" type="radio" name="chooseWorkForce" ng-model="$parent.currentProduct"  ng-value="item">&nbsp;{{item.title}}</label></li>

								</span>

							

							</ul>
							<ul class="item-list" style="text-align:left"   ng-show="version.name == 2016">



							<span class="checkbox" ng-repeat="item in products2016">



									<li><label><input class="cbox" type="radio" name="chooseWorkForce" ng-model="$parent.currentProduct"  ng-value="item">&nbsp;{{item.title}}</label></li>



								</span>



							



							</ul>
						

						

							

							

						</form>						<p>							<a>								<i class ="fa fa-chevron-up" onclick="collapseOutSingleModule()"></i>							</a>						</p>					</div>

						<div class="price">

							<h3><span class="symbol">&#8364;</span>99<span class="option-detail">per module</span></h3>

						</div>

						<button type="button" class="btn btn-success" id="btn-buy-toolkit" ng-disabled="currentProduct.type != 'm1'" ng-click="buytoolkit()">Purchase</button>

						

										

						

						

					</div>

				</div>						</div>
			<div class="row">

				<div class="col-sm-4 col-sm-offset-2 col-md-4">

					<div class="plan" >

						<div class="head"><h2>5-module toolkits</h2></div>

						

						<p  class="buy-option-module">

						<label><input type="radio" name="optradio2" ng-click = "changeChoiceFiveModule()" ng-model="version.name" value="2010">&nbsp;MS Office 2010</label>

						<label><input type="radio" name="optradio2" ng-click = "changeChoiceFiveModule()" ng-model="version.name" value="2013">&nbsp;MS Office 2013</label>

						<label><input type="radio" name="optradio2" ng-click = "changeChoiceFiveModule()" ng-model="version.name" value="2016">&nbsp;MS Office 2016</label>

						</p>

						

						<p onmouseover="collapseFiveModule()" >Hover to choose a module bundle:<br/>							<i class="fa fa-chevron-down"></i>						</p>
					<div id="more-bundles" class="plan-collapse collapse">
						<form id="form-buy-bundle">

							<ul class="item-list" style="text-align:left"   ng-show="version.name == 2010">

							

							<span class="checkbox" ng-repeat="item in fiveModuleToolkit2010">

							

								<li><label><input type="radio" name="fiveModuleToolkit" class="cboxm" ng-model="$parent.currentProduct" ng-value="item">&nbsp;{{item.title}}</label><br>

									<span class="toolkit-contents">{{item.desc}}</span></li>

							

							

							</span>

							

							

							</ul>

							

							<ul class="item-list" style="text-align:left"   ng-show="version.name == 2013">

								<span class="checkbox" ng-repeat="item in fiveModuleToolkit2013">

							

								<li><label><input type="radio" name="fiveModuleToolkit" class="cboxm" ng-model="$parent.currentProduct" ng-value="item">&nbsp;{{item.title}}</label><br>

									<span class="toolkit-contents">{{item.desc}}</span></li>

							

							

							</span>

							</ul>
							<ul class="item-list" style="text-align:left"   ng-show="version.name == 2016">



								<span class="checkbox" ng-repeat="item in fiveModuleToolkit2013">



							



								<li><label><input type="radio" name="fiveModuleToolkit" class="cboxm" ng-model="$parent.currentProduct" ng-value="item">&nbsp;{{item.title}}</label><br>



									<span class="toolkit-contents">{{item.desc}}</span></li>



							



							



							</span>



							</ul>
							

						</form>						<p>							<a>								<i class ="fa fa-chevron-up" onclick="collapseOutFiveModule()"></i>							</a>						</p>											</div>

						<div class="price">

							<h3><span class="symbol">&#8364;</span>299<span class="option-detail">per bundle</span></h3>

						</div>

						<button type="button" class="btn btn-success" id="btn-buy-bundle" ng-disabled="currentProduct.type != 'm2'" ng-click="buyFiveModuleToolkit()">Purchase</button>

					</div>

				</div>
			
				<div class="col-sm-4 col-md-4">

					<div class="plan"">

						<div class="head">

							<h2>All module toolkit</h2>

						</div>

						

							<p  class="buy-option-module">

						<label><input type="radio" name="optradio3" ng-model="version.name" value="2010">&nbsp;MS Office 2010</label>

						<label><input type="radio" name="optradio3" ng-model="version.name" value="2013">&nbsp;MS Office 2013</label>
						<label><input type="radio" name="optradio3" ng-model="version.name" value="2016">&nbsp;MS Office 2016</label>
						

						</p>
					<div  >
						<p onmouseover="collapseAllModule()">Hover to view all modules:<br/>							<i class="fa fa-chevron-down"></i>						</p>													
					<div id="show-all" class="plan-collapse collapse">
						<ul class="item-list fa-ul" style="text-align:left" >

							<li><i class="fa-li fa fa-check"></i>ECDL Computer Essentials</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Online Essentials</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Word Processing</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Spreadsheets</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Presentation</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Using Databases</li>

							<li><i class="fa-li fa fa-check"></i>ECDL IT Security</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Online Collaboration</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Image Editing</li>

							<li><i class="fa-li fa fa-check"></i>ECDL Web Editing</li>

							<li><i class="fa-li fa fa-check"></i>ECDL-endorsed Data Protection</li>

						</ul>						<p>							<a onclick="collapseOutAllModule()" >								<i class ="fa fa-chevron-up"></i>							</a>						</p>					</div>

						<div class="price">

							<h3><span class="symbol">&#8364;</span>399<span class="option-detail">all modules</span></h3>

						</div>

						<button type="button" class="btn btn-success" ng-click="buyUnlimitedToolkit()">Purchase</button>

							

					</div>

				</div>												
			
			</div>

		</div>

	</div>

</div>





<div class="logos">

  <div class="container">

    <div class="row">

      <div class="col-md-12" style="text-align:center"><h2>Who we work with. <br />What we offer.</h2>

        <p>Online programme delivery, learner administration, training content development, online testing and certification, telephone and online support, membership, event and project management, and digital marketing and brand promotion &#8211; these are among the services provided by ICS Skills. Here are a few of the clients we serve:<p>

      </div>

    </div>



    <div class="row">

      <div class="col-md-12">

        <ul>

          <li><a target="_blank" href="https://www.ecdl.ie"  class="holder holder1-bw" id="holder1">&nbsp;</a></li>

          <li><a target="_blank" href="https://www.businessanalyst.ie"  class="holder holder2-bw" id="holder2">&nbsp;</a></li>

          <li><a target="_blank" href="https://www.iasa.ie"  class="holder holder3-bw" id="holder3">&nbsp;</a></li>

          <li><a target="_blank" href="https://scratch.ics.ie"  class="holder holder4-bw" id="holder4">&nbsp;</a></li>

          <li><a target="_blank" href="http://www.chooseit.ie/public/index.php"  class="holder holder5-bw" id="holder5">&nbsp;</a></li>

          <li><a target="_blank" href="https://www.dpo.ie"  class="holder holder6-bw" id="holder6">&nbsp;</a></li>

          <li><a target="_blank" href="https://www.hisi.ie"  class="holder holder7-bw" id="holder7">&nbsp;</a></li>

          <li><a target="_blank" href="http://www.f1inschools.ie/"  class="holder holder8-bw" id="holder8">&nbsp;</a></li>

          <li><a target="_blank" href="https://www.techweek.ie"  class="holder holder9-bw" id="holder9">&nbsp;</a></li>

          <li><a target="_blank" href="https://www.ics.ie"  class="holder holder10-bw" id="holder10">&nbsp;</a></li>

          <li><a target="_blank" href="#" class="holder holder12-bw hidden-xs hidden-sm" id="holder12">&nbsp;</a></li>

          <li><a target="_blank" href="#" class="holder holder12-bw hidden-xs hidden-sm" id="holder12">&nbsp;</a></li>

          <li><a target="_blank" href="https://www.itsmf.ie/"  class="holder holder11-bw" id="holder11">&nbsp;</a></li>

        </ul>

      </div>

    </div>



    <div class="row">

      <div class="col-md-12">

        <p>ECDL Ireland Ltd. trading as ICS Skills. Registered in Dublin, Ireland No. 265078. ICS Skills is a Registered Charity in Ireland No. CHY 12259</p>

      </div>

    </div>

  </div>

</div>





<footer>



<div id="footer_phone">

    <div class="container">

        <div class="row">

            <div class="col-xs-6">

                <p><strong><a href="https://www.ics.ie/ics/about">ECDL Ireland</a></strong></p>

                <p>87-89 Pembroke Road, <br />Dublin 4</p>

            </div>



            <div class="col-xs-6" >

                <p><i class="fa fa-phone"></i>&nbsp;&nbsp;01 23 777 89</p>

                <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:support@ics.ie">support@ecdl.ie</a></p>

                <p><a href="https://www.ics.ie/privacy">Privacy</a></p>

            </div>

        </div>

    </div>

</div>





<div id="footer-desktop" style="margin-top:-20px">

	<div class="container" itemprop="location" itemscope itemtype="https://schema.org/Place">

		<div class="row">



			<div class="col-lg-6 col-md-6 col-sm-6 col-three">

				<div class="well">

					<p>ECDL is administered in Ireland by the training and certification arm of the Irish Computer Society (ICS).</p>

					<p class="font-size:14px"><a href="https://www.ecdl.ie">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.ics.ie/ics/about">About</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.ics.ie/privacy">Privacy</a></p>

				</div>

			</div>





			<div class="col-lg-3 col-md-3 col-sm-3 col-one">

				<div class="well">

					<p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><strong>ECDL Ireland</strong><br/>87- <span itemprop="streetAddress">89 Pembroke Road</span><br/> <span itemprop="postalCode">Dublin 4</span><br/>

					01 23 777 89<br>D04 R266</p>

				</div>

			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-two">

				<div class="well">

					<p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<a target="_blank" href="mailto:support@ecdl.ie">support@ecdl.ie</a><br />

					<i class="fa fa-facebook-square"></i>&nbsp;&nbsp;<a target="_blank"  href="https://www.facebook.com/ECDLIreland" >/ECDLIreland</a><br />

					<i class="fa fa-twitter-square"></i>&nbsp;&nbsp;<a  target="_blank"  href="https://twitter.com/ecdl_ireland" >@ECDL_Ireland</a></p>

				</div>

			</div>

		</div>

	</div>

</div>



</footer>





<!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PDBCVT"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-PDBCVT');</script>

<!-- End Google Tag Manager -->





</body>

</html>

