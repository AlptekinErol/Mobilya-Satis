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
    <h2>Sepetim</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Sepet Id</th>
            <th>Ürün Adı</th>
            
           
        </tr>
        </thead>
      <tbody>
        
            @foreach($sepetims as $spt)
         <tr>   
            <td>{{$spt->sepetId}}</td>              
            <td>{{$spt->urunadi}}</td>                                                                                            
                                                     
         </tr>
             @endforeach
        
     <tbody>
        
    </table>


</div>
</body>
</html>