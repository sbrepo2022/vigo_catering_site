const anim_text = require('./elements/anim_text.js');
const select_tabs = require('./elements/select_tabs.js');
const scroll_spy = require('./elements/scroll_spy.js');

$(function() {
    // jquery lazyload
    $('.lazy').lazy();

    // animation tagline
    let anim_text_1 = new anim_text.AnimText('.anim-add-text', 500, 600, 120, 40);
    anim_text_1.startPrinting();
    $('.anim-add-text').removeClass('d-none');

    // select tabs
    let select_tabs_1 = new select_tabs.SelectTabs('#selectPlanTabs');
    select_tabs_1.bind();

    let select_tabs_2 = new select_tabs.SelectTabs('#selectExplainTabs');
    select_tabs_2.bind();

    // scroll spy
    /*let scroll_spy_1 = new scroll_spy.ScrollSpy('#explainSection', $(window).height() * 0.7, $(window).height() * 0.7, 1, function (index) {
        switch (index) {
            case 0:
                $('.explain-group').each(function() {
                    for (let i = 0; i < $(this).children().length; i++) {
                        setTimeout(() => {
                            $($(this).children().get(i)).addClass('active');
                        }, 100 * i);
                    }
                });
        }
    });*/

    let scroll_spy_2 = new scroll_spy.ScrollSpy('#explainSection', $(window).height() * 0.7, $(window).height() * 0.1, 5, function (index) {
        for (let i = 1; i < index + 1; i++) {
            $(`.explain-number[data-index=${i - 1}]`).addClass('active');
        }
        for (let i = index; i < 4; i++) {
            $(`.explain-number[data-index=${i}]`).removeClass('active');
        }
        console.log(index);
    });

    // smooth scroll
    $("a[href^='#'][scroll-to]").click(function(){
            var _href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(_href).offset().top - ($(_href).outerHeight() - $(_href).height()) / 2 + "px"
            });
            return false;
    });

    // nofocus
    $('.nofocus').on('mousedown', function() {
    	return false;
    });
});
