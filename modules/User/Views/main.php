<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="<?= base_url(); ?>/dashboard/css/app.css">
  <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.js"></script>
  <style>
    [x-cloak] {
      display: none !important;
    }

    [type="checkbox"] {
      box-sizing: border-box;
      padding: 0;
    }

    .form-checkbox {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      -webkit-print-color-adjust: exact;
      color-adjust: exact;
      display: inline-block;
      vertical-align: middle;
      background-origin: border-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      flex-shrink: 0;
      color: currentColor;
      background-color: #fff;
      border-color: #e2e8f0;
      border-width: 1px;
      border-radius: 0.25rem;
      height: 1.2em;
      width: 1.2em;
    }

    .form-checkbox:checked {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
      border-color: transparent;
      background-color: currentColor;
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
  <title>Dashboard</title>
</head>

<body>
  <div class="flex bg-indigo-50">
    <?= $this->include('Modules\User\Views\Layouts\_sidebar') ?>
    <div class="ml-auto px-6 py-4 w-full h-screen overflow-auto bg-indigo-50">
      <?= $this->include('Modules\User\Views\Layouts\_header') ?>
      <?= $this->renderSection('content') ?>
    </div>
  </div>




  <script src="<?= base_url(); ?>/dashboard/js/script.js"></script>
  <script>
    data = [{
      "product": 'Sepatu',
      "sku": 'KTU-12-SED74',
      "category": "Fashion",
      "description": 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates. Quaerat magnam quisquam facilis nulla repellat quam ut quibusdam consectetur?',
      "stock": 12,
      "value": 120000,
      "date": '14 April 2022',
    }, {
      "product": 'Sepatu',
      "sku": 'KTU-12-SED74',
      "category": "Fashion",
      "description": 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates. Quaerat magnam quisquam facilis nulla repellat quam ut quibusdam consectetur?',
      "stock": 12,
      "value": 120000,
      "date": '14 April 2022',
    }, {
      "product": 'Sepatu',
      "sku": 'KTU-12-SED74',
      "category": "Fashion",
      "description": 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates. Quaerat magnam quisquam facilis nulla repellat quam ut quibusdam consectetur?',
      "stock": 12,
      "value": 120000,
      "date": '14 April 2022',
    }]


    // let data = []
    // for (let i = 1; i < 10; i++) {
    //   data.push({
    //     "product": 'Sepatu',
    //     "sku": 'KTU-12-SED74',
    //     "category": "Fashion",
    //     "description": 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates. Quaerat magnam quisquam facilis nulla repellat quam ut quibusdam consectetur?',
    //     "stock": 12,
    //     "value": 120000,
    //     "date": '14 April 2022',
    //   })
    // }
    console.log(data);
  </script>
</body>

</html>