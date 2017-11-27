    <!-- cardDetail
    ================================================== -->
    
    
  <div id="row" class="row cardDetail2" data-ride="cardDetail2" style="">
  <div class="col-sm-4 meta1" id="meta1" style="
    float: left;
">
   @php
$tax_list  = $room->tax_list;
$pieces = explode(',',$tax_list);
@endphp
@foreach($pieces as $piece)

<span class="badge badge-secondary" style="    border-radius: 2px;">{{$piece}}</span>
@endforeach 

</span> 

</div>

 <div class="col-sm-6 meta2" id="meta2" style="
    float: left;
">

@if ($room->p_pics == 1)
    <img name="" src="card_img/perPic.PNG" alt=""><img name="" src="card_img/perPic.PNG" alt="">
@elseif ($room->p_pics == 2)
    <img name="" src="card_img/perPic.PNG" alt=""><img name="" src="card_img/perPic.PNG" alt="">
    @elseif ($room->p_pics == 3)
    <img name="" src="card_img/perPic.PNG" alt=""><img name="" src="card_img/perPic.PNG" alt=""><img name="" src="card_img/perPic.PNG" alt="">
@endif


</div>


    </div><!-- /.row -->
    
    
    <div id="row" class="row cardDetail3" data-ride="cardDetail3" style="">
  <div class="col-sm-4 meta1" id="meta1" style="
    float: left;
    font-size: 12px;
    margin-left: 9px;
    text-align: center;
    max-width: 122px;
">
    <div id="date" class="date" style="
    border-bottom: 2px solid lightblue;
"> 
   @php
 $mysqltime = date ("D\, M j", strtotime($room->date_AVAILABLE)); 

echo $mysqltime;



@endphp
</div>
    <div id="cost" class="cost" style="
    color: orange;
    font-weight: 600;
">{{$price1}}
      <span style="
    color: lightgray;
">USD</span>
    </div>
  </div> 
    </div><!-- /.row -->
    
    
        <div id="row" class="row cardDetail4" data-ride="cardDetail4" style="">

  <div class="col-sm-6 meta4" id="meta4" style="
     float: left;
    font-size: 12px;
    margin-left: 9px;
    line-height: 13px;
">
    <strong>&nbsp;&nbsp;Conditions and Offers:</strong><br>
• {{$room->conditions}}<br>
<br>
<strong>&nbsp;&nbsp;Cancellation Policy:</strong><br><span style="
    color: red;
">
• {{$room->cancellation}}</span>
     
  </div> 
  
  
  <div class="col-sm-4 meta5" id="meta5" style="
    font-size: 12px;
    margin-right: 15px;
    float: right;
    text-align: right;
min-width: 215px;"

">
    <div id="Price" class="Price" style=""> 
       <span class="" style="
        position: absolute;
    right: 100px;
}
">
Price: </span><span style="
"> {{$room->price}}</span>
<span style="
    color: lightgray;
"> USD</span></span>

 </div>
 
    <div id="Tax" class="Tax" style="">   
      <span class="" style="
        position: absolute;
    right: 100px;
}
">
Taxes 14%: 
</span>





<span class="" style="">
   @php
$new_Taxes = ($room->taxes / 100) * $room->price;
$new_Taxes =  round($new_Taxes, 2);  
@endphp
{{$new_Taxes}}
<span style="
    color: lightgray;
">USD</span>

 </span>
 
 </div>


    <div id="Fees" class="Fees" style=""> 
       <span class="" style="
        position: absolute;
    right: 100px;
    min-witdh: 50px;
}
">
Fees: 0.00 p/nt </span> <span class="" style="">{{$room->fees}} <span style="
    color: lightgray;
">USD</span> </span>

 </div>
 
    <div id="Total" class="Total" style="">        <span class="" style="
        position: absolute;
    right: 100px;
}
">
<strong>Total: </strong> </span>

 <span class="" style="">
<strong>


  @php
$new_Total = $room->price + $room->fees+ $new_Taxes;
$new_Total =  round($new_Total, 2); 
@endphp
{{$new_Total}}

</strong> <span style="
    color: lightgray;
">USD</span> </div>
 

  </div> 
  
    </div><!-- /.row -->
    