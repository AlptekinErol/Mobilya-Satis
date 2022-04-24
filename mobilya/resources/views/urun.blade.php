<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table id="raportablo2">
        <thead> 
            <tr>
                <th>ürün adı</th>
                <th>fiyatı</th>
                <th>ayrıntı</th>
                
                
            
            </tr>
        </thead>
        <tbody>

            @foreach($urunlers as $ur)
            <tr>
               
                <td>{{$ur->ayrinti}}</td>
                <td>{{$ur->fiyat}}</td>
                <td>{{$ur->urunadi}}</td> 
                
            </tr>
           @endforeach
            

        </tbody>
    </table> 
</body>
</html>