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
    <h2>Adminler</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Admin Adı</th>
            <th>Admin Şifre</th>
            
           
        </tr>
        </thead>
      <tbody>
        
            @foreach($admins as $adm)
         <tr>   
            <td>{{$adm->adminAd}}</td>              
            <td>{{$adm->Adminsifre}}</td>  
       
                                                       
             </tr>
             @endforeach
        
     <tbody>
        
    </table>


</div>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Admin Adı</th>
            <th>Admin Şifre</th>
            
            
           
        </tr>
        </thead>
        <tbody>
             <form method="POST"  action="{{route('saveAdmin')}}"  enctype="multipart/form-data"> 
                @csrf
              <tr>                
                <td>
                    <input type="text" name="a_adi"   required />
                    
                </td>                                                                                            
                <td>
                    <input type="text" name="a_sifre"   required /> <button type="submit" >Ekle</button>
                    
                </td>                                                    
               
                
                   
                
                                                       
              </tr>
             
            </form>
        <tbody>
          
    </table>

    
</div>
</body>
</html>