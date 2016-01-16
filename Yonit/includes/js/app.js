$(document).ready(function(){
    $('#results .media:last-child').removeClass('bottom-border');

    $('.btn-search').click(function(){
        var input = $('.search-box input');
        var form = $('#search-form');

        form.submit(function(event){
            if(!input.val()){
                input.addClass('invalid-input');
                event.preventDefault();
            }

            return;
        });
    });

    $('#search-range').datepicker({
        inputs: $('.range'),
        clearBtn: true,
        startDate: '0'
    });

    $(function() {
        $('.readonly-rate-bar').barrating({
            theme: 'bootstrap-stars',
            readonly: true
        });
    });

    var imgNum = 1;
    window.setInterval(function(){
        imgNum == 4 ? imgNum = 1: imgNum++;

        $('#main-image').css('background-image', 'url("includes/images/back' + imgNum + '.jpg")')
    }, 5000);
});
