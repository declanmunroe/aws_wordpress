function validateForm() {
	$("input:text").removeClass("form-field-error");
	$("select").removeClass("form-field-error");

	if( !$("#last_name").val() ) {
		$("#last_name").addClass("form-field-error");
		showFormError(1);
		return false;
	}

	if( $("#last_name").val().length < 2 ) {
	$("#last_name").addClass("form-field-error");
		showFormError(2);
		return false;
	}

	if( !$("#email").val() ) {
		$("#email").addClass("form-field-error");
		showFormError(3);
		return false;
	}

	if( !isValidEmailAddress($("#email").val() ) ) {
		showFormError(4);
		return false;
	}

}

function showFormError(eID) {
	$('#msg_box').css({'display':'block'});
	if (eID == 1) {
		$('#msg_box').html('<p>Your <b>Name</b> please.</p>');
	}
	else if (eID == 2) {
		$('#msg_box').html('<p>At least two characters in the <b>Name</b> box please.</p>');
	}
	else if (eID == 3) {
		$('#msg_box').html('<p>Your <b>Email Address</b> please.</p>');
	}
	else if (eID == 4) {
		$('#msg_box').html('<p>Enter a <b>valid</b> Email Address please.</p>');
	}
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

