/**
 * Simple (ugly) code to handle comments vote up/down
 */

var $container = $('.js-vote-arrows');
$container.find('a').on('click', function (e) {
    e.preventDefault();
    var $link = $(this);

    $.ajax({
        url: '/comments/10/vote/' + $link.data('direction'),
        method: 'POST',
        success: function (response) {
            $container.find('.js-vote-total').text(response.votes)
        },
        error: function () {
            // TODO: agregar el manejo de errores luego.
        },
    });
});