$(document).ready(function() {
  $("A#change_password_profile_a").toggle(function() {
    // Отображаем скрытый блок
    $("DIV#change_password_form").fadeIn(400); // fadeIn - плавное появление
    document.getElementById('change_password_form').style.top = "560px";
    document.getElementById('profile_form').style.top = "100px";
    return false; // не производить переход по ссылке
  },
  function() {
    // Скрываем блок
    $("DIV#change_password_form").fadeOut(0); // fadeOut - плавное исчезновение
    document.getElementById('profile_form').style.top = "224px";
    return false; // не производить переход по ссылке
  }); // end of toggle()
}); // end of ready()
