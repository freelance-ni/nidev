jQuery(document).ready(function(t){t(".explore").click(function(){var o=t(window).width(),e=0;o<=640&&(e=0),t("html,body").animate({scrollTop:t(".explore").offset().top-e},1e3)}),t(".portfolio-slider .text .text-btn .plus-icon").click(function(){return t(this).closest(".portfolio-item").find(".text").toggleClass("active"),!1})});