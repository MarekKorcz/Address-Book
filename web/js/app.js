$(document).ready(function(){
    
    $('.confirm-delete').click(function(){
        if(confirm("Do you want to delete this person?")){
            return true;
        }
        return false;
    }); 
    
    $('#go-back').click(function(event){
        event.preventDefault();
        history.back();
    });
});