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
        if (isset($_GET['settingsInsert'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Ayar Ekle</h3>
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

              if (isset($_POST['setting_insert'])) {
                
                $sonuc=$db->insert("settings",$_POST,
                  [
                    "form_name"=>"setting_insert",
                    "dir"=>"settings",
                    "file_name"=>"settings_file",
                    "pass"=>"settings_pass"
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
                  <label>Açıklama</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="settings_description" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Açıklama</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="settings_value" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="setting_insert">Ekle</button>
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
        if (isset($_GET['settingsUpdate'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Ayar Düzenle</h3>
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

              if (isset($_POST['setting_update'])) {
                
                $sonuc=$db->update("settings",$_POST,
                  [
                    "form_name"=>"setting_update",
                    "columns"=>"settings_id",
                    "dir"=>"settings",
                    "file_name"=>"settings_value",
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

              $sql=$db->wread("settings","settings_id",$_GET['settings_id']);
              $row=$sql->fetch(PDO::FETCH_ASSOC);

              ?>

                

               <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Açıklama</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="settings_description" readonly="" required="" value="<?php echo $row['settings_description'] ?>" class="form-control">
                   </div>
                 </div>
                </div>

                <?php

                  if ($row['settings_type']=='file') { ?>
                    
                    <div class="form-group">
                      <label>Resim Seç</label>
                     <div class="row">
                       <div class="col-xs-12">
                         <input type="file" name="settings_value" required="" class="form-control">
                       </div>
                     </div>
                    </div>

                 <?php }

                ?>

                <div class="form-group">
                  <label>Açıklama</label>
                 <div class="row">
                   <div class="col-xs-12">
                    <?php
                    if ($row['settings_type']=='text') { ?>
                      <input type="text" name="settings_value" required="" value="<?php echo $row['settings_value'] ?>" class="form-control">
                    <?php }
                    else if ($row['settings_type']=='textarea') { ?>
                      <textarea class="form-control" name="settings_value"><?php echo $row['settings_value'] ?></textarea>
                    <?php }
                    else if ($row['settings_type']=='ckeditor') { ?>
                      <textarea id="editor1" class="form-control" name="settings_value"><?php echo $row['settings_value'] ?></textarea>
                    <?php }
                    else if ($row['settings_type']=='file') { ?>
                      <a target="_blank" href=""><img width="100" src="dimg/settings/<?php echo $row['settings_value'] ?>"></a>
                    <?php }
                    ?>
                   </div>
                 </div>
                </div>

                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

                <input type="hidden" name="settings_id" value="<?php echo $row['settings_id'] ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row['settings_value'] ?>">

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="setting_update">Düzenle</button>
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
              <h3 class="box-title">Ayarlar</h3>
              <!--<div align="right">
                <a href="?settingsInsert=true"><button class="btn btn-success">Ayar Ekle</button></a>
              </div>-->
              <?php

              if (isset($_GET['settingsDelete'])) {

                $sonuc=$db->delete("settings","settings_id",$_GET['settings_id'],$_GET['file_delete']);
                
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
                  <th>Ad</th>
                  <th>İçerik</th>
                  <th>Key</th>
                  <th align="center" width="5"></th>
                  <th align="center" width="5"></th>
                </tr>
                </thead>
                <tbody id="sortable">

                <?php

                  $sql=$db->read("settings",[
                                 "columns_name" => "settings_must",
                                 "columns_sort" => "ASC"
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                ?>

                <tr id="item-<?php echo $row['settings_id']; ?>">
                  <td><?php echo $say++; ?></td>
                  <td class="sortable"><?php echo $row['settings_description']; ?></td>
                  <td><?php

                  if ($row['settings_type']=="file") { ?>
                    <img width="100" src="dimg/settings/<?php echo $row['settings_value']; ?>">
                  <?php }
                  else {
                    echo $row['settings_value'];
                  }

                  ?></td>
                  <td><?php echo $row['settings_key']; ?></td>
                  <td><a href="?settingsUpdate=true&settings_id=<?php echo $row['settings_id'] ?>"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="?settingsDelete=true&admins_id=<?php echo $row['settings_id'] ?>&file_delete=<?php echo $row['settings_value'] ?>"><i class="fa fa-trash"></i></a></td>
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
            url:"netting/order-ajax.php?settings_must=true",
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