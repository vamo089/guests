$(document).ready(function() {

    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "../mod/php/send.php",
            data: $(this).serialize()
        }).done(function() {
            $("#form").fadeOut("slow", function() {
                $('.sent').css('display', 'block');
                $('.sent').text('Ваше сообщение успешно отправлено ;)');
                $('.sent').addClass('success');
                $(this)[0].reset();
                setTimeout(function() {
                $('.sent').css('display', 'none');
                $('.sent').text('');
                $('.sent').removeClass('success');
            
            $("#form").fadeIn("slow", function() {

            });
              }, 3000);
            });

        }).fail(function() {
           $("#form").fadeOut("slow", function() {
                $('.sent').css('display', 'block');
                 $('.sent').text('Что-то пошло не так ;(');
                $('.sent').addClass('has-error');
                $(this)[0].reset();
                setTimeout(function() {
                $('.sent').css('display', 'none');
                $('.sent').text('');
                $('.sent').removeClass('success');
            
            $("#form").fadeIn("slow", function() {

            });
              }, 3000);
            });
           
        })
        return false;
    });


});