<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit data</title>
  </head>
  <body><br>
 

    <center><div class="container">
      <div class="row justify-content-center">
      <div class="col-8">
      <div class="card">
      <div class="card-body">
      <center><h1> Tambah Data </h1></center><br>
  <form action="/update/{{ $bukus->id }}" method="POST">
    @csrf
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Judul</span>
    <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" aria-label="Username" aria-describedby="basic-addon1" value="{{ $bukus->judul }}">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Penulis</span>
    <input type="text" name="author" class="form-control" placeholder="Masukan penulis" aria-label="Username" aria-describedby="basic-addon1" value="{{ $bukus->author }}">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Penerbit</span>
    <input type="text" name="penerbit" class="form-control" placeholder="Masukan penerbit" aria-label="Username" aria-describedby="basic-addon1" value="{{ $bukus->penerbit }}">
  </div>

  <div class="input-group">
    <span class="input-group-text">Sinopsis</span>
    <textarea name="sinopsis" class="form-control" aria-label="With textarea">{{ $bukus->sinopsis }}</textarea>
  </div><br>

  <button class="btn btn-secondary btn-sm" type="submit">Submit</a></button></div></center></div>
  </div></div></form>
    

 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>