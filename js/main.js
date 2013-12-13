
var exp = (function(exp){

    exp.options = {

        cid     : "YOUR CID",
        apiKey  : "YOUR EAN API KEY",
        locale  : "en_US",  // optional defaults to en_US
        currencyCode :"USD"  // optional defaults to USD
    };

     
 
    
    exp.init = (function(){
        console.log('from init method: ',exp.options);  
    })(); 

})(exp || {});