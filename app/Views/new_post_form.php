<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>
    New Post
    
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        <form action="<?=base_url('save_post')?>" method="POST" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <input type="text" class="form-control" id=""  placeholder="Post Name" name="post_name">
        </div>
        <div class="form-group mb-3">
            <textarea class="form-control" id=""  name="content" placeholder="Post content"></textarea>
        </div>
        <div class="form-group mb-3">
            <input type="file" class="form-control" id="" name="content" placeholder="Post image" name="post_img">
        </div>

        <input type="hidden" name="user_id" value="1">
        <div class="form-group mb-3">
            <input type="submit" value="Save post" class="btn btn-danger">
        </div>

        </form>
<?= $this->endSection() ?>




<?= $this->section('javascript') ?>
       <script>
            // alert("This is about page")
       </script>
<?= $this->endSection() ?>