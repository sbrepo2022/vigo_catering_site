module.exports = {
    AnimText: function(selector, delay_print_t, delay_delete_t, print_t, delete_t) {
        this.anim_texts = [];
        this.cur_text_ind = 0;
        this.in_text_ind = 0;
        this.print_timer = null;

        /* initialisation */
        $(selector + ' > li').each((index) => {
            this.anim_texts.push($(selector + ` > li`).eq(index).text());
        });
        $(selector).html('');

        /* declarations */
        this.startPrinting = function () {
            clearInterval(this.print_timer);
            setTimeout(() => {
                this.print_timer = setInterval(() => {
                    if (this.in_text_ind < this.anim_texts[this.cur_text_ind].length) {
                        $(selector).append(this.anim_texts[this.cur_text_ind][this.in_text_ind]);
                        this.in_text_ind++;
                    }
                    else {
                        this.in_text_ind = 0;
                        this.cur_text_ind++;
                        if (this.cur_text_ind === this.anim_texts.length) {
                            this.cur_text_ind = 0;
                        }
                        this.startDeleting();
                    }
                }, print_t);
            }, delay_print_t);
        },

        this.startDeleting = function() {
            clearInterval(this.print_timer);
            setTimeout(() => {
                this.print_timer =  setInterval(() => {
                    this.cur_text = $(selector).html();
                    if (this.cur_text.length > 0) {
                        this.cur_text = this.cur_text.slice(0, -1);
                        $(selector).html(this.cur_text);
                    }
                    else {
                        this.startPrinting();
                    }
                }, delete_t);
            }, delay_delete_t);
        }

    }
};
