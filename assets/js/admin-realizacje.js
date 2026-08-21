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

        /* ---------- Galeria ujęć dodatkowych (multi) ---------- */
        var $idsInput = $('#higloss_gallery_images');
        var $preview  = $('#higloss_gallery_preview');
        var galFrame  = null;

        function renderGallery() {
            $preview.empty();
            var ids = $idsInput.val() ? $idsInput.val().split(',').filter(Boolean) : [];

            if (!ids.length) {
                $preview.html('<span class="hg-admin-empty">Brak ujęć. Kliknij „Dodaj / edytuj ujęcia…".</span>');
                return;
            }

            ids.forEach(function (id) {
                var attachment = wp.media.attachment(id);
                attachment.fetch().then(function () {
                    var data = attachment.toJSON();
                    var url = (data.sizes && data.sizes.thumbnail) ? data.sizes.thumbnail.url : data.url;
                    var $item = $('<div class="hg-gal-item">' +
                        '<img src="' + url + '" alt="">' +
                        '<button type="button" class="hg-gal-remove" data-id="' + id + '" aria-label="Usuń ujęcie">&times;</button>' +
                        '</div>');
                    $preview.append($item);
                });
            });
        }

        renderGallery();

        $('#higloss_upload_gallery_btn').on('click', function (e) {
            e.preventDefault();
            if (galFrame) {
                galFrame.open();
                return;
            }
            galFrame = wp.media({
                title: 'Wybierz ujęcia do galerii realizacji',
                button: { text: 'Dodaj do galerii' },
                multiple: true,
                library: { type: 'image' }
            });
            galFrame.on('select', function () {
                var selection = galFrame.state().get('selection');
                var current = $idsInput.val() ? $idsInput.val().split(',').filter(Boolean) : [];
                selection.each(function (att) {
                    var id = att.toJSON().id.toString();
                    if (current.indexOf(id) === -1) {
                        current.push(id);
                    }
                });
                $idsInput.val(current.join(','));
                renderGallery();
            });
            galFrame.open();
        });

        $preview.on('click', '.hg-gal-remove', function (e) {
            e.preventDefault();
            var removeId = $(this).data('id').toString();
            var current = $idsInput.val().split(',').filter(Boolean);
            $idsInput.val(current.filter(function (id) { return id !== removeId; }).join(','));
            renderGallery();
        });

        $('#higloss_clear_gallery_btn').on('click', function (e) {
            e.preventDefault();
            if (window.confirm('Usunąć wszystkie ujęcia z galerii tej realizacji?')) {
                $idsInput.val('');
                renderGallery();
            }
        });
    });
})(jQuery);
