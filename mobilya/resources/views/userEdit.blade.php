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

            <form action="/userupdate/{{$users[0]->musteriId}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Müşteri Adı</label>
                    <input type="text" class="form-control" name="kadi" id="name" value="{{$users[0]->kadi}}" aria-describedby="emailHelp" placeholder="enter employee name">
                </div>
                <div class="form-group">
                    <label>Müşteri Şifre</label>
                    <input type="text" class="form-control" name="sifre" id="profile" value="{{$users[0]->sifre}}" placeholder="enter employee profile">
                </div>
                <div class="form-group">
                    <label>E Posta</label>
                    <input type="text" class="form-control" name="eposta" id="profile" value="{{$users[0]->eposta}}" placeholder="enter employee profile">
                </div>

               
                

                <button type="submit" name="submit" class="btn btn-primary" style="width 50%">update data</button>
            </form>
        </div>
    </div>
  


</body>
</html>