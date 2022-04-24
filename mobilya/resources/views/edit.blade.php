<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="shaJ84-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknlLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    
    <div class="container">
        <div class="jumbotron">

            <form action="/update/{{$urunlers[0]->urunId}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Ürün Adı</label>
                    <input type="text" class="form-control" name="urunadi" id="name" value="{{$urunlers[0]->urunadi}}" aria-describedby="emailHelp" placeholder="enter employee name">
                </div>
                <div class="form-group">
                    <label>Ürün Fiyatı</label>
                    <input type="text" class="form-control" name="fiyat" id="profile" value="{{$urunlers[0]->fiyat}}" placeholder="enter employee profile">
                </div>
                <div class="form-group">
                    <label>Ürün Ayrıntısı</label>
                    <input type="text" class="form-control" name="ayrinti" id="address" value="{{$urunlers[0]->ayrinti}}" aria-describedby="emailHelp "placeholder="enter employee address">
                </div>
                <div class="form-group">
                    <label>Ürün Fotoğraf Link</label>
                    <input type="text" class="form-control" name="foto" id="foto" value="{{$urunlers[0]->foto}}" aria-describedby="emailHelp "placeholder="enter employee address">
                </div>

                <button type="submit" name="submit" class="btn btn-primary" style="width 50%">update data</button>
            </form>
        </div>
    </div>
  


</body>
</html>