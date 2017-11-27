    <!-- Card
    ================================================== -->
    
    <section id="card" class="container">

    
    <div id="row" class="row well" data-ride="card">
        <div class="col-sm-4" <div class="col-sm-4" style="
    max-width: 200px;
"><img src="card_img/p1.PNG" alt="p1.PNG" class="img-thumbnail" style="
    max-width: 100%;
"></div>
        <div class="col-sm-4">

<div class="Ctitle">Sunset Key Guest Cottages {{$places->place_name}} <br>
{{$places->street1} <span class="pike">|</span><form class="rating">
  <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</form></div>
<div class="Caddress">245 Front Street, Key West, USA </div>
<div class="btn-group">
  <button type="button" class="btn btn-secondary btn-lg dropdown-toggle cb" type="button" 
  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span>  &nbsp;Rooms / Availability </button>
</div>
        </div>
        
        <div class="col-sm-4" style="
    float: right;
">
        <div class="redBar"
    style="
    width: 120px;
    position: absolute;
    right: 4%;
"
        ><div class="progress" style="height: 10px;">
  <div class="progress-bar" role="progressbar" style="width: 100%; background-color: ORANGERED" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>  
</div></div>

  
        
            <div class=" picTag" style="
   
    float: right;
    margin-top: 24px;

">
        <img src="card_img/priceTag.PNG" alt="" class="img-responsive">
        <div class="caption" style="
    color: white; text-align: right;
">
            <p style="
    line-height: 20px;
">starting at<br>
<span style="
    font-size: medium;
">USD</span> <span style="
    font-size: x-large;
    font-weight: 600;
">593</span><br><span style="
    font-size: x-small;
">
per room/night</span><br></p>
        </div>
    </div>
        
        
        <div class="taxes"  style="
    
        text-align: right;
        color: grey;
        position: absolute;
        margin-top: 103px;
        right: 17px;
    
    ">*Taxes Not Included 
    </div>
        
        
        </div><!-- /.col-sm-4 -->
       
       
       <div id="cardDetail">
       @include('cardDetail')
       @include('cardDetail')
        </div>
        
        
 </div><!-- /.row --> 
</section><!--/ page-->
