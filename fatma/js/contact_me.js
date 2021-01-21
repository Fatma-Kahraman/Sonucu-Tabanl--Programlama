$(function() {

  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // ek hata mesajları veya olaylar
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // varsayılan gönderme davranışını önleme
      // FORM'dan değerler alma
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();
      var firstName = name; // Başarı / Başarısızlık Mesajı İçin
      // Başarı / Başarısız mesajı için adda beyaz boşluk olup olmadığını kontrol edin
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton");
      $this.prop("disabled", true); // Yinelenen mesajları önlemek için AJAX çağrısı tamamlanana kadar gönder düğmesini devre dışı bırakın
      $.ajax({
        url: "././mail/contact_me.php",
        type: "POST",
        data: {
          name: name,
          phone: phone,
          email: email,
          message: message
        },
        cache: false,
        success: function() {
          // Başarılı mesajı
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong> Mesajınız gönderildi... </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //tüm alanları temizle
          $('#contactForm').trigger("reset");
        },
        error: function() {
          // Başarısız mesajı
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", E-Postanız ulaşılamadı. Lütfen daha sonra tekrar deneyiniz!"));
          $('#success > .alert-danger').append('</div>');
          //tüm alanları temizle
          $('#contactForm').trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // AJAX çağrısı tamamlandığında gönder düğmesini yeniden etkinleştirin
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*Tam gizle başarısız / başarılı kutularına tıklandığında */
$('#name').focus(function() {
  $('#success').html('');
});
