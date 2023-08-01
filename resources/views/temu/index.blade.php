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

          @foreach ($janji_temu as $temu)
          <tr>
            <th>{{$temu->id}}</th>
            <th>{{$temu->nama}}</th>
            <th>{{$temu->phone}}</th>
            <th>{{$temu->email}}</th>
            <th>{{$temu->waktu}}</th>
            @if($temu->confirm =='1')
            <th> Sudah </th>
            @else
            <th> Belum </th>
            @endif
            <th>{{$temu->Catatan}}</th>
            <th>{{$temu->created_at}}</th>
          </tr>
          @endforeach
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

          @foreach ($janji_temu_besok as $temu)
          <tr>
            <th>{{$temu->id}}</th>
            <th>{{$temu->nama}}</th>
            <th>{{$temu->phone}}</th>
            <th>{{$temu->email}}</th>
            <th>{{$temu->waktu}}</th>
            @if($temu->confirm =='1')
            <th>
              <div class="form-check form-switch">
                Sudah
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              </div>
            </th>
            @else
            <th>
              <div class="form-check form-switch">
                Belum
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
              </div>

            </th>
            @endif
            <th>{{$temu->Catatan}}</th>
            <th>{{$temu->created_at}}</th>
          </tr>
          @endforeach
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

          @foreach ($janji_temu_kemarin as $temu)
          <tr>
            <th>{{$temu->id}}</th>
            <th>{{$temu->nama}}</th>
            <th>{{$temu->phone}}</th>
            <th>{{$temu->email}}</th>
            <th>{{$temu->waktu}}</th>
            @if($temu->confirm =='1')
            <th>
              Sudah
            </th>
            @else
            <th>
              Belum
            </th>
            @endif
            <th>{{$temu->Catatan}}</th>
            <th>{{$temu->created_at}}</th>
          </tr>
          @endforeach
        </table>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>