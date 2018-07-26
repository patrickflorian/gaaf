<script>
$(document).ready(function(){
    
    $("#modal-btn-add").click(function(){
        $("#addModal").modal();
    });
    $("#addModal").modal();  
    $('[data-toggle="tooltip"]').tooltip(); 

    $("#side-nav-btn").click(function(){
    $("#side-nav-right").hide("slow", function(){
        $("main-page").addClass("col-md-10 main-page");
    });
});
});
</script>