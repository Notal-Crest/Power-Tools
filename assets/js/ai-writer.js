$(document).ready(function () {
    
    $("#submit").click(function () {
        var t = $("#title").val();
        var i = $("#intro").val();
        // var l = $("#length").val();

        if (t == ' ' || t == '') {
            swal({  
                title: "Warning!!",  
                text: "All Field Are Required ! ",  
                icon: "warning",  
                button: "Ok",  
              });  
            // window.alert('');
        }else if (i == ' ' || i == '') {
            swal({  
                title: "Warning!!",  
                text: "All Field Are Required ! ",  
                icon: "warning",  
                button: "Ok",  
              });
            // window.alert('All Field Are Required');
        
        }else if(t.length < 2){
            swal({  
                title: "Warning!!",  
                text: "Minimum Title Length is 6 characters ! ",  
                icon: "warning",  
                button: "Ok",  
              });
            // window.alert('');
        }else if(i.length < 5){
            swal({  
                title: "Warning!!",  
                text: "Minimum Introductory Text Length is 10 characters ! ",  
                icon: "warning",  
                button: "Ok",  
              });
            // window.alert('');
        }else{
            $("#modal").css('display', 'block');
            $("#submit").text('Loading ..... ');
            $("#submit").attr('disabled', true);
            jQuery.ajax({
                url:"./engine/writer.php",
                type:"POST",
                data: {t,i},
                success: function (res) {
                    $("#modal").css('display', 'none');
                    $("#submit").attr('disabled', false);
                    $("#submit").text('Generate');
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


