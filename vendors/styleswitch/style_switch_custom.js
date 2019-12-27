$(document).ready(function(){    
// use jQuery correctly with strict
    (function($) {
        "use strict";
        // your code
        
        $(".customizerTrigger").click(function(){

            $('#customizer').toggleClass('open')

        });
        
        /*Body Background*/
        $('.bg-lite').on('click',function(){
            if( !($('body').hasClass('light')) ) $('body').addClass('light')
        });
        
        $('.bg-default').on('click',function(){
            if( $('body').hasClass('light') ) $('body').removeClass('light')
        });
        
        /*Logo By Skin Color*/
        $('.options-segment .color-scheme a[data-rel="skin-default"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/logo.png")
        });
        $('.options-segment .color-scheme a[data-rel="skin1"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/skins/1.png")
        });
        $('.options-segment .color-scheme a[data-rel="skin2"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/skins/2.png")
        });
        $('.options-segment .color-scheme a[data-rel="skin3"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/skins/3.png")
        });
        $('.options-segment .color-scheme a[data-rel="skin4"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/skins/4.png")
        });
        $('.options-segment .color-scheme a[data-rel="skin5"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/skins/5.png")
        });
        $('.options-segment .color-scheme a[data-rel="skin6"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/skins/6.png")
        });
        $('.options-segment .color-scheme a[data-rel="skin7"]').on('click', function(){
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/skins/7.png")
        });
        
        /*Body Background*/
        
        $('.headerDefault').on('click',function(){
            $('header').attr('class','row');
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/logo.png")
        });
        
        $('.headerVersion1').on('click',function(){
            $('header').attr('class','row header1');
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/logo-white.png")
        });
        
        $('.headerVersion2').on('click',function(){
            $('header').attr('class','row header2');
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/logo.png")
        });
        
        $('.headerVersion3').on('click',function(){
            $('header').attr('class','row header3');
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/logo-blue-white.png")
        });
        
        $('.headerVersion4').on('click',function(){
            $('header').attr('class','row header4');
            $('header .navbar-default .navbar-header .navbar-brand img').attr("src","images/logos/logo-white.png")
        })
        
        
        
    
        
    })(jQuery)
});



function swapStyleSheet(sheet){
    document.getElementById('pagestyle').setAttribute('href', sheet);
}