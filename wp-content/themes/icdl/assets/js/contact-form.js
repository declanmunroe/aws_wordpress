
$(document).ready(function(){
$('#newsletterForm').parsley();
<?php if ($this->success): ?>
sweetAlert(" Your request for further information has been received. ", "We will be in contact with you shortly", "success");
<?php endif ?>
});
