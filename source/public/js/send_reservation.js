$(".resbtn").click(function(){
    let pointId = parseInt($(this).siblings(".pointId").val());
    $.post("/user/createreservation", 
    {
        time: $("#time" + pointId).val(),
        date: $("#date" + pointId).val(),
        serId: parseInt($("#serviceId").val()),
        pointId: pointId
    },
    function(data, status){
        document.getElementById("info").innerHTML = data;
    });
});