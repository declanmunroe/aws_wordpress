




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
	if (gethostname() == 'cerulean.ics.local')
	   echo "var apiLocation = 'http://localhost:50981'";
	else
	   echo "var apiLocation = 'https://cms.ics-skills.net'";

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

     	         	                   {type:"m3", mid: 1, id : 1758, title :"Unlimited 2010",  version : 2010, price : 29900, desc : ""},
     	         	                   {type:"m3", mid: 2, id : 1761, title :"Unlimited 2013", version : 2013, price : 29900, desc : ""}
     	         	                   ]




    	  $scope.handler = StripeCheckout.configure({
    		    key: 'pk_test_v4DwKfCso58vqfYNoPSMktwA',

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
