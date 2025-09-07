function selectRegno(){
    var x = document.getElementById("searchData").value;

    $.ajax({
        url:"showSearchData.php",
        method: "POST",
        data:{
            id : x
        },
        success:function(data){
            $("#ans").html(data);
        }
    })

}