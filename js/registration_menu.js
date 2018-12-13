function form_registration_show() {
  document.getElementById('black_form').style.display = "block";
  document.getElementById('registration_form').style.display = "block";
  document.getElementById('dropdown-menu-login').style.display = "none";
}

function form_registration_close() {
  document.getElementById('registration_form').style.display = "none";
  document.getElementById('black_form').style.display = "none";
}
