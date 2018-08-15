function doValidate() {

	var username = $('#login-username').val();
	username = username.trim();
	var password = $('#login-password').val();
	password = password.trim();

	if (username == "") {
		showLoginError(1);
		$("#login-username").focus();
		return false;
	}

	var a = username;
	var filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!filter.test(a)){
		showLoginError(2);
		$("#login-username").focus();
		return false;
	}

	if (password == "") {
		showLoginError(3);
		$("#login-password").focus();
		return false;
	}
	//processLogin();
	return true;
}

function showLoginError(eID) {
	$('#msg_box').show();
	$("#msg_box").addClass('msg_error');

	if (eID == 1) {
		$('#msg_box').html("<p><i class='icon-warning-sign'></i>&nbsp;&nbsp;Your <b>Email Address</b> please.</p>");
	}
	else if (eID == 2) {
		$('#msg_box').html("<p><i class='icon-warning-sign'></i>&nbsp;&nbsp;A <b>valid</b> Email Address please.</p>");
	}
	else if (eID == 3) {
		$('#msg_box').html("<p><i class='icon-warning-sign'></i>&nbsp;&nbsp;Your <b>Password</b> please.</p>");
	}
}
