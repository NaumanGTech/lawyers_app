$(document).ready(function(){
    alert('ok');
    $('.chat-list-link').click(function(){
        var receiver_id = $(this).attr('data-id');
        alert(receiver_id);
    })
});
