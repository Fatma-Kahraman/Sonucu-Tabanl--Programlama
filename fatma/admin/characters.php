<?php

  require_once 'header.php';
  require_once 'sidebar.php';

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <?php
        if (isset($_GET['charactersInsert'])) {
      ?>

      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Karakter Ekle</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php

              if (isset($_POST['character_insert'])) {

                $sonuc=$db->insert("characters",$_POST,
                  [
                    "form_name"=>"character_insert",
                    "slug" => "characters_slug",
                    "title" => "characters_title",
                    "dir"=>"characters",
                    "file_name"=>"characters_file"
                  ]);

                if ($sonuc['status']) { ?>

                  <div class="alert alert-success">
                    Kayıt Başarılı
                  </div>

                <?php } else { ?>

                  <div class="alert alert-danger">
                    Kayıt Başarısız. <?php echo $sonuc['error']; ?>
                  </div>

                <?php }

              }

              ?>



               <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Resim Seç</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="file" name="characters_file" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Karakter Adı</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="characters_title" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Karakter Bilgisi</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="characters_slug" class="form-control">
                     <small>Karakter Bilgisi, Örneğin Karakter-01</small>
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Karakter İçerik</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <textarea id="editor1" class="form-control" name="characters_content"></textarea>
                   </div>
                 </div>
                </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="character_insert">Ekle</button>
                </div>

               </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

      <?php
        }
      ?>

      <?php
        if (isset($_GET['charactersUpdate'])) {
      ?>

      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Karakterleri Düzenle</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php

              if (isset($_POST['character_update'])) {

                $sonuc=$db->update("characters",$_POST,
                  [
                    "form_name"=>"character_update",
                    "slug" => "characters_slug",
                    "title" => "characters_title",
                    "columns"=>"characters_id",
                    "dir"=>"characters",
                    "file_name"=>"characters_file",
                    "file_delete"=>"delete_file"
                  ]);

                if ($sonuc['status']) { ?>

                  <div class="alert alert-success">
                    Kayıt Başarılı
                  </div>

                <?php } else { ?>

                  <div class="alert alert-danger">
                    Kayıt Başarısız. <?php echo $sonuc['error']; ?>
                  </div>

                <?php }

              }

              $sql=$db->wread("characters","characters_id",$_GET['characters_id']);
              $row=$sql->fetch(PDO::FETCH_ASSOC);

              ?>



               <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Yüklü Resim</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <img width="100" src="dimg/characters/<?php echo $row['characters_file'] ?>">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Resim Seç</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="file" name="characters_file" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Karakter Adı</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="characters_title" required="" value="<?php echo $row['characters_title'] ?>" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Karakter Bilgisi</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="characters_slug" value="<?php echo $row['characters_slug'] ?>" class="form-control">
                     <small>Bilgi yapısı örneğin Karakter-01</small>
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Karakter İçerik</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <textarea id="editor1" class="form-control" name="characters_content"><?php echo $row['characters_content'] ?></textarea>
                   </div>
                 </div>
                </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

                <input type="hidden" name="characters_id" value="<?php echo $row['characters_id'] ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row['characters_file'] ?>">

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="character_update">Düzenle</button>
                </div>

               </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

      <?php
        }
      ?>

      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Karakterler</h3>
              <div align="right">
                <a href="?charactersInsert=true"><button class="btn btn-success">Karakter Ekle</button></a>
              </div>
              <?php

              if (isset($_GET['charactersDelete'])) {

                $sonuc=$db->delete("characters","characters_id",$_GET['characters_id'],$_GET['file_delete']);

                if ($sonuc['status']) { ?>

                  <br><br>
                  <div class="alert alert-success">
                    Silme Başarılı
                  </div>

                <?php } else { ?>

                  <br><br>
                  <div class="alert alert-danger">
                    Silme Başarısız. <?php echo $sonuc['error']; ?>
                  </div>

                <?php }

              }

              ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th align="center" width="5">#</th>
                  <th>Karakter Resmi</th>
                  <th>Karakter Adı</th>
                  <th align="center" width="5"></th>
                  <th align="center" width="5"></th>
                </tr>
                </thead>
                <tbody id="sortable">

                <?php

                  $sql=$db->read("characters",[
                                 "columns_name" => "characters_must",
                                 "columns_sort" => "ASC"
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                   

                ?>

                <tr id="item-<?php echo $row['characters_id']; ?>">
                  <td><?php echo $say++; ?></td>
                  <td><img width="100" src="dimg/characters/<?php echo $row['characters_file']; ?>"></td>
                  <td class="sortable"><?php echo $row['characters_title']; ?></td>
                  <td><a href="?charactersUpdate=true&characters_id=<?php echo $row['characters_id'] ?>"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="?charactersDelete=true&characters_id=<?php echo $row['characters_id'] ?>&file_delete=<?php echo $row['characters_file'] ?>"><i class="fa fa-trash"></i></a></td>
                </tr>

                <?php } ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require_once 'footer.php'; ?>

  <script type="text/javascript">

    $(function() {
      $("#sortable").sortable({
        revert:true,
        handle:".sortable",
        stop:function(event,ui) {
          var data=$(this).sortable('serialize');
          //console.log(data);
          $.ajax({
            type:"POST",
            dataType:"json",
            data:data,
            url:"netting/order-ajax.php?characters_must=true",
            success:function(msg) {
              if (msg.islemMsj) {
                alert("Sıralama Başarılı");
              }
              else {
                alert("Sıralama Başarısız");
              }
            }
          });
        }
      });
      $("$sortable").disableSelection();
    });

  </script>
