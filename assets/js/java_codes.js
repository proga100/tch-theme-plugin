jQuery(document).ready(function ($) {
    $(".lms-more-products").click(function () {
        $(".lms-more-products").css("display", "none");
        $(".item.stm_prod_5").css("display", "block");
        $(".item.stm_prod_6").css("display", "block");
        $(".item.stm_prod_7").css("display", "block");
        $(".item.stm_prod_8").css("display", "block");
        $(".item.stm_prod_9").css("display", "block");
        $(".item.stm_prod_10").css("display", "block");
        $(".item.stm_prod_11").css("display", "block");
        $(".item.stm_prod_12").css("display", "block");
        window.location.href = 'https://pepperqueenfarms.com/shop/';
    });
});