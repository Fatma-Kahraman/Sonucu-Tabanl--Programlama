<?php require_once 'header.php'; ?>

  <!-- Sayfa içeriği-->
  <div class="container">

    <!-- Sayfa Başlığı -->
    <h1 class="mt-4 mb-3"> Karakterler
      <small>Sayfamız</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Anasayfa</a>
      </li>
      <li class="breadcrumb-item active">Karakterler</li>
    </ol>

                <?php

                  $sql=$db->read("characters",[
                                 "columns_name" => "characters_must",
                                 "columns_sort" => "ASC"
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {

                ?>

    <!-- character yazısı -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="character-<?php echo $row['characters_slug']; ?>">
              <img class="img-fluid rounded" src="admin/dimg/characters/<?php echo $row['characters_file']; ?>" alt="<?php echo $row['characters_title']; ?>">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title"><?php echo $row['characters_title']; ?></h2>
            <p class="card-text"><?php echo mb_substr($row['characters_content'], 0,500)."..."; ?></p>
            <a href="character-<?php echo $row['characters_slug']; ?>" class="btn btn-primary">İncele &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <?php

          echo $db->tDate($row['characters_time'],["date_time"=>TRUE]);

        ?>
      </div>
    </div>

  <?php } ?>


  </div>
  <!-- /.container -->

<?php require_once 'footer.php'; ?>