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

      <div class="background">
        <center>
        <br><H5>COBA SEBUTKAN BINATANG AMFIBI APA SAJA YANG KAMU INGAT DARI HALAMAN SEBELUMNYA!!</H5></center>
      <table class="table2" align="center">
        <table border="1" cellspacing="3" cellpadding="25" align="center" width="1300">
          <ul>
            <thead>
              <body>
                <tr>
                          <td>NO.</td>
                            <td>JENIS</td>
                        </tr>
                        @foreach($amfibi as $hewan)
                <tr>
                    <td>{{$hewan->no}}</td>
                    <td>{{$hewan->jenis}}</td>
                
                    <td>
                        <a href="">Edit</a>&nbsp;&nbsp;&nbsp;
                        <a style="color:red;" href="">Hapus</a>
                    </td>
                </tr>
                @endforeach
                    </body>
                </thead>
            </ul>
        </table>

</div>
    
</body>
</html>