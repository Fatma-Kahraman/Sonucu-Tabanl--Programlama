<?php
  require_once 'header.php';
  $sql=$db->wread("abouts","abouts_slug",$_GET['abouts_slug']);
  $row=$sql->fetch(PDO::FETCH_ASSOC);
?>
  <style type="text/css">
    .actives {
  font-weight: bold;
}
  </style>
  <!-- Page Content -->
  <div class="container">
    <ol class="breadcrumb mt-4">
      <li class="breadcrumb-item">
        <a href="index.php">Anasayfa</a>
      </li>
      <li class="breadcrumb-item active">Kurumsal</li>
    </ol>
    <div class="row">
      <div class="col-lg-9 mb-4">
        <h2><?php echo $row['abouts_title']; ?></h2>
        <p><?php echo $row['abouts_content']; ?></p>
      </div>
      <div class="col-lg-3 mb-4">
        <div class="list-group">
                <?php
                  $sql=$db->read("abouts",[
                                 "columns_name" => "abouts_must",
                                 "columns_sort" => "ASC"
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                ?>
          <a href="kurumsal-<?php echo $row['abouts_slug']; ?>" class="list-group-item <?php echo $_GET['abouts_slug']==$row['abouts_slug'] ? 'actives' :'' ?>"><?php echo $row['abouts_title']; ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php require_once 'footer.php'; ?>