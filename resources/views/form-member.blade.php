<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Member</title>
</head>
<body>
    <div class="container">
        <form name="new-member" id="new-member" method="post" action="{{url('/store')}}" enctype="multipart/form-data">
            @csrf
             <div class="form-group">
               <label for="name">Nama</label>
               <input type="text" name="name" id="slug-source" class="form-control" oninput="myFunction()" required="">
             </div>
             <div class="form-group">
                <label for="Nickname">Slug</label>
                <input name="slug" type="text" id="slug-target" class="form-control" required="">
              </div>
             <div class="form-group">
               <label for="Nickname">Nickname</label>
               <input name="nickname" type="text" class="form-control" required="">
             </div>
             <div class="form-group">
                <label for="NamaJapan">Nick Japan</label>
                <input name="nickname_JP" type="text" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="Birthdate">Birthdate</label>
                <input name="birthdate" type="date" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="Nama">Horoskop</label>
                <input type="text" name="horoskop" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="GolonganDarah">Golongan Darah</label>
                <input name="golongan_darah" type="text" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="TinggiBadan">Tinggi Badan</label>
                <input type="number" name="tinggi_badan" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control" required="">
              </div>
             <button type="submit" class="btn btn-primary">Submit</button>
           </form>
    </div>
    <script>
        function myFunction() {
     
            var a = document.getElementById("slug-source").value;
     
            var b = a.toLowerCase().replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');
     
            document.getElementById("slug-target").value = b;
     
            document.getElementById("slug-target-span").innerHTML = b;
        }
    </script>
</body>

</html>