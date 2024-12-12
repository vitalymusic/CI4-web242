<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    <?= $page_title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1><?=$user_data["name"]?></h1>
    <h1><?=$user_data["email"]?></h1>

<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       <script>
            alert("This is main page");
       </script>
<?= $this->endSection() ?>