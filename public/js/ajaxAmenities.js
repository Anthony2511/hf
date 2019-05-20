function ajaxAmenities() {
    var button = $('#load-more');
    $('document').ready(function () {
        button.on('click', function (e) {
            e.preventDefault();
            var page = $(this).attr('href');
            if (typeof page !== 'undefined' && page.search('page=') !== -1) {
                $.ajax({
                    url: page,
                    beforeSend: function () {
                        button.addClass('loading');
                    },
                    success: function (data) {
                        $('#container-ajax').append(data.amenities);
                        button.attr('href', data.next_page);
                        button.removeClass('loading');
                    }
                });
            } else {
                button.addClass('finish');
                button.replaceWith($('<span class="load-more finish">' + this.innerHTML + '</span>'));
                $('.load-more__label-text').text('T\'arrives au bout, remontes !');
            }
        });
    });
}

ajaxAmenities();