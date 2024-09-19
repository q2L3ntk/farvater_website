$(document).ready(function() {
    $(".btn_hover").mouseenter(function() {
        $(".btn_hide").show("fast")
    })
    $(".btn_hover").mouseleave(function() {
        $(".btn_hide").hide("fast")
    })

    $(".header_search").click(function() {
        $(".search_view_hide").slideDown("fast")
    })
    $(".search_close").click(function() {
        $(".search_view_hide").slideUp("fast")
    })
    $(".search_field").focus(function() {
        $(this).css("outline", "0")
    })

    $(".header_menu").click(function() {
        $("header").hide()
        $("main").hide()
        $("footer").hide()
        $(".full_menu_hide").show("fast")
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".full_menu_close").click(function() {
        $(".full_menu_hide").hide("fast")
        $("header").show()
        $("main").show()
        $("footer").show()
    })

    $(".menu_first").mouseenter(function() {
        $(".full_menu_first").show("fast")
        $(".full_menu_second").hide()
    })
    $(".menu_second").mouseenter(function() {
        $(".full_menu_second").show("fast")
        $(".full_menu_first").hide()
    })
    $(".menu_third").mouseenter(function() {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".menu_fourth").mouseenter(function() {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".menu_fifth").mouseenter(function() {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".menu_sixth").mouseenter(function() {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
})