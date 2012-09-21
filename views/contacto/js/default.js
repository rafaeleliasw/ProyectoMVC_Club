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

function limpiaForm(miForm) {
    // recorremos todos los campos que tiene el formulario
    $(':input', miForm).each(function() {
        var type = this.type;
        var tag = this.tagName.toLowerCase();
        //limpiamos los valores de los campos…
        if (type == 'text' || type == 'password' || tag == 'textarea')
            this.value = "";
        // excepto de los checkboxes y radios, le quitamos el checked
        // pero su valor no debe ser cambiado
        else if (type == 'checkbox' || type == 'radio')
            this.checked = false;
        // los selects le ponesmos el indice a -
        else if (tag == 'select')
            this.selectedIndex = -1;
    });
}
 