<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="<?= base_url(); ?>/css/app.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
  <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.js"></script>
  <title><?= $title; ?></title>
</head>

<body>
  <div class="flex bg-indigo-50">
    <?= $this->include('Modules\Dashboard\Views\Layouts\_sidebar') ?>
    <div class="ml-auto px-6 py-4 w-full h-screen overflow-auto bg-indigo-50">
      <?= $this->include('Modules\Dashboard\Views\Layouts\_header') ?>
      <?= $this->renderSection('content') ?>
    </div>
  </div>




  <script src="<?= base_url(); ?>/js/datatable.js"></script>
  <script src="<?= base_url(); ?>/js/script.js"></script>
  <script src="<?= base_url(); ?>/ckeditor-5/build/ckeditor.js"></script>
  <script>
    ClassicEditor.create(document.querySelector("#editor"))
      .then((editor) => {
        // console.log(editor);
      })
      .catch((error) => {
        // console.error(error);
      });
  </script>
</body>

</html>