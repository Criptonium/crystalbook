function form_email_show() {
  document.getElementById('black_form').style.display = "block";
  document.getElementById('email_form').style.display = "block";
  document.getElementById('dropdown-menu-login').style.display = "none";
}

function form_email_close() {
  document.getElementById('email_form').style.display = "none";
  document.getElementById('black_form').style.display = "none";
}
