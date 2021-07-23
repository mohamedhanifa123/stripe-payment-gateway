<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
<div class="container">  
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                
                <form action="{{route('index')}}" method="post">
                    @csrf
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row text-center">
                        <h3 class="panel-heading">Customer Details</h3>
                    </div>                    
                </div>
                           <label>Name</label>
                          
                           <input type="text" name="name" class="form-control" placeholder="Enter your name">
                          
                            <label>Email</label>
                          
                            <input type="email" name="email" class="form-control" placeholder="Enter your email">

                            
                            <label>Mobile</label>
                          
                            <input type="tel" name="mobile" class="form-control" placeholder="Enter your mobile number">
                        <button type="submit" class="btn btn-success"> Add Customer </button>
                       <!-- <a class="btn btn-success" href="{{route('stripe.payment')}}" role="button">Add Customer(Pay Now)</a> -->
      
    </form>                             
                
                
  </div>
</div>
</div>
</div>
</body>
</html>  
           

 
