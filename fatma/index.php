<?php
  require_once 'header.php';
  require_once 'slider.php';
?>
  <div class="container">
    <h2 class="mt-4">Karakterler</h2>
    <div class="row mt-4">
                <?php

                  $sql=$db->read("characters",[
                                 "columns_name" => "characters_must",
                                 "columns_sort" => "DESC",
                                 "limit" => 6
                               ]);
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="character-<?php echo $row['characters_slug']; ?>"><img class="card-img-top" src="admin/dimg/characters/<?php echo $row['characters_file']; ?>" alt="<?php echo $row['characters_title']; ?>"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="character-<?php echo $row['characters_slug']; ?>"><?php echo $row['characters_title']; ?></a>
            </h4>
            <p class="card-text"><?php echo mb_substr($row['characters_content'], 0,200)."..."; ?></p>
            <a href="character-<?php echo $row['characters_slug']; ?>" class="btn btn-primary">İncele &rarr;</a>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
          </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="setting/dimg/settings/<?php //echo $settings['home_01_file']; ?>" alt="">
      </div>
    </div>
      </div>
<?php require_once 'footer.php'; ?>
