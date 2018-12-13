function profile_form_show() {
  document.getElementById('black_form').style.display = "block";
  document.getElementById('profile_form').style.display = "block";
  document.getElementById('dropdown-menu-login').style.display = "none";
}

function profile_form_close() {
  $("DIV#change_password_form").fadeOut(0);
  document.getElementById('profile_form').style.top = "224px";
  document.getElementById('profile_form').style.display = "none";
  document.getElementById('black_form').style.display = "none";
  document.getElementById('change_password_form').style.display = "none";
  return false;
}
