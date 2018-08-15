function validateWorkForceForm() {
	$("input:text").removeClass("form-field-error");
	$("select").removeClass("form-field-error");

	if( !$("#first_name").val() ) {
		$("#first_name").addClass("form-field-error");
		showWorkForceFormError(1);
		$("#first_name").focus();
		return false;
	}

	if( $("#first_name").val().length < 2 ) {
		$("#first_name").addClass("form-field-error");
		showWorkForceFormError(2);
		$("#first_name").focus();
		return false;
	}

	if( !$("#last_name").val() ) {
		$("#last_name").addClass("form-field-error");
		showWorkForceFormError(3);
		$("#last_name").focus();
		return false;
	}

	if( $("#last_name").val().length < 2 ) {
		$("#last_name").addClass("form-field-error");
		showWorkForceFormError(4);
		$("#last_name").focus();
		return false;
	}

	if( !$("#company").val() ) {
		$("#company").addClass("form-field-error");
		showWorkForceFormError(5);
		$("#company").focus();
		return false;
	}

	if( $("#company").val().length < 2 ) {
		$("#company").addClass("form-field-error");
		showWorkForceFormError(6);
		$("#company").focus();
		return false;
	}

	if( !$("#phone").val() ) {
		$("#phone").addClass("form-field-error");
		showWorkForceFormError(7);
		$("#phone").focus();
		return false;
	}

	if (!isNaN($('#phone').val() / 1) == false) {
		$("#phone").addClass("form-field-error");
		showWorkForceFormError(8);
		$("#phone").focus();
		return false;
	}

	if( $("#phone").val().length < 7 ) {
		$("#phone").addClass("form-field-error");
		showWorkForceFormError(9);
		$("#phone").focus();
		return false;
	}

	if( !$("#email").val() ) {
		$("#email").addClass("form-field-error");
		showWorkForceFormError(10);
		$("#email").focus();
		return false;
	}

	if( !isValidEmailAddress($("#email").val() ) ) {
		showWorkForceFormError(11);
		$("#email").focus();
		return false;
	}


}


function showWorkForceFormError(eID) {

	$('#msg_box_workforce').css({'display':'block'});
	if (eID == 1) {
		$('#msg_box_workforce').html('<p>Your <b>First Name</b> please.</p>');
	}

	else if (eID == 2) {
		$('#msg_box_workforce').html('<p>At least two characters in the <b>First Name</b> box please.</p>');
	}

	else if (eID == 3) {
		$('#msg_box_workforce').html('<p>Your <b>Last Name</b> please.</p>');
	}
	else if (eID == 4) {
		$('#msg_box_workforce').html('<p>At least two characters in the <b>Last Name</b> box please.</p>');
	}

	else if (eID == 5) {
		$('#msg_box_workforce').html('<p>Your <b>Organisation</b> name please.</p>');
	}
	else if (eID == 6) {
		$('#msg_box_workforce').html('<p>At least two characters in the <b>Organisation</b> box please.</p>');
	}

	else if (eID == 7) {
		$('#msg_box_workforce').html("<p>Your <b>Phone</b> number please.</p>");
	}

	else if (eID == 8) {
		$('#msg_box_workforce').html("<p>Enter only numbers in the <b>Phone</b> box. Please do NOT type spaces or other characters.</p>");
	}
	else if (eID == 9) {
		$('#msg_box_workforce').html("<p>Enter at least 7 numbers for your <b>Phone</b> please.</p>");
	}

	else if (eID == 10) {
		$('#msg_box_workforce').html('<p>Your <b>Email Address</b> please.</p>');
	}
	else if (eID == 11) {
		$('#msg_box_workforce').html('<p>Enter a <b>valid</b> Email Address please.</p>');
	}


}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};
