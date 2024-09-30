$(document).ready(() => {
    $(".btn_hover").mouseenter(() => {
        $(".btn_hide").show("fast")
    })
    $(".btn_hover").mouseleave(() => {
        $(".btn_hide").hide("fast")
    })

    $(".header_search").click(() => {
        $(".search_view_hide").slideDown("fast")
        $("header").css("opacity", "0.5")
        $("main").css("opacity", "0.5")
        $("footer").css("opacity", "0.5")
        $(".full_menu").css("opacity", "0.5")
    })
    $(".search_close").click(() => {
        $(".search_view_hide").slideUp("fast")
        $("header").css("opacity", "1")
        $("main").css("opacity", "1")
        $("footer").css("opacity", "1")
        $(".full_menu").css("opacity", "1")
    })
    $(".search_field").focus(() => {
        $(this).css("outline", "0")
    })

    $(".header_menu").click(() => {
        $("header").hide()
        $("main").hide()
        $("footer").hide()
        $(".full_menu_hide").show("fast")
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".full_menu_close").click(() => {
        $(".full_menu_hide").hide("fast")
        $("header").show()
        $("main").show()
        $("footer").show()
    })

    $(".menu_first").mouseenter(() => {
        $(".full_menu_first").show("fast")
        $(".full_menu_second").hide()
    })
    $(".menu_second").mouseenter(() => {
        $(".full_menu_second").show("fast")
        $(".full_menu_first").hide()
    })
    $(".menu_third").mouseenter(() => {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".menu_fourth").mouseenter(() => {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".menu_fifth").mouseenter(() => {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })
    $(".menu_sixth").mouseenter(() => {
        $(".full_menu_first").hide()
        $(".full_menu_second").hide()
    })

    $(".login_start").click(() => {
        $(".log_form_hide").show("fast")
        $("header").css("opacity", "0.5")
        $("main").css("opacity", "0.5")
        $("footer").css("opacity", "0.5")
    })
    $(".log_form_close").click(() => {
        $(".log_form_hide").hide("fast")
        $("header").css("opacity", "1")
        $("main").css("opacity", "1")
        $("footer").css("opacity", "1")
    })

    $(".btn_hover_log").mouseenter(() => {
        $(".log_form_btn_hide").show("fast")
    })
    $(".btn_hover_log").mouseleave(() => {
        $(".log_form_btn_hide").hide("fast")
    })
    $(".btn_hover_reg").mouseenter(() => {
        $(".reg_form_btn_hide").show("fast")
        $(".reg_form_btn_hide_p").css("color", "white")
    })
    $(".btn_hover_reg").mouseleave(() => {
        $(".reg_form_btn_hide").hide("fast")
        $(".reg_form_btn_hide_p").css("color", "blueviolet")
    })

    $(".header_btn_start").click(() => {
        $(".phone_form_hide").show("fast")
        $("header").css("opacity", "0.5")
        $("main").css("opacity", "0.5")
        $("footer").css("opacity", "0.5")
        $(".full_menu_hide").css("opacity", "0.5")
    })
    $(".phone_form_close").click(() => {
        $(".phone_form_hide").hide("fast")
        $("header").css("opacity", "1")
        $("main").css("opacity", "1")
        $("footer").css("opacity", "1")
        $(".full_menu_hide").css("opacity", "1")
    })
})