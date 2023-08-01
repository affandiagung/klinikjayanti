<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Daftar Dokter</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Booking Today</h1>
      </div>
      <div class="row-6">
        <table class="table">
          <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Janji Temu</th>
            <th>Sudah Di konfirmasi</th>
            <th>Catatan</th>
            <th>Request ON</th>
          </tr>

          <?php $__currentLoopData = $janji_temu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th><?php echo e($temu->id); ?></th>
            <th><?php echo e($temu->nama); ?></th>
            <th><?php echo e($temu->phone); ?></th>
            <th><?php echo e($temu->email); ?></th>
            <th><?php echo e($temu->waktu); ?></th>
            <?php if($temu->confirm =='1'): ?>
            <th> Sudah </th>
            <?php else: ?>
            <th> Belum </th>
            <?php endif; ?>
            <th><?php echo e($temu->Catatan); ?></th>
            <th><?php echo e($temu->created_at); ?></th>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Booking Tommorow</h1>
      </div>
      <div class="row-6">
        <table class="table">
          <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Janji Temu</th>
            <th>Sudah Di konfirmasi</th>
            <th>Catatan</th>
            <th>Request ON</th>
          </tr>

          <?php $__currentLoopData = $janji_temu_besok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th><?php echo e($temu->id); ?></th>
            <th><?php echo e($temu->nama); ?></th>
            <th><?php echo e($temu->phone); ?></th>
            <th><?php echo e($temu->email); ?></th>
            <th><?php echo e($temu->waktu); ?></th>
            <?php if($temu->confirm =='1'): ?>
            <th>
              <div class="form-check form-switch">
                Sudah
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              </div>
            </th>
            <?php else: ?>
            <th>
              <div class="form-check form-switch">
                Belum
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
              </div>

            </th>
            <?php endif; ?>
            <th><?php echo e($temu->Catatan); ?></th>
            <th><?php echo e($temu->created_at); ?></th>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Booking Yesterday</h1>
      </div>
      <div class="row-6">
        <table class="table">
          <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Janji Temu</th>
            <th>Sudah Di konfirmasi</th>
            <th>Catatan</th>
            <th>Request ON</th>
          </tr>

          <?php $__currentLoopData = $janji_temu_kemarin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th><?php echo e($temu->id); ?></th>
            <th><?php echo e($temu->nama); ?></th>
            <th><?php echo e($temu->phone); ?></th>
            <th><?php echo e($temu->email); ?></th>
            <th><?php echo e($temu->waktu); ?></th>
            <?php if($temu->confirm =='1'): ?>
            <th>
              Sudah
            </th>
            <?php else: ?>
            <th>
              Belum
            </th>
            <?php endif; ?>
            <th><?php echo e($temu->Catatan); ?></th>
            <th><?php echo e($temu->created_at); ?></th>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH E:\Laravel\DokterGigi\resources\views/temu/index.blade.php ENDPATH**/ ?>