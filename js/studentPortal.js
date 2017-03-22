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
});