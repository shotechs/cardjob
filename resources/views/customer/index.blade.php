    <!-- customer
    ================================================== -->
       @extends('layout.layout')

@section('content')

    <section id="customerAll" class="container">

    
  @if(count($customers) > 0)
@foreach($customers as $customer)
    
    <div id="row" class="row well" data-ride="customerAll">


       <div class="col-sm-12" style="">

      <div style="">
email {{$customer->email}}<br>
full_name {{$customer->full_name}}<br>
booking {{$customer->booking}}<br>
fees {{$customer->fees}}<br>
taxes {{$customer->taxes}}<br>
credit {{$customer->credit}}<br>
place_name {{$customer->place_name}}<br>
room_name {{$customer->room_name}}<br>

      </div>

    

</div>


 </div><!-- /.row --> 


 
@endforeach 
@else
<p No customers found</p>
@endif
</section><!--/ page-->
@endsection