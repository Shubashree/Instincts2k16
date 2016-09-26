$(document).ready(function(){
    
    $("#gg").click(function(){
        $("#ag").removeClass('lolol');
        $("#mtc").removeClass('lolol');
            $("#gg").addClass('lolol');
            $("#ggt").fadeIn(500);
            $("#agt").hide();
            $("#mtct").hide();
    });
    $("#ag").click(function(){
        $("#gg").removeClass('lolol');
        $("#mtc").removeClass('lolol');
            $("#ag").addClass('lolol');
            $("#agt").fadeIn(500);
            $("#ggt").hide();
            $("#mtct").hide();
    });
    $("#mtc").click(function(){
        $("#ag").removeClass('lolol');
        $("#gg").removeClass('lolol');
          $("#mtc").addClass('lolol');
            $("#mtct").fadeIn(500);
            $("#ggt").hide();
            $("#agt").hide();
    });

});