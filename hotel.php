<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/gpt.css" /> 
   <script id="hotelCards" type="text/template">

    {{#HotelSummary}}
 

    <div class="pin panel">
      <img src="http://images.travelnow.com/{{thumbNailUrl}}">
         <h3>{{name}}</h3>
       <h5>Trip ADvisor: {{tripAdvisorRating}}</h5>
        <h4 class="subheader">£{{lowRate}}</h4>
        <a href="#" class="button [radius round]" data-reveal-id="{{hotelId}}">{{name}} >></a>
        
        <div id="{{hotelId}}" class="reveal-modal" data-reveal> 
            <p>{{{shortDescription}}}</p>
        </div>   
    </div> 

    {{/HotelSummary}}
    </script>

  </head>
  <body> 
      
  
      
 <div id="wrapper">
  <div id="columns">



  </div>
</div>
    
    
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/vendor/mustache.js"></script>
        <script src="js/main.js"></script>
            <script type="text/javascript">  
 $(document).foundation();
        //exp.getHotels(exp.config.hotelListURL,"london","01/01/2014","01/10/2014");
 

     exp.getHotels(exp.config.hotelListURL,"london");
     // exp.bookHotel(exp.config.hotelAvilURL,"266025","01/01/2014","01/10/2014");

 
    </script>
  </body>
</html>
