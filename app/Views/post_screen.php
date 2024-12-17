<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    <?= $page_title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <h2><?= $post["post_name"] ?></h2>
  <img src="<?= base_url().'uploads/'.$post["post_img"]?>"  alt="post_image" width="300px">
  <p><?= $post["content"] ?></p>
  <p>Author: <?= $post["name"]?> <?= $post["surname"]?></p>
  <p>Post Date: <?= $post["date"]?></p>
  <p><a href="<?=base_url("posts")?>" class="btn btn-primary">Все новости</a></p>
<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       
<?= $this->endSection() ?>