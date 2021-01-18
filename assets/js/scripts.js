$(function(){
   $("#btn-submit").click(function(){

       if ($("#name").val().length == ""){
           $(".name").addClass("is-invalid");
       }else{
           $(".name").removeClass("is-invalid");
       }

       if ($("#password").val().length == ""){
           $(".password").addClass("is-invalid");
       }else{
           $(".password").removeClass("is-invalid");
       }

       if($("#name").val().length != "" && $("#password").val().length != ""){
           $.ajax({
               type: 'POST',
               url : '/ajax/ajax.php',
               data: $("form").serialize(),
               dataType:'json',
               success: function(reponse){
                   if(reponse.status){
                       window.location = "/database/data.php";
                   }else{
                       $(".message").html(reponse.messages).css("display","block");
                   }
               },
               error: function (xhr, ajaxOptions, thrownError) {
                   alert(xhr.status);
                   alert(thrownError);
               }
           });
       }
   });

    $("#btn-data-getir").click(function(){
        $.ajax({
            type: 'POST',
            url : '/ajax/ajax.php',
            data: {dataGetir : true},
            dataType:'json',
            success: function(reponse){
                if(reponse.status){
                    $('.dataBody').empty();
                    $.each(reponse.password, function (i,v) {
                        i++;
                        $(".dataBody").append(
                        "<tr>" +
                            "<th scope='row'>" + i + "</th>" +
                            "<td style='width:100%'>"+ v +"</td>" +
                        "</tr>"
                        );
                    });
                    $(".table").css("display","block");
                }else{
                    alert(reponse.messages);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

});
