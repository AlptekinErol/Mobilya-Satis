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
           
        </tr>
        </thead>
      <tbody>
        
            @foreach($urunlers as $ur)
         <tr>   
            <td>{{$ur->urunId}}</td>              
            <td>{{$ur->urunadi}}</td>                                                                                            
            <td>{{$ur->fiyat}}</td>                                                    
            <td>{{$ur->ayrinti}}</td>
                                                       
             </tr>
             @endforeach
        
     <tbody>
        
    </table>


</div>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Ürün Id</th>
            <th>Ürün Adı</th>
            <th>Ürün Fiyatı</th>
            <th>Ürün Detayı </th>
            
           
        </tr>
        </thead>
        <tbody>
             <form method="POST"  action="{{route('urunEkleSave')}}"  enctype="multipart/form-data"> 
                @csrf
              <tr>   
                <td>
                    
                </td>              
                <td>
                    <input type="text" name="urunadi"   required />
                    
                </td>                                                                                            
                <td>
                    <input type="text" name="fiyat"   required />
                    
                </td>                                                    
                <td>
                    <input type="text" name="ayrinti"   required />
                    <input type="file" class="form__input" name="resim"  required>
                    <button type="submit" >Ekle</button>
                </td> 
                                                       
              </tr>
             
            </form>
        <tbody>
          
    </table>

    
</div>
</body>
</html>