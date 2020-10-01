module.exports = {
    ScrollSpy: function(selector, top_enter, bottom_exit, cut_parts, callback) {
        this.cur_cut = -1;

        $(window).on('scroll', () => {
            let offset = $(selector).offset().top;
            let scroll = $(window).scrollTop() + top_enter;
            let top_entry_offset = scroll - offset;
            let height = $(selector).outerHeight() - (bottom_exit - top_enter);
            if (top_entry_offset > 0) {
                let cut = Math.round((top_entry_offset / height) * cut_parts);
                if (cut != this.cur_cut && cut < cut_parts) {
                    this.cur_cut = cut;
                    callback(cut);
                }
            }
        });
    }
};
