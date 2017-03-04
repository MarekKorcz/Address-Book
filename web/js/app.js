$(document).ready(function(){
    
    $('#delete').click(function(){
        if(confirm("Do you want to delete this person?")){
            return true;
        }
        return false;
    }); 
});