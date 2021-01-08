///////Code javascript////////

    $(document).ready(function(){
        $('#BoutonBurgermenuTab').click(function(){
            $('.menuTab').toggleClass('isOpen');
            $('#BoutonBurgermenuTab .barre1').toggleClass('isClick');
            $('#BoutonBurgermenuTab .barre2').toggleClass('isClick');  
        });


        // $(".chosen-select").chosen({disable_search_threshold: 10});
        // $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"}); 
        // $(".chosen-select").chosen({width: "95%"}); 
    });
