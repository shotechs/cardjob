    <!-- customer
    ================================================== -->
       @extends('layout.layout')

@section('content')

    <section id="customer" class="container">

    
    <div id="row" class="row well" data-ride="customer">
       <div class="col-sm-12" style="
">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<h1>Request</h1>
{{ Form::open(['url' => 'customer/submit/'.$id]) }}
<div class="form-group">
{{Form::label('name', 'Name')}}
{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
</div>
<div class="form-group">
{{Form::label('email', 'E-Mail Address') }}
{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
</div>

<div class="form-group">
{{Form::label('amount', 'Amount') }}
{{Form::number('amount', $new_Total, ['class' => 'form-control', 'readonly' => 'true'])}}
</div>


<div class="form-group">
{{Form::label('taxes', 'taxes') }}
{{Form::number('taxes', $new_Taxes, ['class' => 'form-control', 'readonly' => 'true' ])}}
</div>

<div class="form-group">
{{Form::label('fees', 'fees') }}
{{Form::number('fees', $room->fees, ['class' => 'form-control','readonly' => 'true' ])}}
</div>


<div class="form-group">
{{Form::label('creditcard', 'creditcard') }}
{{Form::number('creditcard', '', ['class' => 'form-control'])}}
</div>


<div class="form-group">
{{Form:: submit('Submit', ['class'=> 'btn btn-primary'])}}
</div>
{{ Form::close() }}

</div>
        
        
 </div><!-- /.row --> 
</section><!--/ page-->
@endsection