$('.select2').select2()
$('.select2bs4').select2({
    theme: 'bootstrap4',
    templateResult: (state) => {
        let stateClass = ''

        if (state.id && $(state.element).hasClass('select2-lv2')) {
            stateClass = 'ml-2'
        }

        if (state.id && $(state.element).hasClass('select2-lv3')) {
            stateClass = 'ml-4'
        }

        if (state.id && $(state.element).hasClass('select2-lv4')) {
            stateClass = 'ml-5'
        }

        return $(`<span class="${stateClass}">${state.text}</span>`)
    }
})

