
	var homeC="This is the main page.... <br>the contents to be added here<br><br><button id='play' class='btn btn-success' onclick='window.location=\"indexb.html\";'>Play</button>";
	var rulesC="There are the very strict millitary rules that will be followed<br>corporal pusnishment will be given to those disobey";
	var loginC="This is the login page: please login or your system will shutdown in 2 minutes";
	var myWidth = 0, myHeight = 0;
	
	window.onload=function(){
		if( typeof( window.innerWidth ) == 'number' ) {//Non-IE
			myWidth = window.innerWidth;
			myHeight = window.innerHeight;
		} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {//IE 6+ in 'standards compliant mode'
			myWidth = document.documentElement.clientWidth;
			myHeight = document.documentElement.clientHeight;
		} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {//IE 4 compatible
			myWidth = document.body.clientWidth;
			myHeight = document.body.clientHeight;
		}
		
		if(myHeight<390 || myWidth<390)
			$("#bgpic").hide();
		else{
			mtop=(myHeight-386)/2;
			mleft=(myWidth-380)/2;
			$("#bgpic").css({'top':mtop,'left':mleft});
		}
	}
	
		$(document).ready(function() {
			$.firefly({
				images : ['images/fly1by1.png','images/fly2by2.png','images/fly3by31.png','images/fly4by4.png'],
				total : 163
			});
			
			//$("#content").html(homeC);
			
			$("body").click(function(){
				$("#main").show("slow");
			});
			
			$("").click(function(){
				window.location="indexb.html";
			});
			
			$("button").click(function(){
				str=$(this).html();
				if($(this).hasClass('btn-inverse'))
					return false;
				$("button").removeClass('btn-inverse').addClass('btn-primary');
				$(this).removeClass('btn-primary').addClass('btn-inverse');
				add="";
				switch(str){
					case "Home":
						add=homeC;
						break;
					case "Rules":
						add=rulesC;
						break;
					case "Login":
						add=loginC;
						break;
				}
				
				$("#main").hide("slow",function(){$("#content").html(add);}).delay(100).show();
			});
		});
		