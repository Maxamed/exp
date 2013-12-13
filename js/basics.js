var Exp = (function () {

  // privates

  var config = {
      generalURL  : "http://api.ean.com", //get
      bookingURL  : "https://book.api.ean.com" //post
    };
  var opts = {        
      cid       : "55505",
        apiKey    : "jvqgxhcp5mcq3hmj2twnjy9v",
        locale    : "en_US",  // optional defaults to en_US
        currencyCode :"USD"  ,// optional defaults to USD,
        city:"seattle"}

  function getHotels(){ 
 
       $.ajax({ 
          url: exp.config.generalURL,
          data: exp.config,
          dataType: 'jsonp',
          success: function(data){
            console.log(data);
          },
          error: function(xhr, type){ 
            console.log(xhr, type);
          }
        });



    };

  function doSomethingElsePrivate() {
    //...
  }

  // Return an object exposed to the public
  return { 

    // Add items to our basket
    HotelList: function(   ) { 
    },

    // Get the count of items in the basket
    getItemCount: function () {
      return basket.length;
    },

    // Public alias to a  private function
   // doSomething: doSomethingPrivate,

    // Get the total value of items in the basket
    // getTotal: function () {

    //   var q = this.getItemCount(),
    //       p = 0;

    //   while (q--) {
    //     p += basket[q].price;
    //   }

    //   return p;
    // }
  };
}());
