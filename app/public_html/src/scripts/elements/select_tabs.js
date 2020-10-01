module.exports = {
    SelectTabs: function(selector) {
        this.bind = function() {
            let width = $(selector + ' > a.active').outerWidth();
            $(selector + ' > .highlighter').css('left', 0);
            $(selector + ' > .highlighter').css('width', width);

            $(selector + ' > a').on('click', function() {
                let left = $(this).position().left;
                let width = $(this).outerWidth();
                $(selector + ' > .highlighter').css('left', left);
                $(selector + ' > .highlighter').css('width', width);
                console.log(selector);
            });

            $(window).resize(() => {
                let left = $(selector + ' > a.active').position().left;
                let width = $(selector + ' > a.active').outerWidth();
                $(selector + ' > .highlighter').css('left', left);
                $(selector + ' > .highlighter').css('width', width);
            });
        }
    }
};
