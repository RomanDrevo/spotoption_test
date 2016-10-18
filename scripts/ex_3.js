
$('select').on('change', function () {
    // console.log(option.val())
    var val = $(this).val().toLowerCase();
    $('div').removeClass('hide');
    $("." + val).addClass('hide');
});
