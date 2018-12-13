<meta charset="utf-8">

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<div id="flipkart-navbar">
  <div class="container">
      <div class="row row1">
          <div class="col-sm-2">
              <h2><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
              <a href="http://localhost"><h1><img src="images/logos/crystals.png"><span class="largenav">Crystal Book</span></h1></a>
          </div>
          <div class="flipkart-navbar-search smallsearch col-sm-7 col-xs-11">
              <div class="row">
                <form method="post">
                  <input class="flipkart-navbar-input col-xs-11" placeholder="Введите название литературы, автора" name="search">
                  <button type="submit" class="flipkart-navbar-button col-xs-1">
                      <svg width="16px" height="16px">
                          <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                      </svg>
                  </button>
                </form>
              </div>
          </div>
          <?php
          if(isset($_SESSION['name_user']))
          {?>
            <div class="profile-navbar col-sm-3">
              <div class="row">
                <a href="#" onclick="login_menu_dropdown();">
                <div class="profile-navbar-image">
                  <img src="images/logos/no-image-profile.jpg">
                </div>
                <h6><span><?=$_SESSION['name_user']?></span><span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span></h6>
                </a>
              </div>
            </div>
          <?php }
          else {?>
            <div class="profile-navbar col-sm-3">
              <div class="row">
                <a href="#" onclick="login_menu_dropdown();">
                  <div class="profile-navbar-image">
                    <img src="images/logos/no-image-profile.jpg">
                  </div>
                  <h6><span>Войти</span><span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span></h6>
                </a>
              </div>
            </div>
          <?php }?>
          <!--
          <div class="cart largenav col-sm-2">
              <a class="cart-button">
                  <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                      <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                  </svg> Link
                  <span class="item-number ">0</span>
              </a>
          </div>
        -->
      </div>
  </div>
</div>
<div class="dropdown-menu" id="dropdown-menu-login">
  <?php
  if(isset($_SESSION['name_user']))
  {?>
    <form class="px-3 py-2 profile-dropdown-menu" method="post" action="logout.php">
      <div class="form-group text-center">
        <a href="#" onclick="profile_form_show();"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Профиль</a>
      </div>
      <div class="form-group text-center">
        <a href="card.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Корзина (<?php include 'countitemsCard.php'; echo countitems(); ?>)</a>
      </div>
      <button type="submit" class="btn btn-primary" name="logout">Выйти</button>
    </form>
  <?php }
  else {?>
    <form class="px-3 py-2" method="post" action="autorization.php">
      <div class="form-group">
        <label for="exampleDropdownFormEmail1">Email адрес</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Введите email" name="email_login">
      </div>
      <div class="form-group">
        <label for="exampleDropdownFormPassword1">Пароль</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Введите пароль" name="password_login">
      </div>
      <a class="dropdown-item text-center" href="#" onclick="form_registration_show();"><small>Впервые здесь? Зарегистрируйтесь</small></a>
      <button type="submit" class="btn btn-primary" name="autorization">Войти</button>
    </form>
  <?php }?>
</div>

<div id="black_form" onclick="form_registration_close(); profile_form_close(); form_email_close(); change_password_form_close(); ">
</div>

<div class="px-4 py-3" id="registration_form">
  <form method="post" action="registration.php">
    <p class="text-center text-uppercase h5">Регистрация</p>
    <div class="row py-3">
      <div class="col">
        <label for="exampleInputтName1">Ваше имя</label>
        <input type="text" class="form-control" id="exampleInputтName1" placeholder="Имя" name="name_reg">
      </div>
      <div class="col">
        <label for="exampleInputтLastName1">Ваша фамилия</label>
        <input type="text" class="form-control" id="exampleInputтLastName1" placeholder="Фамилия" name="last_name_reg">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email адрес</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите свой email адрес" name="email_reg">
    </div>
    <div class="form-group">
      <label for="exampleInputPhone1">Телефон</label>
      <input type="text" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="Введите номер телефона" name="phone_reg">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль" name="password_reg">
    </div>
    <div class="form-group">
      <label for="exampleInputRepeatPassword1">Повторите пароль</label>
      <input type="password" class="form-control" id="exampleInputRepeatPassword1" placeholder="Введите пароль повторно" name="repeat_password_reg">
    </div>
    <button type="submit" class="btn btn-primary" name="registration">Зарегистрироваться</button>
  </form>
</div>

<div class="px-4 py-3" id="profile_form">
  <!--<button type="button" class="close text-right p-0" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
  <form method="post" action="profile_info.php">
    <div class="profile-form-image">
      <img src="images/logos/no-image-profile.jpg">
    </div>
    <p class="text-center my-2 h5"><?=$_SESSION['name_user']?></p>
    <div class="row py-3 mb-2">
      <div class="col">
        <label for="exampleInputтName1"><strong>Покупок:</strong></label>
      </div>
      <div class="col">
        <label for="exampleInputтLastName1"><strong>Комментариев:</strong></label>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1"><strong>Email адрес:</strong> <?=$_SESSION['email_user']?></label>
      <button type="submit" class="btn btn-primary" name="edit_email_profile"><i class="fa fa-pencil" aria-hidden="true"></i></button>
    </div>
    <div class="form-group">
      <label for="exampleInputPhone1"><strong>Мобильный номер:</strong> <?=$_SESSION['phone_number_user']?></label>
      <button type="submit" class="btn btn-primary" name="edit_phone_number_profile"><i class="fa fa-pencil" aria-hidden="true"></i></button>
    </div>
    <p class="text-center text-uppercase my-0"><a id="change_password_profile_a" href="#">сменить пароль</a></p>
  </form>
</div>

<div class="px-4 py-3 pt-4" id="change_password_form">
  <form method="post" action="">
    <div class="form-group">
      <label for="exampleInputOldPassword1">Старый пароль</label>
      <input type="password" class="form-control" id="exampleInputOldPassword1" placeholder="Введите старый пароль" name="old_password_profile">
    </div>
    <div class="form-group">
      <label for="exampleInputNewPassword1">Новый пароль</label>
      <input type="password" class="form-control" id="exampleInputNewPassword1" placeholder="Введите новый пароль" name="new_password_profile">
    </div>
    <div class="form-group">
      <label for="exampleInputRepeatNewPassword1">Повторите пароль</label>
      <input type="password" class="form-control" id="exampleInputRepeatNewPassword1" placeholder="Введите повторно новый пароль" name="repeat_new_password_profile">
    </div>
    <button type="submit" class="btn btn-primary" name="registration">Сменить пароль</button>
  </form>
</div>

<div class="px-4 py-3" id="email_form">
  <form method="post" action="email.php">
    <p class="text-center text-uppercase h5">Свяжитесь с нами</p>
    <div class="row py-3">
      <div class="col">
        <label for="exampleInputтName2">Ваше имя</label>
        <input type="text" class="form-control" id="exampleInputтName2" placeholder="Имя" name="name_email">
      </div>
      <div class="col">
        <label for="exampleInputтLastName2">Ваша фамилия</label>
        <input type="text" class="form-control" id="exampleInputтLastName2" placeholder="Фамилия" name="last_name_email">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail2">Email адрес</label>
      <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Введите свой email адрес" name="email_email">
    </div>
    <div class="form-group">
      <label for="exampleInputPhone2">Телефон</label>
      <input type="text" class="form-control" id="exampleInputPhone2" aria-describedby="phoneHelp" placeholder="Введите номер телефона" name="phone_email">
    </div>
    <div class="form-group">
      <label for="exampleInputPhone2">Сообщение</label>
      <textarea type="text" class="form-control" id="exampleTextarea1" aria-describedby="messageHelp" placeholder="Введите сообщение, которое хотите отправить" name="message_email" style="max-height: 200px;"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="mailing">Отправить сообщение</button>
  </form>
</div>
