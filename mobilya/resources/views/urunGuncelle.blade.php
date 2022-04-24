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
            <th>Ürün Id</th>
            <th>Ürün Adı</th>
            <th>Ürün Fiyatı</th>
            <th>Ürün Detayı</th>
            <th>Ürün Foto Link</th>
           
        </tr>
        </thead>
      <tbody>
        
            @foreach($urunlers as $ur)
         <tr>   
            <td>{{$ur->urunId}}</td>              
            <td>{{$ur->urunadi}}</td>                                                                                            
            <td>{{$ur->fiyat}}</td>                                                    
            <td>{{$ur->ayrinti}}</td>
            <td>{{$ur->foto}}</td>
            <td>
                <a href="edit/{{$ur->urunId}}" class="btn btn-success">Güncelle</a>
            </td>

                                                       
         </tr>
             @endforeach
        
     <tbody>
        
    </table>


</div>
</body>
</html>