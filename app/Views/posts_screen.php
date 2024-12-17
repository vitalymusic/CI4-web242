<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    <?= $page_title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container d-flex justify-content-around">
        <?php foreach($posts as $post):?>
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url().'uploads/'.$post["post_img"]?>" class="card-img-top" alt="post<?=$post["id"]?>_image">
                <div class="card-body">
                    <h5 class="card-title"><?=$post["post_name"]?></h5>
                    <p class="card-text"><?=$post["content"]?></p>
                    <a href="<?=base_url("post/{$post['id']}")?>" class="btn btn-primary">Читать новость</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>


<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       <script>
       </script>
<?= $this->endSection() ?>