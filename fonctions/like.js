$(document).ready(function(){
    $(".notliked1").click(function(){
        var like = $( ".notliked1" ).first().attr( "id" ).split(',');
        var questionId = like[0];
        var connexionId = like[1]; 
        console.log(like);      
        $.ajax({
            url: 'fonctions/addlike.php',
            type: "POST",
            data: {'id' : questionId, 'idConnect' : connexionId},  
            success: function (data) {
                console.log(data);
                $("i.heart1").css("color", 'red');
                $("i.heart1").css("display","true");
                location.reload();
                 },                    
            });
    });
});