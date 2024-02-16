import { ajax } from '@admin_js/modules/form'

// IIFE - Immediately Invoked Function Expression
(function (main) {

    // The global jQuery object is passed as a parameter
    main(window.jQuery, window, document);

}(function ($, window, document) {
    // The $ is now locally scoped
    // Listen for the jQuery ready event on the document
    $(function () {
        // The DOM is ready!

    });
}));
