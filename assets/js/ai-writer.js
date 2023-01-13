$(document).ready(function () {
    
    $("#submit").click(function () {
        var t = $("#title").val();
        var i = $("#intro").val();

        if (t == ' ' || t == '') {
            window.alert('All Field Are Required');
        }else if (i == ' ' || i == '') {
            window.alert('All Field Are Required');
        }else if(t.length < 6){
            window.alert('Minimum Title Length is 6 characters');
        }else if(i.length < 10){
            window.alert('Minimum Introductory Text Length is 10 characters');
        }else{
            jQuery.ajax({
                url:"./engine/writer.php",
                type:"POST",
                data: {t,i},
                success: function (res) {
                    console.log(res);
                    
                }
            })
        }
        
    })
})