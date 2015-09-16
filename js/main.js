var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
if( !isMobile.any() ){
    $(document).foundation({
        equalizer : {
            act_on_hidden_el: true
        }
    });
}else{
    $(document).foundation();
}
$(document).ready(function() {

     $('#myTable').DataTable( {
        responsive: true,
        paging: false,
        ordering: false,
        searching: false,
        info:false
    } );

    wow = new WOW({
        mobile:false
    });
    wow.init();

    if( !isMobile.any() ){

        $('.addequalizer').attr("data-equalizer","");

        $('.section').css('position','absolute');

        $('#pagepiling').pagepiling({
            menu:'.myNav',
            anchors: ['home','howWorks','plans','register','contact','orderStatus'],
            verticalCentered: false,
            css3: false,
            navigation:false,
            animateAnchor:true,
            scrollingSpeed:400,
            onLeave: function(index, nextIndex, direction){
                if(nextIndex == 1) {
                    $('.navBg').addClass('hide');
                } else {
                    $('.navBg').removeClass('hide');
                }
            }
        });
    }else{
        $(window).scroll(function() {

            if($('#howWorks').offset().top >= $('.navBg').offset().top ){
                $('.navBg').addClass('hide');
            }else{
                $('.navBg').removeClass('hide');
            }
        });
    }


    $('input[type="submit"]').click(function(){
        $('.formMsg').fadeIn();
    });

    $('.contactFormMsg').hide();
    $('.mostrarStatus').click(function(){
        $('.statusPedido').fadeIn();
    });
    $('#contactForm .envia').click(function(){
        $('#contactForm').fadeOut('fast');
        $('.contactFormMsg').fadeIn();
    });

    $("#telefone,#telefone2").mask("(99) 9999-9999?9");
    $("#dateOfBirth").mask("99/99/9999");
    $("#cpf,#cpf2").mask("999.999.999-9?9");

    $('.menuHome > span').click(function() {
        $('.menuHome ul').fadeIn();
    });
    $('.menuHome').mouseleave(function() {
        $('.menuHome ul').fadeOut();
    });

    $('.myNav a, .top,.menuHome li a,.top-bar-section a,#scrollDown').click(function() {
        var href = $.attr(this, 'href');
        $('html, body').animate({
            scrollTop: $(href).offset().top
        }, 500, function () {
            window.location.hash = href;
        });
        return false;
    });





    // $(window).on('hashchange', function() {
    //     $('.myNav .active').removeClass('active');
    //     $('.myNav').find('a[href='+ window.location.hash +']').addClass('active');
    // });

    // if(typeof(window.location.hash) != "undefined" && window.location.hash != ""){
    //     $('.myNav .active').removeClass('active');
    //     $('.myNav').find('a[href='+ window.location.hash +']').addClass('active');

    //     var href = window.location.hash;

    //     $('html, body').animate({
    //         scrollTop: $(href).offset().top
    //     }, 500, function () {

    //     });
    // }
    $(document).foundation('topbar','reflow');
});