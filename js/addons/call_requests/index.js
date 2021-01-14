(function (_, $) {
  $.ceEvent('on', 'ce.commoninit', function (context) {
    var time_elements = context.find('.cm-cr-mask-time');

    if (time_elements.length === 0) {
      return true;
    }

    time_elements.mask('99:99');
  });
  $.ceEvent('on', 'ce.formpre_call_requests_form', function (form, elm) {
    var val_email = form.find('[name="call_data[email]"]').val(),
        val_phone = form.find('[name="call_data[phone]"]').val(),
        allow = !!(val_email || val_phone),
        error_box = form.find('.cm-cr-error-box'),
        dlg = $.ceDialog('get_last');
    error_box.toggle(!allow);
    dlg.ceDialog('reload');

    if (allow) {
      var product_data = $('[name="' + form.data('caProductForm') + '"]').serializeObject();
      $.each(product_data, function (key, value) {
        if (key.match(/product_data/)) {
          form.append('<input type="hidden" name="' + key + '" value="' + value + '" />');
        }
      });
    }

    return allow;
  });
  $.ceEvent('on', 'ce.dialog.before_open', function (dialog_state, params) {
    if (dialog_state.is_opening_allowed === false) {
      return;
    }

    if (params.purpose === 'call_request') {
      var product_id = $('[data-ca-product-id]').data('caProductId');
      var result = $("[name=product_form_".concat(product_id, "]")).ceFormValidator('check', true, null, true);
      dialog_state.is_opening_allowed = result;
    }
  });
})(Tygh, Tygh.$);