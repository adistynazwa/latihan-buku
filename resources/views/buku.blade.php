<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    @extends('main')
    @section("container")

    
    <center><h1> Daftar Buku </h1></center>

    <center><a href="/add" class="btn btn-secondary btn-sm" type="button">Tambah+</a></button><br></br></center>

  <table class="table container">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Detail</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bukus as $buku)
    <tr class="table-secondary">
      <th scope="row"></th>
      <td>{{ $buku->judul }}</td>
      <td>{{ $buku->author }}</td>
      <td>{{ $buku->penerbit }}</td>
      <td><a href="/detail/{{ $buku->id }}" class="btn btn-info">Detail</button> </td>
      <td><a href="/tampilkandata/{{ $buku->id }}" class="btn btn-success">Edit</button>
      @csrf @method("Delete")</td></form>
      <td><a href="/delete/{{ $buku->id }}" class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
  @endsection
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>