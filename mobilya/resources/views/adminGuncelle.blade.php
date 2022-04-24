<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h2>Ürünler</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Admin Id</th>
            <th>Admin Adı</th>
            <th>Admin Şifre</th>
            
        </tr>
        </thead>
      <tbody>
        
            @foreach($admins as $adm)
         <tr>   
            <td>{{$adm->adminid}}</td>              
            <td>{{$adm->adminAd}}</td>                                                                                            
            <td>{{$adm->Adminsifre}}</td>                                                    
          
            <td>
                <a href="aedit/{{$adm->adminid}}" class="btn btn-success">Güncelle</a>
            </td>

                                                       
         </tr>
             @endforeach
        
     <tbody>
        
    </table>


</div>
</body>
</html>