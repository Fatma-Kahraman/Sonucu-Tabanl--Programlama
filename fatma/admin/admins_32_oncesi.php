<?php

  require_once 'header.php';
  require_once 'sidebar.php';

?>
  

  <!-- Sayfa içeriği içerir -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <?php
        if (isset($_GET['adminsInsert'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Yönetici Ekle</h3>
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

              if (isset($_POST['admin_insert'])) {
                
                $sonuc=$db->adminInsert($_POST['admins_namesurname'],$_POST['admins_username'],$_POST['admins_pass'],$_POST['admins_status']);

                if ($sonuc['status']) { ?>
                  
                  <div class="alert alert-success">
                    Kayıt Başarılı
                  </div>

                <?php } else { ?>

                  <div class="alert alert-danger">
                    Kayıt Başarısız
                  </div>

                <?php }

              }

              ?>

                

               <form method="POST">
                <div class="form-group">
                  <label>Ad Soyad</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="admins_namesurname" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kullanıcı Adı</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="admins_username" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Kullanıcı Şifre</label>
                   <div class="row">
                     <div class="col-xs-12">
                       <input type="password" name="admins_pass" required="" class="form-control">
                     </div>
                   </div>
                </div>

                <div class="form-group">
                 <label>Kullanıcı Durum</label>
                  <div class="row">
                   <div class="col-xs-12">
                     <select class="form-control" name="admins_status">
                       <option value="1">Aktif</option>
                       <option value="0">Pasif</option>
                     </select>
                   </div>
                 </div>
                </div>

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="admin_insert">Ekle</button>
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
              <h3 class="box-title">Yöneticiler</h3>
              <div align="right">
                <a href="?adminsInsert=true"><button class="btn btn-success">Yönetici Ekle</button></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th align="center" width="5">#</th>
                  <th>Kullanıcı Adı</th>
                  <th>Ad Soyad</th>
                  <th>Durum</th>
                  <th align="center" width="5"></th>
                  <th align="center" width="5"></th>
                </tr>
                </thead>
                <tbody>

                <?php

                  $sql=$db->read("admins");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                ?>

                <tr>
                  <td><?php echo $say++; ?></td>
                  <td><?php echo $row['admins_username']; ?></td>
                  <td><?php echo $row['admins_namesurname']; ?></td>
                  <td><?php
                    if ($row['admins_status']==0) {
                      echo "Pasif";
                    } else if ($row['admins_status']==1) {
                      echo "Aktif";
                    }
                  ?></td>
                  <td><i class="fa fa-pencil"></i></td>
                  <td><i class="fa fa-trash"></i></td>
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