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
    <h2>Müşteriler</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Müşteriler Id</th>
            <th>Müşteriler Adı</th>
            <th>Müşteriler Şifre</th>
            <th>Müşteriler Eposta</th>
            
        </tr>
        </thead>
      <tbody>
        
            @foreach($users as $user)
         <tr>   
            <td>{{$user->musteriId}}</td>              
            <td>{{$user->kadi}}</td>                                                                                            
            <td>{{$user->sifre}}</td>     
            <td>{{$user->eposta}}</td>                                                
          
            <td>
                <a href="useredit/{{$user->musteriId}}" class="btn btn-success">Güncelle</a>
            </td>

                                                       
         </tr>
             @endforeach
        
     <tbody>
        
    </table>


</div>
</body>
</html>