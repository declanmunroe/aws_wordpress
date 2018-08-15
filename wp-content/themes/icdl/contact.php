<?php $title = "ECDL Ireland | Contact Form";
	$description = "";
	$keywords = "ECDL";
  get_header();
?>

<div id="block-bottom-form" class="block-vertical block-white">
  <div class="container">
    <div class="col-md-12" style="text-align: center;">
      <h2 class="text-center" style="color: #fff;">Get in touch with us</h2>
      <p class="deckhead" style="color: #fff;"><b>Please complete this form to receive a callback from a member of our team.</b></p>
    </div>
  </div>

  <div class="row">
    <form id="newsletterForm" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" autocomplete="on" method="post" name="newsletterForm">
      <input name="oid" type="hidden" value="00D80000000ZwS8"> <input id="00NC0000005KSF4" name="00NC0000005KSF4" type="hidden" value="https://www.ecdl.ie/"> <input id="lead_source" name="lead_source" type="hidden" value="General"> <input type="hidden" name="retURL" value="https://www.ecdl.ie/thank-you/">

      <div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 block-mini-grey">
        <h3> <i class="fa fa-user"></i> Your details</h3>

        <div class="form-group clearfix">
          <label class="control-label col-sm-3 col-md-3 col-lg-3" for="first_name">First Name<sup>*</sup></label>
          <div class="col-sm-9 col-md-6 col-lg-6">
            <input id="first_name" class="form-control" required name="first_name" type="text" value="" placeholder="First Name">
          </div>
        </div>

        <div class="form-group clearfix">
          <label class="control-label col-sm-3 col-md-3 col-lg-3" for="last_name">Last Name<sup>*</sup></label>
          <div class="col-sm-9 col-md-6 col-lg-6">
            <input id="last_name" class="form-control" required name="last_name" type="text" value="" placeholder="Last Name">
          </div>
        </div>

        <div class="form-group clearfix">
          <label class="control-label col-sm-3 col-md-3 col-lg-3" for="company">Organisation<sup>*</sup></label>
          <div class="col-sm-9 col-md-6 col-lg-6">
            <input id="company" class="form-control company" required name="company" type="text" value="" placeholder="Organisation">
          </div>
        </div>

        <div class="form-group clearfix">
          <label class="control-label col-sm-3 col-md-3 col-lg-3" for="phone">Phone<sup>*</sup></label>
          <div class="col-sm-9 col-md-6 col-lg-6">
            <input id="phone" class="form-control phone" required name="phone" type="text" value="" placeholder="Phone">
          </div>
        </div>

        <div class="form-group clearfix">
          <label class="control-label col-sm-3 col-md-3 col-lg-3" for="email">Email<sup>*</sup></label>
          <div class="col-sm-9 col-md-6 col-lg-6">
            <input id="email" class="form-control email" required name="email" type="text" value="" placeholder="Email">
          </div>
        </div>

        <div class="form-group clearfix">
          <label class="control-label col-sm-3 col-md-3 col-lg-3" for="00N800000049G76">Comments<sup>*</sup></label>
          <div class="col-sm-9 col-md-6 col-lg-6">
            <textarea id="00N800000049G76" name="00N800000049G76" class="form-control" rows="9" spellcheck required placeholder="Enter your message here."></textarea>
          </div>
        </div>

        <div style="text-align: center;">
          <div class="form-group">
            <button id="register" class="btn btn-success" name="register" type="submit">Submit Details <i class="ion-chevron-right"></i></button>
          </div>
        </div><!--/col-6-->
      </div>
    </form>
  </div><!--/row-->

  <div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="text-align: center;">
      <div id="msg_box_workforce" style="text-align: center;">
        msg_box
      </div>
    </div>
  </div>
</div><!--/container-->

<?php get_footer();?>
