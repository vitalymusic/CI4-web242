<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    About
    
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>Welcome to about page</h1>
    
    <?= $tableObject->generate($tableData); ?>
<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       <script>
            // alert("This is about page")
       </script>
<?= $this->endSection() ?>