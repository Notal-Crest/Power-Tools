
// AI Writer.
$(document).ready(function () {
    $("#submit").click(function () {
        var t = $("#prompt").val();
        // var i = $("#intro").val();
        // var l = $("#length").val();

        if (t == ' ' || t == '') {
            swal({  
                title: "Warning!!",  
                text: "All Field Are Required ! ",  
                icon: "warning",  
                button: "Ok",  
              });  
            // window.alert('');
        }else if(t.length < 2){
            swal({  
                title: "Warning!!",  
                text: "Minimum Title Length is 6 characters ! ",  
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
                data: {t},
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

// Password |Generator
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

$(document).ready(function() {
    $("#gen").click(function () {
        // var name = $("#name").val();
        var data = $("#in1").val();
        // var l = $("#length").val();
        // alert(name);
        if (data == ' ' || data == '') {
            Swal.fire({  
                title: "Warning!!",  
                text: "This Field Cannot Be Empty! ",  
                icon: "warning",  
                button: "Ok",  
              });
        }else if(!validURL(data)){
            Swal.fire({  
                title: "Warning!!",  
                text: "Invalid URL! ",  
                icon: "warning",  
                button: "Ok",  
              });
        }else{
            $.blockUI();
            $("#modal").css('display', 'block');
            $("#gen").text('Loading ..... ');
            $("#gen").attr('disabled', true);
            // alert("Am here")
            jQuery.ajax({
                url:"engine/shortener.php",
                type:"POST",
                data: {data},            
                success: function (res) {
                    var response = JSON.parse(res);
                    // alert(response);
                    if (res == '') {
                        Swal.fire({
                            text: 'A Critical Error Occured Please Contact Your Administrator!',
                            icon: "Error",
                            showCancelButton: false,
                            confirmButtonColor: "#3085d6",
                          }).then((result) => {
                            // console.log(result);
                                $.unblockUI();
                                window.location.reload();
                          });
                    } else {
                        $("#modal").css('display', 'none');
                        $.unblockUI();
                        
                        var rescode = response.response_code;
                        var resmessage = response.response_message;
                        if (rescode == '201') {
                            Swal.fire({
                                text: resmessage,
                                icon: "success",
                                showCancelButton: false,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Copy Link",
                                cancelButtonColor: "#d33",
                                cancelButtonText: "Cancel",

                              }).then((result) => {
                                if (result.isConfirmed) {
                                    navigator.clipboard.writeText(resmessage);
                                    Swal.fire({
                                        text: "Link Copied!",
                                        icon: "success",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                      }).then((result) => {
                                        // console.log(result);
                                        $.unblockUI();
                                        window.location.reload();
                                        // console.log(result);
                                      });
                                } else {
                                    // console.log(result);
                                }
                              
                            });
                            $("#gen").attr("disabled", false);
                            
                        } else {
                            Swal.fire({
                                text: resmessage,
                                icon: "error",
                            });
                            $("#button").attr("disabled", true);
                            
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }
                        $("#content").html(res);
                    }
                },
                error: function (error) {
                    swal("Error 999", "An Error Occured, Please Try Again Later", "error");
                }
            })
        }
    })
})


function validURL(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
      '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
      '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
      '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
      '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
      '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    return !!pattern.test(str);
  }

