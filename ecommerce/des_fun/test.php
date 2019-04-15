 $(document).on('click','.addtocart', function (e) {
        var id = $(this).attr("data_id");

        var price = $(this).parent().parent().parent().find(".sprice").html();

        var total_price = $("#vvv" + id).parent().parent().parent().find(".pprice").text();

       $.post('des_fun/addtocart2.php',{id_x:id,price_x:price},function(data){
        var dataint = parseInt(data);

         if (Number.isInteger(dataint)) {

        var allprice = parseInt(total_price) + parseInt(price);

          $("#vvv" + id).text(data);
          
          
          $("#vvv" + id).parent().parent().parent().find(".pprice").text(allprice);


        //alert(data)

        }else{
            $("#divvv").append(data)
        //     alert(data)
         }
            
            

            });

        $.post('des_fun/addtocart.php',{id_x:id,price_x:price},function(data){
            $("#chart").text(data)

            })
