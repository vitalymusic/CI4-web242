<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    <?= $page_title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container d-flex justify-content-around">
        <?php foreach($posts as $post):?>
            <div class="card" style="width: 18rem;">
                <img src="<?=$post["post_image"]?>" class="card-img-top" alt="post<?=$post["id"]?>_image">
                <div class="card-body">
                    <h5 class="card-title"><?=$post["post_title"]?></h5>
                    <p class="card-text"><?=$post["post_content"]?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>


<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       <script>
       </script>
<?= $this->endSection() ?>