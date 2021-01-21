<?php

  session_start();
  require_once 'setconfig.php';

?>
<!DOCTYPE html>
<!--
Bu bir başlangıç ​​şablon sayfasıdır. Yeni projenize başlamak için bu sayfayı kullanın. 
Bu sayfa tüm bağlantılardan kurtulur ve yalnızca gerekli işaretlemeyi sağlar.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KAHRAMAN YAZILIM | Admin Panel</title>
  <!--Tarayıcıya ekran genişliğine duyarlı olmasını söyleyin -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Harika Yazı Tipi -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!--İyonikonlar -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Tema stili -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Bu başlangıç ​​için ten mavisini seçtik
        sayfa. Bununla birlikte, başka herhangi bir dış görünümü seçebilirsiniz. Emin olun
        skin sınıfını body etiketine uygulayın, böylece değişiklikler etkili olur. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!--Veri Tabloları -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="css/ozel.css">

  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

  <!--Google Yazı Tipi -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!--Ana Başlık -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- kenar çubuğu mini 50x50 piksel için mini logo -->
      <span class="logo-mini"><b>K</b> Y</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KAHRAMAN</b> YAZILIM</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dimg/admins/<?php echo $_SESSION['admins']['admins_file']; ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['admins']['admins_namesurname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dimg/admins/<?php echo $_SESSION['admins']['admins_file']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['admins']['admins_namesurname']; ?>
                  <small>Yönetici</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Güvenli Çıkış</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>