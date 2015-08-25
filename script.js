$(document).ready(function(){

    $("#text_area_1").click(function() {
        if($('.radio_2').attr('checked')) {
            $(".radio_2").removeAttr("checked");
            $(".radio_1").prop("checked", true);
        }
        else {
            $(".radio_1").prop("checked", true);
        }
        
        
    });

    $("#text_area_2").click(function(){
        if($('.radio_1').attr('checked')) {
           $(".radio_1").removeAttr("checked"); 
           $(".radio_2").prop("checked", true);
        }
        else {
            $(".radio_2").prop("checked", true);
        }
    });
    
    $("#Form1").validate();
    $("#Form").validate();
});