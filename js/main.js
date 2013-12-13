


var exp = (function(exp,options){

    exp.config = {
      hotelListURL  : "http://api.ean.com/ean-services/rs/hotel/v3/list", //get
      hotelAvilURL  : "http://api.ean.com/ean-services/rs/hotel/v3/avail", //get
    	bookingURL	: "https://book.api.ean.com" //post
    };
    exp.opts = {        
    	  cid     	: "55505",
        apiKey  	: "jvqgxhcp5mcq3hmj2twnjy9v",
        locale  	: "en_US",   
        currencyCode :"USD"  , 
        supplierCacheTolerance: "MED_ENHANCED",
        minorRev : "20"
      } 
   


    exp.getHotels = function(url,city,checkIn,checkOut){ 
 
       exp.opts.city      = city;
       if(checkIn){
         exp.opts.arrivalDate   = checkIn;
         exp.opts.departureDate  = checkOut;
       }
    	 $.ajax({ 
				  url: url,
				  data: exp.opts,
				  dataType: 'jsonp',
				  success: function(data){
				    console.log(data);
				  },
				  error: function(xhr, type){ 
				    console.log(xhr, type);
				  }
				}); 

    };
    exp.bookHotel =  function(url,hotelID,checkIn,checkOut){
        
        exp.opts.hotelId        = hotelID;
        exp.opts.arrivalDate    = checkIn;
        exp.opts.departureDate  = checkOut;
        
       $.ajax({ 
          url: url,
          data: exp.opts,
          dataType: 'jsonp',
          success: function(data){
            console.log(data);
          },
          error: function(xhr, type){ 
            console.log(xhr, type);
          }
        }); 
    }  
     
 
    
    exp.init = (function(){
        
    	//exp.getHotels(exp.config.hotelListURL,"seattle","01/01/2014","01/10/2014");
      //exp.getHotels(exp.config.hotelListURL,"seattle");
      exp.bookHotel(exp.config.hotelAvilURL,"266025","01/01/2014","01/10/2014");


    })(); 

})(exp || {});