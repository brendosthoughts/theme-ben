jQuery(function($){

        var alpine_time;
        var cowboy_time;
        $('#scotiamcleod').mouseenter(
        function(){
                var position = $("#foot_main").offset();
                $('#on_scotia_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_scotia_hover').css("width", 0.7*$( window ).width());
                $('#on_scotia_hover').show();
                $('#on_scotia_hover').offset({top: position.top - $('#on_scotia_hover').outerHeight(true) ,left: 0.15*$(window).width()});

                $('#on_scotia_hover').css("display", "inline-block");
        });
        $('#scotiamcleod').mouseleave(
        function(){
                $('#on_scotia_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');
                $('#on_scotia_hover').fadeOut("slow");
                $('#on_scotia_hover').removeAttr( 'style' );
        });
           $('#poc').mouseenter(
        function(){
                var position = $("#foot_main").offset();
                $('#on_poc_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_poc_hover').css("width", 0.7*$( window ).width());
                $('#on_poc_hover').show();
                $('#on_poc_hover').offset({top: position.top - $('#on_poc_hover').outerHeight(true) , left: 0.15*$(window).width()});

        });
        $('#poc').mouseleave(
        function(){
                $('#on_poc_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');
                $('#on_poc_hover').fadeOut("slow");
                $('#on_poc_hover').removeAttr( 'style' );
        });

        $('#head').mouseenter(
        function(){
                var position = $("#foot_main").offset();
                $('#on_head_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_head_hover').css("width", 0.7*$( window ).width());
                $('#on_head_hover').show();
                $('#on_head_hover').offset({top: position.top - $('#on_head_hover').outerHeight(true) ,left: 0.15*$(window).width()});

                $('#on_head_hover').css("display", "inline-block");
        });

        $('#head').mouseleave(
        function(){
                $('#on_head_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');

                $('#on_head_hover').fadeOut("slow");
                $('#on_swix_hover').removeAttr( 'style' );
  });
        $('#swix').mouseenter(
        function(){
                var position = $("#foot_main").offset();
                $('#on_swix_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_swix_hover').css("width", 0.7*$( window ).width());
                $('#on_swix_hover').show();
                $('#on_swix_hover').offset({top: position.top - $('#on_swix_hover').outerHeight(true) ,left: 0.15*$(window).width()});

                $('#on_swix_hover').css("display", "inline-block");
        });

        $('#swix').mouseleave(
        function(){
                $('#on_swix_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');

                $('#on_swix_hover').fadeOut("slow");
                $('#on_swix_hover').removeAttr( 'style' );
        });

     $('#moneda').mouseenter(
        function(){
                var position = $("#foot_main").offset();
                $('#on_moneda_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_moneda_hover').css("width", 0.7*$( window ).width());
                $('#on_moneda_hover').show();
               $('#on_swix_hover').offset({top: position.top - $('#on_swix_hover').outerHeight(true) ,left: 0.15*$(window).width()});

                $('#on_swix_hover').css("display", "inline-block");
        });

        $('#swix').mouseleave(
        function(){
                $('#on_swix_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');

                $('#on_swix_hover').fadeOut("slow");
                $('#on_swix_hover').removeAttr( 'style' );
        });

     $('#moneda').mouseenter(
        function(){
                var position = $("#foot_main").offset();
                $('#on_moneda_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_moneda_hover').css("width", 0.7*$( window ).width());
                $('#on_moneda_hover').show();
                $('#on_moneda_hover').offset({top: position.top - $('#on_moneda_hover').outerHeight(true) ,left: 0.15*$(window).width()});

                $('#on_moneda_hover').css("display", "inline-block");
        });

        $('#moneda').mouseleave(
        function(){
                $('#on_moneda_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');

                $('#on_moneda_hover').fadeOut("slow");
                $('#on_moneda_hover').removeAttr( 'style' );
        });
         $('#cowboys').mouseenter(
        function(){
        clearTimeout(cowboy_time);
         cowboyIn();
        });

        function cowboyIn(){
                var position = $("#foot_main").offset();
                $('#on_cowboy_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_cowboy_hover').css("width", 0.7*$( window ).width());
                $('#on_cowboy_hover').show();
                $('#on_cowboy_hover').offset({top: position.top - $('#on_cowboy_hover').outerHeight(true) ,left: 0.15*$(window).width()});
                $('#on_cowboy_hover').css("display", "inline-block");
      $('#cowboys').mouseleave(
         function(){

                   cowboy_time = setTimeout(function () {
                 cowboyOut();
                   }, 2500);
             });

        }

        function cowboyOut(){
           $('#on_cowboy_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');
           $('#on_cowboy_hover').fadeOut("slow");
           $('#on_cowboy_hover').removeAttr( 'style' );
           clearTimeout(cowboy_time);
        }

       $('#alpine').mouseenter(
        function(){
        clearTimeout(alpine_time);
         alpineIn();
        });

        function alpineIn(){
                var position = $("#foot_main").offset();
                $('#on_alpine_hover').removeClass('lightSpeedOut').addClass('lightSpeedIn');
                $('#on_alpine_hover').css("width", 0.7*$( window ).width());
                $('#on_alpine_hover').show();
               $('#on_alpine_hover').offset({top: position.top - $('#on_alpine_hover').outerHeight(true) ,left: 0.15*$(window).width()});
                $('#on_alpine_hover').css("display", "inline-block");

            $('#alpine').mouseleave(
                function(){

                   alpine_time = setTimeout(function () {
                 alpineOut();
                   }, 2500);
             });

        }

        function alpineOut(){
           $('#on_alpine_hover').removeClass('lightSpeedIn').addClass('lightSpeedOut');
           $('#on_alpine_hover').fadeOut("slow");
           $('#on_alpine_hover').removeAttr( 'style' );
           clearTimeout(alpine_time);
        }
        $(".menu-button").on("click", function(){
                $("#mp-menu").slideToggle();
                $(this).toggleClass("active");
        });
        $(".menu-item").on("click", function(){
                $(".sub-menu").hide();
                $(".menu-item").removeClass("active");
                $(this).children(".sub-menu").slideToggle();
                $(this).toggleClass("active");

        });
        $(".icon-share").on("click", function(){
                $(".addthis_toolbox").slideToggle();
                $(this).toggleClass("active");
        });

}); /*end of all jquery */




