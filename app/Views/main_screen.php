<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    This is main page
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>Welcome to main page</h1>

<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       <script>
            alert("This is main page";)
       </script>
<?= $this->endSection() ?>