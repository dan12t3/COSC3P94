$(function () {
    $('#academics').click(function () {

        $('.subAcademics').slideToggle();
        $("#academics i").toggleClass("rotate");
    });
    $('#financial').click(function () {

        $('.subFinancial').slideToggle();
        
        $("#financial i").toggleClass("rotate");
    });
    $('#services').click(function () {

        $('.subServices').slideToggle();
        
        $("#services i").toggleClass("rotate");
    });
    
    
    //THIS IS FOR FUTURESTUDENTSHOME.php
      $('.health').click(function () {

        $('.healthInfo').slideToggle();
    });
      $('.business').click(function () {

        $('.businessInfo').slideToggle();
    });
    
      $('.math').click(function () {

        $('.mathInfo').slideToggle();
    });
    
      $('.education').click(function () {

        $('.educationInfo').slideToggle();
    });
    
      $('.social').click(function () {

        $('.socialInfo').slideToggle();
    });
    $('.humanities').click(function () {

        $('.humanitiesInfo').slideToggle();
    });
});