    <!-- customer search
    ================================================== -->
       @extends('layout.layout')

@section('content')

    <section id="search" class="search">

    <div id="row" class="row well" data-ride="search">


       <div class="col-sm-12" style="">


  <table class="table table-bordered table-hover" >
            <thead>
                <th></th>
            </thead>
            <tbody>
                @foreach($searches as $search)
                <tr>
                    <td>{{ $search->search_word }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

</div>


 </div><!-- /.row --> 


</section><!--/ page-->
@endsection