$(document).ready(function(){
    
    $('.confirm-delete').click(function(){
        if(confirm("Really? Do you want to delete this?")){
            return true;
        }
        return false;
    }); 
    
    $('#go-back').click(function(event){
        event.preventDefault();
        history.back();
    });
});