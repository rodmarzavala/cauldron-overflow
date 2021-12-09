/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import $ from 'jquery';

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
            $link.closest('li').find('.js-vote-total').text(response.votes)
        },
        error: function () {
            // TODO: agregar el manejo de errores luego.
        },
    });
});

console.log('Hello Webpack Encore!');