$(function() {
    
    $("#InsTipoSocioForm").validate();
    $("#UpdateTipoSocioForm").validate();
    $('#paging_container1').pajinate({
        items_per_page : 20	
    });
    
    $(".reqfield").tooltip();
    
    $('.del').click(function(e) {
        var c = confirm("Realmente desea eliminar el registro?");
        if (c == false) return false;
        else location.href = '../';	
    });    
        
    $('#Cancelar-btn').live('click', function(o){
        location.href = '../';
    });
});
