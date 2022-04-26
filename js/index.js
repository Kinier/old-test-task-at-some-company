

function getPizzaPrices(){

        let pizzaType = $('#type  option:selected').text();
        let pizzaSize = $('#size  option:selected').text();
        let pizzaSouce = $('#souce  option:selected').text();

        let postData ={};
        postData['type'] = pizzaType;
        postData['size'] = pizzaSize;
        postData['souce'] = pizzaSouce;

        $.ajax({
            method: 'POST',

            url: "/index.php",
            data: postData,
            dataType: "json",
            success: function(data){
                if (!data['error']){ // if success == 1

                    $('#price').html(data['price'] + 'рублей');
                    $('#check-size').html(data['size']);
                    $('#check-type').html(data['type']);
                    $('#check-souce').html(data['souce']);
                    $('.wrapper-check').css("display", "flex")
                }else{
                    $('#price').html(data['error']);
                    $('.wrapper-check').css("visibility", "visible")
                }
            }
        });

}