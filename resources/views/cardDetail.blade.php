    <!-- cardDetail
    ================================================== -->
    
    @if(count($rooms) > 0)
@foreach($rooms as $room)
    @if($place->place_id == $room->place_id)



<div id="row" class="row cardDetail3" data-ride="cardDetail3" style="
    float: left;
    border-top: rgba(189, 189, 189, 0.79);
    border-width: 1px;
    border-top-style: solid;
    width: 100%;
    margin-left: 0px;
    margin-right: 0px;
">
 
      <div class="col-sm-4 ptype" id="ptype" style="
    padding-left: 0px;
    padding-right: 0px;
">{{$room->room_name}}
</div>
      
     <div class="col-sm-2 on_REQUEST" id="on_REQUEST" style="
    color: orange;
    font-weight: 600;
    min-width: 140px;
    max-width: 140px;
">
@if ($room->request == 1)
    AVAILABLE
@elseif ($room->request == 2)
    ON REQUEST
    @elseif ($room->request == 3)
    SOLD OUT
@endif


</div>
      <div class="col-sm-2 DETAILS" id="DETAILS" style="
    max-width: 107px;
    color: #488ece;
"><a href="#"><span class="caret"></span> DETAILS</a></div>
      <div class="col-sm-2 cost" id="cost" style="
    min-width: 139px;
    color: black;
    font-weight: 700;
    padding-right: 0px;
">{{$price1}}
      <span class="Night" id="Night" style="
    color: lightgrey;
">USD Per Night</span></div>
      <div class="col-sm-2 REQUEST" id="REQUEST" style="
    float: right;
    padding-right: 0px;
    padding-left: 0px;
    max-width: 20px;
"><a href="

{{url('/customer/'.$room->room_id)}}


" target="_blank" style="
    float: right;
    font-weight: 700;
">REQUEST</a></div>
      <div class="col-sm-4 Promos" id="Promos" style="
    color: #488ece;
    font-weight: 600;
    font-size: 0.7em;
    padding-left: 0px;
    padding-right: 0px;
">

 @if($room->promos==1)
*Promos/Special Conditions Available 

@endif

</div>
    </div><!-- /.row -->
   <div id="cardDetailR2" class="cardDetailR2"> @include('cardDetail2')</div>
   @endif
@endforeach 
@else
<p No posts found</p>
@endif