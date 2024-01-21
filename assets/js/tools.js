
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
    $("#video").click(function () {
        // var name = $("#name").val();
        var data = $("#item").val();
        // var l = $("#length").val();
        // alert(name);
        if (data == ' ' || data == '') {
            swal({  
                title: "Warning!!",  
                text: "This Field Cannot Be Empty! ",  
                icon: "warning",  
                button: "Ok",  
              });
        }else if(!validURL(data)){
            swal({  
                title: "Warning!!",  
                text: "Invalid URL! ",  
                icon: "warning",  
                button: "Ok",  
              });
        }else{
            $("#modal").css('display', 'block');
            $("#video").text('Loading ..... ');
            $("#video").attr('disabled', true);
            // alert("Am here")
            jQuery.ajax({
                url:"engine/downloader.php",
                type:"POST",
                data: {data},            
                success: function (res) {
                    $("#modal").css('display', 'none');
                    $("#video").attr('disabled', false);
                    $("#video").text('Download');
                        // console.log(res);
                    // $("#err").css('color','orange');
                    $("#content").html(res);
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

