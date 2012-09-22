$(function() {
	
    $.get('dashboard/xhrGetListings', function(o) {     
                
        $('#listInserts').append('<thead><tr> <th style="width: 5%;">ID</th> <th style="width: 55%;">Text</th> <th style="width: 40%;">Acciones</th> </tr></thead>');
                
        if (o.length >= 1) {
            for (var i = 0; i < o.length; i++)
            {
                $('#listInserts').append('<tr> <td>' + o[i].id + '</td><td>' + o[i].text + '</td><td><a class="mod" rel="'+o[i].id+'" href="#"><i class="icon-edit"></i> Modificar</a> <a class="del" rel="'+o[i].id+'" href="#"> <i class="icon-remove-circle"></i> Borrar</a></td></tr>');
            }
        } else {
            $('#listInserts').append('<tr><td colspan="3" style="text-align: center;">No se han encontrado registros </td></tr>');
        }
            
		
        $('.del').live('click', function() {
            delItem = $(this);
            var id = $(this).attr('rel');
			
            $.post('dashboard/xhrDeleteListing', {
                'id': id
            }, function(o) {
				
                }, 'json');
			
            alert('El registro se eliminó correctamente');
            location.reload();
            return false;
        });
		
    }, 'json');
	
	
	
    $('#randomInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();
		
        $.post(url, data, function(o) {
            alert('El registro se agregó correctamente');
            location.reload();		
            $('#text').val("");
        }, 'json');
		
		
        return false;
    });

});