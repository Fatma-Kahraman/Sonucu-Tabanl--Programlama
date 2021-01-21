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
        if (isset($_GET['usersInsert'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Kullanıcı Ekle</h3>
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

              if (isset($_POST['user_insert'])) {
                
                $sonuc=$db->insert("users",$_POST,
                  [
                    "form_name"=>"user_insert",
                    "dir"=>"users",
                    "file_name"=>"users_file",
                    "pass"=>"users_pass"
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
                     <input type="file" name="users_file" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Ad Soyad</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="users_namesurname" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kullanıcı Mail</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="users_mail" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kullanıcı Şifre</label>
                   <div class="row">
                     <div class="col-xs-12">
                       <input type="password" name="users_pass" required="" class="form-control">
                     </div>
                   </div>
                </div>

                <div class="form-group">
                 <label>Kullanıcı Durum</label>
                  <div class="row">
                   <div class="col-xs-12">
                     <select class="form-control" name="users_status">
                       <option value="1">Aktif</option>
                       <option value="0">Pasif</option>
                     </select>
                   </div>
                 </div>
                </div>

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="user_insert">Ekle</button>
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
        if (isset($_GET['usersUpdate'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Kullanıcı Düzenle</h3>
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

              if (isset($_POST['user_update'])) {
                
                $sonuc=$db->update("users",$_POST,
                  [
                    "form_name"=>"user_update",
                    "columns"=>"users_id",
                    "dir"=>"users",
                    "file_name"=>"users_file",
                    "file_delete"=>"delete_file",
                    "pass"=>"users_pass"
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

              $sql=$db->wread("users","users_id",$_GET['users_id']);
              $row=$sql->fetch(PDO::FETCH_ASSOC);

              ?>

                

               <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Yüklü Resim</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <img width="100" src="dimg/users/<?php echo $row['users_file'] ?>">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Resim Seç</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="file" name="users_file" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Ad Soyad</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="users_namesurname" required="" value="<?php echo $row['users_namesurname'] ?>" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kullanıcı Mail</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="users_mail" required="" value="<?php echo $row['users_mail'] ?>" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kullanıcı Şifre</label>
                   <div class="row">
                     <div class="col-xs-12">
                       <input type="password" name="users_pass" class="form-control">
                     </div>
                   </div>
                </div>

                <div class="form-group">
                 <label>Kullanıcı Durum</label>
                  <div class="row">
                   <div class="col-xs-12">
                     <select class="form-control" name="users_status">
                       <option <?php echo $row['users_status']==1 ? 'selected' : '' ?> value="1">Aktif</option>
                       <option <?php echo $row['users_status']==0 ? 'selected' : '' ?> value="0">Pasif</option>
                     </select>
                   </div>
                 </div>
                </div>

                <input type="hidden" name="users_id" value="<?php echo $row['users_id'] ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row['users_file'] ?>">

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="user_update">Düzenle</button>
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
              <h3 class="box-title">Kullanıcılar</h3>
              <div align="right">
                <a href="?usersInsert=true"><button class="btn btn-success">Kullanıcı Ekle</button></a>
              </div>
              <?php

              if (isset($_GET['usersDelete'])) {

                $sonuc=$db->delete("users","users_id",$_GET['users_id'],$_GET['file_delete']);
                
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
                  <th>Ad Soyad</th>
                  <th>Mail Adresi</th>
                  <th>Durum</th>
                  <th align="center" width="5"></th>
                  <th align="center" width="5"></th>
                </tr>
                </thead>
                <tbody id="sortable">

                <?php

                  $sql=$db->read("users",[
                                 "columns_name" => "users_must",
                                 "columns_sort" => "ASC"
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                ?>

                <tr id="item-<?php echo $row['users_id']; ?>">
                  <td><?php echo $say++; ?></td>
                  <td class="sortable"><?php echo $row['users_namesurname']; ?></td>
                  <td><?php echo $row['users_mail']; ?></td>
                  <td><?php
                    if ($row['users_status']==0) {
                      echo "Pasif";
                    } else if ($row['users_status']==1) {
                      echo "Aktif";
                    }
                  ?></td>
                  <td><a href="?usersUpdate=true&users_id=<?php echo $row['users_id'] ?>"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="?usersDelete=true&users_id=<?php echo $row['users_id'] ?>&file_delete=<?php echo $row['users_file'] ?>"><i class="fa fa-trash"></i></a></td>
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
            url:"netting/order-ajax.php?users_must=true",
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