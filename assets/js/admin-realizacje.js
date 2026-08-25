(function ($) {
    'use strict';

    $(function () {

        /* ---------- Zdjęcie PO (pojedyncze, synchronizowane z obrazkiem wyróżniającym) ---------- */
        var afterFrame = null;

        $('#higloss_after_select').on('click', function (e) {
            e.preventDefault();
            if (afterFrame) {
                afterFrame.open();
                return;
            }
            afterFrame = wp.media({
                title: 'Wybierz zdjęcie PO (główne)',
                button: { text: 'Użyj jako PO' },
                multiple: false,
                library: { type: 'image' }
            });
            afterFrame.on('select', function () {
                var att = afterFrame.state().get('selection').first().toJSON();
                $('#higloss_after_image').val(att.id);
                var url = (att.sizes && att.sizes.medium) ? att.sizes.medium.url : att.url;
                $('#higloss_after_preview').html('<img src="' + url + '" alt="">');
                $('#higloss_after_remove').show();
            });
            afterFrame.open();
        });

        $('#higloss_after_remove').on('click', function (e) {
            e.preventDefault();
            $('#higloss_after_image').val('');
            $('#higloss_after_preview').html('<span class="hg-admin-empty hg-admin-empty--warn">Brak zdjęcia PO — realizacja pokaże obraz zastępczy.</span>');
            $(this).hide();
        });

        /* ---------- Zdjęcie PRZED (pojedyncze) ---------- */
        var beforeFrame = null;

        $('#higloss_before_select').on('click', function (e) {
            e.preventDefault();
            if (beforeFrame) {
                beforeFrame.open();
                return;
            }
            beforeFrame = wp.media({
                title: 'Wybierz zdjęcie PRZED',
                button: { text: 'Użyj jako PRZED' },
                multiple: false,
                library: { type: 'image' }
            });
            beforeFrame.on('select', function () {
                var att = beforeFrame.state().get('selection').first().toJSON();
                $('#higloss_before_image').val(att.id);
                var url = (att.sizes && att.sizes.medium) ? att.sizes.medium.url : att.url;
                $('#higloss_before_preview').html('<img src="' + url + '" alt="">');
                $('#higloss_before_remove').show();
            });
            beforeFrame.open();
        });

        $('#higloss_before_remove').on('click', function (e) {
            e.preventDefault();
            $('#higloss_before_image').val('');
            $('#higloss_before_preview').html('<span class="hg-admin-empty">Nie wybrano zdjęcia PRZED.</span>');
            $(this).hide();
        });

        /* ---------- Pola warunkowe wg kategorii ----------
         * Wybor pigułki przełącza widoczną grupę pól. Inputy ukrytych grup
         * dostają disabled — nie lecą w $_POST, więc serwer ich nie nadpisuje.
         */
        var $specGroups = $('.hg-field-group');

        function syncSpecGroups() {
            var cat = $('input[name="hg_kategoria"]:checked').val() || 'ogolna';
            $specGroups.each(function () {
                var $group = $(this);
                var show = $group.attr('data-cat') === cat;
                $group.toggle(show);
                $group.find(':input').prop('disabled', !show);
            });
            $('.hg-cat-pill').removeClass('is-active');
            $('input[name="hg_kategoria"]:checked').closest('.hg-cat-pill').addClass('is-active');
        }

        $(document).on('change', 'input[name="hg_kategoria"]', syncSpecGroups);
        syncSpecGroups();

        /* ---------- Auto-podpowiedź tytułu z pól specyfikacji ----------
         * Marka/model + wykonana usługa składają propozycję tytułu, np.
         * „BMW X5 — całościowa zmiana koloru". Podpowiedź uzupełnia pole
         * tylko dopóki jest puste albo równe poprzedniej podpowiedzi —
         * ręcznie poprawiony tytuł nigdy nie jest nadpisywany.
         */
        var $title = $('#title');
        var lastSuggestion = '';

        function buildTitleSuggestion() {
            var model   = ($('#higloss_car_model').val() || '').trim();
            var service = ($('#higloss_service_type').val() || '').trim();

            if (model && service) {
                service = service.charAt(0).toLowerCase() + service.slice(1);
                return model + ' — ' + service;
            }
            if (model) {
                return model;
            }
            if (service) {
                return service.charAt(0).toUpperCase() + service.slice(1);
            }
            return '';
        }

        function maybeSuggestTitle() {
            var suggestion = buildTitleSuggestion();
            if (!suggestion) {
                return;
            }
            var current = ($title.val() || '').trim();
            if (current === '' || current === lastSuggestion) {
                $title.val(suggestion).trigger('input');
            }
            lastSuggestion = suggestion;
        }

        $('#higloss_car_model, #higloss_service_type').on('input change', maybeSuggestTitle);
    });
})(jQuery);
