<?php include 'includes/header.php'; ?>

<script id="hotelCards" type="text/template">

{{#HotelSummary}}
<h5>{{name}}</h5>
<p> </a></p>

<div class="large-4 small-6 columns">
  <img src="http://images.travelnow.com/{{thumbNailUrl}}">

  <div class="panel">
    <h5>Trip ADvisor: {{tripAdvisorRating}}</h5>
    <h6 class="subheader">£cost</h6>
  </div>
</div>

{{/HotelSummary}}
</script>


        <div class="row">
    <div class="large-12 columns">
 
<?php include 'includes/navigation.php'; ?>
 
      <div class="row"> 
 
 
    <!-- Thumbnails -->
 
        <div class="large-12 columns">
          <div class="row" id="hotelGrid">
 
 
  

          </div>
 
    <!-- End Thumbnails -->
 
 
          </div>
        </div>
      </div>
 
 
    <!-- Footer -->
 
      <footer class="row">
        <div class="large-12 columns"><hr />
          <div class="row">
 
            <div class="large-6 columns">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
 
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
              </ul>
            </div>
 
          </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
    </div>
  </div>

<?php include 'includes/footer.php'; ?>
    <script type="text/javascript">  

        exp.getHotels(exp.config.hotelListURL,"london","01/01/2014","01/10/2014");
 

      //exp.getHotels(exp.config.hotelListURL,"seattle");
     // exp.bookHotel(exp.config.hotelAvilURL,"266025","01/01/2014","01/10/2014");

 
    </script>

      </body>
</html>