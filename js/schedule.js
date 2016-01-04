
var date = function(){
        
};

var resetDate = function() {
    //Copy this code to your javascript file.
    var n = $('.outer-date').data("to_date");
    for(var i = 1; i < n; i++){
        $('.date').animate({top: "+=100"}, 100); 
    }
} 

var iScrollPos = 0;
$(document).ready(function () {
   $('.outer-date').each(function(i, element){
      //Copy this code to your javascript file.
        var n = $('this').data("to_date");
        for(var i = 1; i < n; i++){
            $('.date').animate({top: "-=100"}, 100); 
        }
   });
});


