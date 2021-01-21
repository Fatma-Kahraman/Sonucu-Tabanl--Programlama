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
        if (isset($_GET['slidersInsert'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Slider Ekle</h3>
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

              if (isset($_POST['slider_insert'])) {
                
                $sonuc=$db->insert("sliders",$_POST,
                  [
                    "form_name"=>"slider_insert",
                    "dir"=>"sliders",
                    "file_name"=>"sliders_file"
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
                     <input type="file" name="sliders_file" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Slider Title</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="sliders_title" required="" class="form-control">
                   </div>
                 </div>
                </div>

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="slider_insert">Ekle</button>
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
        if (isset($_GET['slidersUpdate'])) {
      ?>
      
      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Slider Düzenle</h3>
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

              if (isset($_POST['slider_update'])) {
                
                $sonuc=$db->update("sliders",$_POST,
                  [
                    "form_name"=>"slider_update",
                    "columns"=>"sliders_id",
                    "dir"=>"sliders",
                    "file_name"=>"sliders_file",
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

              $sql=$db->wread("sliders","sliders_id",$_GET['sliders_id']);
              $row=$sql->fetch(PDO::FETCH_ASSOC);

              ?>

                

               <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Yüklü Resim</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <img width="100" src="dimg/sliders/<?php echo $row['sliders_file'] ?>">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Resim Seç</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="file" name="sliders_file" class="form-control">
                   </div>
                 </div>
                </div>

                <div class="form-group">
                  <label>Slider Title</label>
                 <div class="row">
                   <div class="col-xs-12">
                     <input type="text" name="sliders_title" required="" value="<?php echo $row['sliders_title'] ?>" class="form-control">
                   </div>
                 </div>
                </div>

                <input type="hidden" name="sliders_id" value="<?php echo $row['sliders_id'] ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row['sliders_file'] ?>">

                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success" name="slider_update">Düzenle</button>
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
              <h3 class="box-title">Sliderlar</h3>
              <div align="right">
                <a href="?slidersInsert=true"><button class="btn btn-success">Slider Ekle</button></a>
              </div>
              <?php

              if (isset($_GET['slidersDelete'])) {

                $sonuc=$db->delete("sliders","sliders_id",$_GET['sliders_id'],$_GET['file_delete']);
                
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
                  <th>Slider Resim</th>
                  <th>Slider Title</th>
                  <th align="center" width="5"></th>
                  <th align="center" width="5"></th>
                </tr>
                </thead>
                <tbody id="sortable">

                <?php

                  $sql=$db->read("sliders",[
                                 "columns_name" => "sliders_must",
                                 "columns_sort" => "ASC"
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                ?>

                <tr id="item-<?php echo $row['sliders_id']; ?>">
                  <td><?php echo $say++; ?></td>
                  <td><img width="100" src="dimg/sliders/<?php echo $row['sliders_file']; ?>"></td>
                  <td class="sortable"><?php echo $row['sliders_title']; ?></td>
                  <td><a href="?slidersUpdate=true&sliders_id=<?php echo $row['sliders_id'] ?>"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="?slidersDelete=true&sliders_id=<?php echo $row['sliders_id'] ?>&file_delete=<?php echo $row['sliders_file'] ?>"><i class="fa fa-trash"></i></a></td>
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
            url:"netting/order-ajax.php?sliders_must=true",
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