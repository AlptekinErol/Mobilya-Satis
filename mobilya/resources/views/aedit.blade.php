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

            <form action="/aupdate/{{$admins[0]->adminid}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Admin Adı</label>
                    <input type="text" class="form-control" name="adminAd" id="name" value="{{$admins[0]->adminAd}}" aria-describedby="emailHelp" placeholder="enter employee name">
                </div>
                <div class="form-group">
                    <label>Admin Şifre</label>
                    <input type="text" class="form-control" name="Adminsifre" id="profile" value="{{$admins[0]->Adminsifre}}" placeholder="enter employee profile">
                </div>

               
                

                <button type="submit" name="submit" class="btn btn-primary" style="width 50%">update data</button>
            </form>
        </div>
    </div>
  


</body>
</html>