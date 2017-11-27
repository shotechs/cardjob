    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
   <script src="js/docs.min.js">
    </script>  
    
    <script src="js/scroll.js">
    </script>     
<script>
$(document).ready(function(){

  $(".cardDetail").hide();
  $(".cardDetailR2").hide();

  $(".cb").click(function(){


     var index2 = $( ".cb" ).index(this);
var l2 = ":eq("+index2+")";

  console.log(index2);
  console.log(".cardDetail"+l2);


    $(".cardDetail"+l2).toggle();
});

  $(".DETAILS").click(function(){
  	 var index = $( ".DETAILS" ).index( this );
var li = ":eq("+index+")";


    $(".cardDetailR2"+li).toggle();
});


});


$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});




</script>