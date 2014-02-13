<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/gpt.css" />
    <script src="js/modernizr.js"></script>
   <script id="hotelCards" type="text/template">

    {{#HotelSummary}}
 

    <div class="pin">
      <img src="http://images.travelnow.com/{{thumbNailUrl}}">
         <h5>{{name}}</h5>
       <h5>Trip ADvisor: {{tripAdvisorRating}}</h5>
        <h6 class="subheader">£cost</h6>
    </div> 

    {{/HotelSummary}}
    </script>

  </head>
  <body> 

 <div id="wrapper">
  <div id="columns">



  </div>
</div>
    
    
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
       <script src="js/mustache.js"></script>
     <script type="text/javascript">  

        //exp.getHotels(exp.config.hotelListURL,"london","01/01/2014","01/10/2014");
 

      exp.getHotels(exp.config.hotelListURL,"seattle");
     // exp.bookHotel(exp.config.hotelAvilURL,"266025","01/01/2014","01/10/2014");

 
    </script>
  </body>
</html>
