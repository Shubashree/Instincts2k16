// JavaScript Document
function changeText(cont1,cont2,speed){
    var Otext=cont1;
    var Ocontent=Otext.split("");
    var i=0;
    function show(){
        if(i<Ocontent.length)
        {       
            cont2.append(Ocontent[i]);
            i=i+1;
        };
    };
        var Otimer=setInterval(show,speed); 
};
$(window).load( function(){
	
    changeText("iHunt",$(".header-p"),500); //  500 = the Delay time in milliseconds between strokes.
    //clearInterval(Otimer);
	
	
	
});

$(document).ready(function(e) {
      
	   $('.nav-menu').click(function(){
		   
		    $(this).toggleClass('clicka-anim');
			
			$('body').css('overflow-X','hidden');
			
		   });
		   
	    

	
	    
    });
	$(window).load(function(){
		$('.question').show(2000).animate(2000);	
		 $('.navbar').addClass('navbaranim');
		 $('.nav-menu').addClass('nav-menu-anim');	
		 
		  setTimeout(function(){$('.nav-menu').removeClass('nav-menu-anim')},1800);	
		  
		  $('.loader').fadeOut(700);
		  
		  $('head').append('<link rel="icon" type="image/png" href="http://ihunt.instincts.org.in/favicon.png"/>');
		   $('head').append("<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*newDate();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-60501445-1', 'auto');ga('send', 'pageview');</script>");
		   
		   });

