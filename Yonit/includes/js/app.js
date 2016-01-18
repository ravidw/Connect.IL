$(document).ready(function(){
    var credentials = [
        {email: 'pierre@pierre.com', password: 'pierre'},
        {email: 'orit@orit.com', password: 'orit'},
        {email: 'admin@admin.com', password: 'admin'}
    ];

    $('.btn-login').click(function(){
        var mail = $('#login-form .modal-body input[type=email]');
        var pass = $('#login-form .modal-body input[type=password]');
        var form = $('#login-form');
        var mailIsValid = false;
        var passIsValid = false;

        form.submit(function(event){
            if(!mail.val()){
                mail.addClass('invalid-input');
                event.preventDefault();
            }
            else{
                $.each(credentials, function(i, obj){
                    if(obj.email == mail.val()){
                        mailIsValid = true;
                    }
                });

                if(!mailIsValid){
                    mail.addClass('invalid-input');
                    event.preventDefault();
                }
            }

            if(!pass.val()){
                pass.addClass('invalid-input');
                event.preventDefault();

                return;
            }
            else{
                $.each(credentials, function(i, obj){
                    if(obj.password == pass.val()){
                        passIsValid = true;
                    }
                });

                if(!passIsValid){
                    pass.addClass('invalid-input');
                    event.preventDefault();

                    return;
                }
            }

            return;
        });
    });

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

    $('#pending-requests').click(function(){

    });
});
