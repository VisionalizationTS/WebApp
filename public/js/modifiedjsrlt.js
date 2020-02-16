/* Set the left of the side navigation to 0px */
function openNav() {
    document.getElementById("mySidenav").style.right = "0px";
  }
  
  /* Set the left of the side navigation to -250px */
  function closeNav() {
    document.getElementById("mySidenav").style.right = "-250px";
  }
  
  /* Side navigation bar button */
  $(document).ready(function(){
    $("#fade").click(function() {
      $("#fadetoggle").fadeToggle("normal", "swing");
      $("#fadetoggle").toggleClass("slideInUp");
      $("#icon").toggleClass("fa-times");
    });
  });
  
  /* fade for search */
  $(document).ready(function(){
    $("#sidebars").on('click', function() {
      $("#mySidenav").toggleClass("open");
      $("#xicon").toggleClass("fa-times");
    });
  });
  
  // slid Up & Down toggle for category side bar
  $(document).ready(function(){
    $("#dropdown-btn1").click(function(){
      $("#dropdown-container1").slideToggle("slow", function(){
        $('#side1').toggleClass("fa-caret-up");
      });
    });
  });
  
  $(document).ready(function(){
    $("#dropdown-btn2").click(function(){
      $("#dropdown-container2").slideToggle("slow", function(){
        $('#side2').toggleClass("fa-caret-up");
      });
    });
  });
  
  $(document).ready(function(){
    $("#dropdown-btn3").click(function(){
      $("#dropdown-container3").slideToggle("slow", function(){
        $('#side3').toggleClass("fa-caret-up");
      });
    });
  });
  
  $(document).ready(function(){
    $("#dropdown-btn4").click(function(){
      $("#dropdown-container4").slideToggle("slow", function(){
        $('#side4').toggleClass("fa-caret-up");
      });
    });
  });
  
  $(document).ready(function(){
    $("#dropdown-btn5").click(function(){
      $("#dropdown-container5").slideToggle("slow", function(){
        $('#side5').toggleClass("fa-caret-up");
      });
    });
  });
  
  // validation for quantity
  var quantity = document.getElementById("quantity").value;
  function validation() {
    if (quantity <= 0) {
      alert("Invalid Quantity");
    } 
    // else if (quantity > 99) {
    //   alert("You Can Have Maximum 99 Product");
    // }
  };
  
  // All Department Button slide 
  $(document).ready(function(){
    $(".my-button").on('click', function() {
      $(".departments").slideToggle('fast');
    });
  });

  // Scroll
$(document).ready(function(){
  // Scroll for whole page
  $(function() {  
    $("body").niceScroll({
      cursorcolor: "#19afd0",
      cursorwidth: "10px",
      cursorborder: "1px solid #19afd0",
    });
  });
});

// Validation for Search
function validateForm() {
  var x = document.forms["myForm"]["q"].value;
  if (x == "") {
    alert("Product must be filled out");
    return false;
  }
}