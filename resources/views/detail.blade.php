<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border=1>
         <tr>
                 <th> id </th>
                 <th> Payment_id </th>
                 <th> Amount </th>
                 <th> Status </th>
        </tr>
        
            @foreach($payments as $payment) 
            <tr>
            <td> {{$payment->id}} </td>
            <td> {{$payment->Payment_id}} </td>
            <td> {{$payment ->Amount}} </td>
            <td> {{$payment -> status}} </td>
            </tr>
            @endforeach
            <tfoot>
             <tr>
                <th id="total" colspan="2" class="text-center">Total </th>  
                <th> {{ $payment->sum('Amount')  }}</th>
            </tr>
   </tfoot>


</table>
</body>
</html>