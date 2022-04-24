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
            <th>Müşteri Id</th>
            <th>Müşteri Adı</th>
            <th>Müşteri Şifresi</th>
            <th>Müşteri Eposta</th>
           
        </tr>
        </thead>
      <tbody>
        
            @foreach($users as $user)
         <tr>   
            <td>{{$user->musteriId}}</td>              
            <td>{{$user->kadi}}</td>                                                                                            
            <td>{{$user->sifre}}</td>                                                    
            <td>{{$user->eposta}}</td>
                                                       
             </tr>
             @endforeach
        
     <tbody>
        
    </table>


</div>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            
            <th>Müşteri Adı</th>
            <th>Müşteri Şifresi</th>
            <th>Müşteri Eposta </th>
            
           
        </tr>
        </thead>
        <tbody>
             <form method="POST"  action="{{route('userEkleSave')}}"  enctype="multipart/form-data"> 
                @csrf
              <tr>   
                            
                <td>
                    <input type="text" name="kadi"   required />
                    
                </td>                                                                                            
                <td>
                    <input type="text" name="sifre"   required />
                    
                </td>                                                    
                <td>
                    <input type="text" name="eposta"   required />
                    <button type="submit" >Ekle</button>
                </td> 
                                                       
              </tr>
             
            </form>
        <tbody>
          
    </table>

    
</div>
</body>
</html>