<?php

  require_once 'header.php';
  $sql=$db->wread("characters","characters_slug",$_GET['characters_slug']);
  $row=$sql->fetch(PDO::FETCH_ASSOC);

?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?php echo $row['characters_title']; ?></h1>

    <!--<ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">character Home 2</li>
    </ol>-->

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="admin/dimg/characters/<?php echo $row['characters_file']; ?>" alt="<?php echo $row['characters_title']; ?>">

        <hr>

        <!-- Date/Time -->
        <p><?php

          echo $db->tDate($row['characters_time'],["date_time"=>TRUE]);

        ?></p>

        <hr>

        <!-- Post Content -->
        <div align="justify">
          <p class="lead"><?php echo $row['characters_content']; ?></p>
        </div>

        <hr>

      </div>



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php require_once 'footer.php'; ?>
