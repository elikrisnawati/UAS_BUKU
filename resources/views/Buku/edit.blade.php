<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <h4 class="text-center">Form Edit Data Buku</h4>
  
    <form action="{{route('buku.update',$buku->id)}} " method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="container mt-3">

    <div class="form-group">
      <label for="exampleInputEmail1" class="font-weight-bold">Judul Buku</label>
      <input type="text" name="judulBuku" class="form-control" value="{{$buku->judulBuku}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul Buku">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="font-weight-bold">Penulis</label>
      <input type="text" name="penulis" class="form-control" value="{{$buku->penulis}}" id="exampleInputPassword1" placeholder="Penulis">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="font-weight-bold">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" value="{{$buku->penerbit}}" id="exampleInputPassword1" placeholder="Penerbit">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="font-weight-bold">Gambar</label>
        <input type="file" name="gambar" class="form-control" value="{{$buku->gambar}}" id="exampleInputPassword1" placeholder="Masukkan Gambar">
      </div>
      <div class="form-group">
      <img src="{{$buku -> gambar}}" height="80px" width="100px" alt="" srcset="">
      </div>
  
    <button type="submit" class="btn btn-warning" >Edit</button>
  </form>
</div>
</body>
</html>