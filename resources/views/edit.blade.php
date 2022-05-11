<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel = "stylesheet" href = "style.css"> 
    <title>PELAJARAN</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="amfibi">AMFIBI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="amfibi">Home</a>
              <a class="nav-link active" aria-current="page" href="Pelajaran">PELAJARAN</a>
              <a class="nav-link" href="Kuis">KUIS</a>
            </div>
          </div>
        </div>
      </nav>

        <center>
        <br><H5>COBA SEBUTKAN BINATANG AMFIBI APA SAJA YANG KAMU INGAT DARI HALAMAN SEBELUMNYA!!</H5></center>
        <div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordered border-primary">
            <ul>
        </ul>
        <!-- membuat tabel -->
                <thead>
                <body>
                  <tr>
                    <th>NO.</th>
                    <th>JENIS</th>
                  </tr>
                </body>
            </thead>
            <tbody> 
            @foreach($Pelajaran as $hewan)
            <!-- mengambil data dari tabel amfibi lalu mengeditnya sesuai id nya -->
                 <form action="/Pelajaran/update/{{$hewan->id}}" method ="post">
                  {{csrf_field()}}
                    <tr> 
                        <td><input type=text, name="Nomor", required="required", value="{{$hewan->Nomor}}"></td>
                        <td><input type=text, name="JENIS", required="required", value="{{$hewan->JENIS}}"></td>
                        <td><input type="submit" value="Simpan Data"></td>
                        </tr>
                    @endforeach
                 </form>
              

            </tbody>
        </table>
        
    
</body>
</html>