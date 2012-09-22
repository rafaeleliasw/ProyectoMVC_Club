$(document).ready(function() {
        
    $("#commentForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        }
    });
    $('#commentForm').submit(function() {
        if ($('#commentForm').validate().form() == true){
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.type == 'success'){
                        $('.alert-success').css("display","block");
                        window.scrollTo(0,0);
                        limpiaForm($('#commentForm'));
                    } 
                    else if (json.type == 'error') {
                        $('.alert-error').css("display","block");
    
                    }
                }
            });
        }
        return false;
    });  
});