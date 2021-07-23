@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome To Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h3> {{ __('Customer Card Details') }} </h3>
            <table class="table table-striped" border=1>
            <thead class="table-dark">
                 <tr>
                 <th> id </th>
                 <th> Payment_id </th>
                 <th> Amount </th>
                 <th> Status </th>
                 
                </tr>
            </thead>
        <tbody>
            @foreach($payments as $payment) 
            <tr>
            
                <td> {{$payment->id}} </td>
                <td> {{$payment->Payment_id}} </td>
                <td> {{$payment ->Amount}} </td>
                <td> {{$payment -> status}} </td>
               
         
            </tr>

          @endforeach
            
           
</tbody>
          
            <tfoot>
             <tr>
                <th id="total" colspan="2" class="text-center">Total </th>  
                <th> {{ $payment->sum('Amount')  }}</th>
            </tr>
   </tfoot>



</table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection