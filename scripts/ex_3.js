var option = $('select');

option.on('change', function () {
    console.log(option.val())
    if(option.val() == 'Green'){
        $('.green').toggleClass('hide');
    }
    if(option.val() == 'Red'){
        $('.red').toggleClass('hide');
        $('div').removeClass('hide');
    }
});
