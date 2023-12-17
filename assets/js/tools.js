







// $(document).ready(function () {
//     const chunk = 4;
//     $("#item").keypress(function (e) { 
//          if (e.keyCode === 13) {
//           e.preventDefault();
//         }
//     });
//     $("#search").click(function () { 
//         $('#jumia').remove();
//         var prod = $("#item").val()
//         if (prod == ' ' || prod == '' || prod == '  ' || prod == '   ' || prod == '    ' || prod == '     ' || prod == '      ' || prod == '       ' || prod == '       '|| prod == '        '|| prod == '         '|| prod == '          '|| prod == '           ') {
//             swal({  
//                 title: "Warning!!",  
//                 text: "Search Box Cannot Be Empty ! ",  
//                 icon: "warning",  
//                 button: "Ok",  
//               });  
//             // window.alert('');
//         }else{
//             jQuery.ajax({
//                 url:"./engine/c-engine.php",
//                 type:"POST",
//                 data: { key: prod},
//                 success :function (res) {
//                     // alert( "Success: " + res );
//                     if (res == "901") {
//                         swal({  
//                             title: "Error!!",  
//                             text: "Connection Failure !",  
//                             icon: "error",  
//                             button: "Ok",  
//                         });  
//                     } else if(res == "404"){
//                         swal({  
//                             title: "Warning !",  
//                             text: "Product Not Available At The Moment !",  
//                             icon: "warning",  
//                             button: "Ok",  
//                         });   
//                     }else{
//                         let arr = JSON.parse(res);
//                         // console.log(arr);
//                         let id = 0;
//                         $("#result").append('<div class="container" data-aos="fade-up" id="jumia"><div class="section-title"><h2>Products from Jumia</h2></div></div>');
//                         arr.forEach(function(i) {
//                             id++;
//                             $("#jumia").append("<div class='row' id='cards"+ id +"'></div>");
//                            var n = JSON.parse(JSON.stringify(i));
//                            var data = Object.values(n);
//                         //    console.log(data[0]);
//                             data.forEach(function (e) {
//                                  $("#cards"+id).append("<div class='col-md-3 col-sm-6 p-1'><div class='card '><img src='"+e['img']+"' class='card-img-top' alt='product image'><div class='card-body'><p class='card-text'>"+e['name']+" <br> <b>"+e['price']+"</b> <br> <a href='"+e['link']+"' class='btn btn-primary' target='_blank'>Open Link</a> </p></div></div></div> ");
//                             })
//                         });
//                     }
//                 },
//                 error :function (error) {
//                     swal("Error", "An Error Occured, Please Try Again Later", error);
//                 },
//             });
//         }
//     });
// });