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
      @if(session('sukses'))
      <div class="alert alert-success" role="alert"> Data Berhasil Diinput</div>
      @endif
      <div class="col-6">
        <h1>List Daftar Dokter</h1>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Dokter</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="/list_dokter/create" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                  <label for="inputNama" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                  <label for="inputNama" class="form-label">email</label>
                  <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                  <label for="inputAlamat" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                  <label for="inputPhone" class="form-label">phone</label>
                  <input type="text" name="phone" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                  <label for="inputPhone" class="form-label">foto</label>
                  <input type="text" name="foto" class="form-control" id="foto">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit changes</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="row-6">
        <table class="table">
          <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Foto</th>
          </tr>

          @foreach ($daftar_dokter as $dokter)
          <tr>
            <th>{{$dokter->id}}</th>
            <th>{{$dokter->nama}}</th>
            <th>{{$dokter->email}}</th>
            <th>{{$dokter->alamat}}</th>
            <th>{{$dokter->phone}}</th>
            <th>{{$dokter->foto}}</th>
          </tr>
          @endforeach
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Dokter
        </button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>