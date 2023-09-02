$(document).ready(function () {
    $('.check-name').keyup(function (e) { 
        
        var name=$('.check-name').val();
        $.ajax({
            type: "POST",
            url: "packageL.php",
            data: {
                "check-submit-button":1,
                "Pakage-name":name,
            },
           
            success: function (response) {
                //alert(response);
               $('.error-meg').text(response);
            }
        });
    });
});