<?php
/**
 * The main template file.
 * @package ECDL-Ireland
 */
$title = "ECDL Ireland | Home";
$description = "";
$keywords = "ECDL";

get_header();

?>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit center">
          <h2>PAGE NOT FOUND!</h2>
          <br />
          <p>The page you requested could not be found, either contact your webmaster or try again. Use your browser's <b>Back</b> button to navigate to the page you have prevously come from</p>
          <p><b>Or you could just press this button:</b></p>
          <a href="<?php bloginfo('url')?>" class="btn btn-large"><i class="icon-home icon-white"></i> ECDL-Ireland Home</a>
        </div>
        <br />

    </div>
  </div>
</div>
<?php
 get_footer();
 ?>
