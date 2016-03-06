//Home page
$("#title").click(function(){
  $("#highlight-items").show("slow",function(){
  $(".products").hide("slow",function(){
    $(".footer").removeClass("removeFooter");
  });
  $(".products1").hide("slow",function(){
    $(".footer").removeClass("removeFooter");
  });
  $(".products2").hide("slow",function(){
    $(".footer").removeClass("removeFooter");
  });

  });
});
// Nike products
$( ".a-nike" ).click(function() {
  $( "#highlight-items" ).hide( "slow", function() {
    $(".products").show("fast",function(){

    });
  });
$(".products").addClass("remove");
$(".footer").addClass("removeFooter");
});

// Adidas products
$( ".a-adidas" ).click(function() {
  $( "#highlight-items" ).hide( "slow", function() {
    $(".products1").show("fast",function(){

    });
  });

$(".products1").addClass("remove1");
$(".products2").removeClass("remove2");
$(".footer").addClass("removeFooter");
});

// Asics products
$( ".a-asics" ).click(function() {
  $( "#highlight-items" ).hide( "slow", function() {
    $(".products2").show("fast",function(){

    });
  });
$(".products2").addClass("remove2");
$(".products1").removeClass("remove1");
$(".footer").addClass("removeFooter");
});
