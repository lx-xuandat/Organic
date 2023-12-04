import { ajax} from '../modules/form'

(function (callback) {
    callback(window.jQuery, ajax)
}(function ($, ajax) {
    $(function () {
        $.ajaxSetup(ajax)

        $('.js-add-to-cart').on('click', function (e) {
            e.preventDefault()

            let data = {
                quantity: $('input[name="product[qty]"]').val(),
                id: $('input[name="product[id]"]').val(),
            }

            $.post("/add-to-cart", data)
                .then((xhr) => {
                    console.log(xhr)
                })
                .catch((x) => {
                    console.log(err)
                })
        });
    })
}))
