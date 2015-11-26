<!DOCTYPE html>
<html>
    <head>
        <meta chaset="UTF-8">
        <title>Laravel</title>
    </head>
    <body>
        

        Form - {{$firstname}} {{$lastname}}<br> 
        Telephone - {{$telephone}}<br> 
        Cellphone - {{$cellphone}} <br> 
        Company - {{$company}} <br> 
        Address - {{$address}}<br> 
        Email - {{$email}}<br> 
        Message - bla
        Address - {{$address}}<br>

        <ul>
            @foreach($items as $item)
                <li>Name:{{$item->name}}</li>
                <li>Price:{{$item->price}}</li>
                <li>Quantity:{{$item->quantity}}</li>
                <li>Size:{{$item->size}}</li>
            @endforeach
        </ul>
 

        
   


    </body>
</html>
