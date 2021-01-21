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
        if (isset($_GET['aboutsInsert'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Kurumsal Sayfa Ekle</h3>
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

              if (isset($_POST['about_insert'])) {
                
                $sonuc=$db->insert("abouts",$_POST,
                  [
                    "form_name"=>"about_insert",
                    "slug" => "abouts_slug",
                    "title" => "abouts_title"
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
                  <label>Kurumsal Sayfa Title</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="abouts_title" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kurumsal Sayfa Slug</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="abouts_slug" class="form-control">
                     <small>Slug yapısı örneği abouts-01</small>
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kurumsal Sayfa İçerik</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <textarea id="editor1" class="form-control" name="abouts_content"></textarea>
                   </div>
                 </div>
                </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="about_insert">Ekle</button>
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
        if (isset($_GET['aboutsUpdate'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Kurumsal Sayfa Düzenle</h3>
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

              if (isset($_POST['about_update'])) {
                
                $sonuc=$db->update("abouts",$_POST,
                  [
                    "form_name"=>"about_update",
                    "slug" => "abouts_slug",
                    "title" => "abouts_title",
                    "columns"=>"abouts_id"
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

              $sql=$db->wread("abouts","abouts_id",$_GET['abouts_id']);
              $row=$sql->fetch(PDO::FETCH_ASSOC);

              ?>

                

               <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Kurumsal Sayfa Title</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="abouts_title" required="" value="<?php echo $row['abouts_title'] ?>" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kurumsal Sayfa Slug</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="abouts_slug" value="<?php echo $row['abouts_slug'] ?>" class="form-control">
                     <small>Slug yapısı örneği abouts-01</small>
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kurumsal Sayfa İçerik</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <textarea id="editor1" class="form-control" name="abouts_content"><?php echo $row['abouts_content'] ?></textarea>
                   </div>
                 </div>
                </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

                <input type="hidden" name="abouts_id" value="<?php echo $row['abouts_id'] ?>">

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="about_update">Düzenle</button>
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
              <h3 class="box-title">Kurumsal Sayfalar</h3>
              <div align="right">
                <a href="?aboutsInsert=true"><button class="btn btn-success">Kurumsal Sayfa Ekle</button></a>
              </div>
              <?php

              if (isset($_GET['aboutsDelete'])) {

                $sonuc=$db->delete("abouts","abouts_id",$_GET['abouts_id']);
                
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
                  <th>Kurumsal Sayfa Title</th>
                  <th align="center" width="5"></th>
                  <th align="center" width="5"></th>
                </tr>
                </thead>
                <tbody id="sortable">

                <?php

                  $sql=$db->read("abouts",[
                                 "columns_name" => "abouts_must",
                                 "columns_sort" => "ASC"
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                ?>

                <tr id="item-<?php echo $row['abouts_id']; ?>">
                  <td><?php echo $say++; ?></td>
                  <td class="sortable"><?php echo $row['abouts_title']; ?></td>
                  <td><a href="?aboutsUpdate=true&abouts_id=<?php echo $row['abouts_id'] ?>"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="?aboutsDelete=true&abouts_id=<?php echo $row['abouts_id'] ?>"><i class="fa fa-trash"></i></a></td>
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
            url:"netting/order-ajax.php?abouts_must=true",
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