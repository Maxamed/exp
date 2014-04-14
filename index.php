<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/gpt.css" />  
	
	<style>
		

	</style>
  </head>
    
  <body> 
    <img src="img/hotel.jpg" class="bg">
	<ul class="navi">
      <li><a>Home</a></li>
      <li><a>Inspiration</a></li>
      <li><a>Deals</a></li>
      <li><a>About</a></li>
      <li><a>Contact</a></li>
    </ul>
	<div id="page-wrap">
	
 
        <form>

                  <div class="row">
				    <div class="large-3 medium-3 columns">
				      <label>Leaving from</label>
				      <input type="text" placeholder="London" />
				    </div>
				    <div class="large-3 medium-3 columns">
				      <label>Going to</label>
				      <input type="text" placeholder="Paris" />
				    </div>
				    <div class="large-3 medium-3 columns">
				      <label>Leaving on</label>
				      <input type="text" id="Fdatepicker" placeholder="12/09/2014" />
				    </div>
				    <div class="large-3 medium-3 columns">
				      <label>Coming back</label>
				      <input type="text" id="Tdatepicker"  placeholder="22/09/2014" />
				    </div>	 
                      
				  </div>
            
        </form>
        
        
        
        
        
	</div>
  
  
    
    
        <script src="js/vendor/jquery.min.js"></script>  
        <script src="js/datepicker.js"></script>
        <script type="text/javascript">   
        var Fpicker = new Pikaday(
        {
            field : document.getElementById('Fdatepicker'), 
            firstDay: 1,
            minDate: new Date('2000-01-01'),
            maxDate: new Date('2020-12-31'),
            yearRange: [2000,2020]
        });
        var Tpicker = new Pikaday(
        {
            field : document.getElementById('Tdatepicker'), 
            firstDay: 1,
            minDate: new Date('2000-01-01'),
            maxDate: new Date('2020-12-31'),
            yearRange: [2000,2020]
        });
        </script>
  </body>
</html>
