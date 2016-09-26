  $(document).ready(function() {
             setTimeout(
  function() 
  {
    $('#text_upper,#text_middle').slideDown(2000);
      $('#hcl_img').fadeIn(3000);
  }, 5000);
       setTimeout(
  function() 
  {
    $('#text_lower').toggle("slide");
  }, 7000);
      
      $('.filter').click(function(){
          $('#port').css("display", "block");
      })
});



