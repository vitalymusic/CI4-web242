<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    <?= $page_title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <h2><?= $post["post_name"] ?></h2>
  <img src="<?= $post["post_img"] ?>" alt="post_image" width="300px">
  <p><?= $post["content"] ?></p>

<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       
<?= $this->endSection() ?>