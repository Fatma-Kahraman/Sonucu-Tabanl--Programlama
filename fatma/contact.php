<?php

  require_once 'header.php';

?>
<?php

if (isset($_POST['message_gonder'])) {

  $sonuc=$db->insert("contacts",$_POST,
    [
      "form_name"=>"message_gonder",//form Name
      "name_surname"=>"name_surname",
      "email" => "email",
      "message" => "message"
    ]);

  if ($sonuc['status']) { ?>

    <div class="alert alert-success">
      Mesaj Gönderme İşlemi Başarılı Bir Şekilde Gerçekleşmiştir.
    </div>

  <?php } else { ?>

    <div class="alert alert-danger">
      Mesaj Gönderme İşlemi Başarısız Oldu.Lütfen Tekrar Deneyiniz. <?php echo $sonuc['error']; ?>
    </div>

  <?php }

}

?>
<!-- Sayfa içeriği -->
<div class="container">

  <!-- Sayfa Başlığı -->
  <h1 class="mt-4 mb-3">İLETİŞİM</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Anasayfa</a>
    </li>
    <li class="breadcrumb-item active">İletişim</li>
  </ol>



  <!-- İletişim Formu -->
  <!-- İletişim formu için e-posta adresini ve konu satırını ayarlamak için bin / contact_me.php dosyasına gidin. -->
  <div class="row">
    <div class="col-lg-9 mb-4">
      <h3>Geri Bildirimde Bulunun</h3>
      <p>&nbsp;&nbsp;Marvel Karakterleri hakkındaki düşünceleriniz bizim için çok değerlidir. Geri bildirimlerinizi bekliyoruz...</p>
      <form method="POST">
        <div class="control-group form-group">
          <div class="controls">
            <label>Adınız Soyadınız:</label>
            <input type="text" class="form-control" id="name" name="name_surname" required data-validation-required-message="Please enter your name.">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email Adresiniz:</label>
            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Mesajınız:</label>
            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton"  name="message_gonder">Gönder</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<?php require_once 'footer.php'; ?>
