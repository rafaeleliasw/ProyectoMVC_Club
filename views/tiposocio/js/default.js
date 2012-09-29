$(function() {
    
    $("#InsTipoSocioForm").validate();
    $("#UpdateTipoSocioForm").validate();
    
    $('.del').click(function(e) {
		var c = confirm("Realmente desea eliminar el registro?");
		if (c == false) return false;
                else location.href = '../';	
	});

    $('#InsTipoSocioForm').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();
		
        $.post(url, data, function(o) {
            alert('El registro se agregó correctamente');
            location.href = '../';
        }, 'json');
        return false;
    });
    

    $('#Cancelar-btn').live('click', function(o){
        location.href = '../';
    });
});
