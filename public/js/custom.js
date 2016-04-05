
$(document).on('click','a#writeAns', function (e) {
    var q_id=this.name;
    $('[name="'+q_id+'"]').show();
    $(this).hide();
    $(document).on('submit','form[name="'+q_id+'"]', function (e) {
        var answer= $(this).find('textarea').val();
        if(answer!=''){
            $.ajax({
                url:'submit',
                method:'post',
                data:{answer:answer,question:q_id},
                success: function (data) {
                    $('[id="'+q_id+'"]').remove();
                }
            });
        }
        e.preventDefault();
    });
});

