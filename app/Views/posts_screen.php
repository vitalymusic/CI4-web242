<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    <?= $page_title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php d($posts);?>

<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       <script>
       </script>
<?= $this->endSection() ?>