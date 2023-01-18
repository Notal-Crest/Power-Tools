$(document).ready(function () {
    
    $("#submit_password").click(function () {
        // var name = $("#name").val();
        var len = $("#length").val();
        // var l = $("#length").val();
// alert(name);
        if (len == ' ' || len == '') {
            swal({  
                title: "Warning!!",  
                text: "Length Field Is Required ! ",  
                icon: "warning",  
                button: "Ok",  
              });
        }else{
            $("#modal").css('display', 'block');
            $("#submit_password").text('Loading ..... ');
            $("#submit_password").attr('disabled', true);
            jQuery.ajax({
                url:"./engine/password.php",
                type:"POST",
                data: {len},
                success: function (res) {
                    $("#modal").css('display', 'none');
                    $("#submit_password").attr('disabled', false);
                    $("#submit_password").text('Generate');
                        // console.log(res);
                    // $("#err").css('color','orange');
                    $("#content").html(res);
                },
                error: function (error) {
                    swal("Error", "An Error Occured, Please Try Again Later", "error");
                }
            })
        }
    })
});


