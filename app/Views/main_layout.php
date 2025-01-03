<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?=base_url() .'/style.css' ?>">

    <script src="<?=base_url() .'/main.js' ?>"></script>

    <title><?= $this->renderSection('page_title', true) ?></title>
</head>
<body>
   <?php include "components/navigation.php" ?>

    <div class="container">
        <h1>
          <?= $this->renderSection('page_title', true) ?>
        </h1>
        <p>
          <?= $this->renderSection('content', true) ?></p>
    </div>
    
    <?= $this->renderSection('javascript', true) ?>
</body>
</html>