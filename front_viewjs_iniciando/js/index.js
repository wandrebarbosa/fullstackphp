$(document).ready(function() {
    /**
     * Add evento de click
     */
    function onAdd() {
        var $ul, li, $li, $label, $div, item;
        item = $('.js-novo-item').val();

        //valida se o "item" está vazio
        if (item === '') {
            return;
        }

        $ul = $('ul');
        $li = $('<li>').appendTo($ul);
        $div = $('<div>')
                .addClass('checkbox')
                .appendTo($li);

        $label = $('<label>').appendTo($div);
        $('<input>')
                    .attr('type', 'checkbox')
                    .addClass('js-item')
                    .attr('name', 'list')
                    .click(toggleRemovido)
                    .appendTo($label);

        $label.append(item);
        $('.js-novo-item').val('');
    }

    /**
     * Evento de click do checkbox
     */
    function toggleRemovido(ev) {
        var $el;
        $el = $(ev.currentTarget);
        $el.closest('li').toggleClass('removido');

    }
    $('.js-add').click(onAdd);
    $('.js-item').click(toggleRemovido);
});