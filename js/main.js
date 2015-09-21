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
    
    $('#orcamentoP3 input[type="submit"]').click(function(){
        $('#orcamentoP3 form,.desc').fadeOut('fast');
        $('#orcamentoP3 .contactFormMsg').fadeIn();
    });
    $('#orcamentoP2 input[type="submit"]').click(function(){
        $('#orcamentoP2 form,.desc').fadeOut('fast');
        $('#orcamentoP2 .contactFormMsg').fadeIn();
    });

    $(".telefoneMask").mask("(99) 9999-9999?9");
    $(".dateMask").mask("99/99/9999");
    $(".cpfMask").mask("999.999.999-9?9");

    $('.menuHome > span').click(function() {
        $('.sideMenu').removeClass('hide');
        $(this).parent().fadeOut();
    });
    $('.sideMenu .close').click(function() {
        $('.sideMenu').addClass('hide');
        $('.menuHome').fadeIn();

    $('.myNav a, .top,.menuHome li a,.top-bar-section a,#scrollDown').click(function() {
        var href = $.attr(this, 'href');
        $('html, body').animate({
            scrollTop: $(href).offset().top
        }, 500, function () {
            window.location.hash = href;
        });
        return false;
    });

    $(document).foundation('topbar','reflow');
});