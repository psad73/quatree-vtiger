function setTimeNow(e) {
    var targetId = $(e).data('target-id');
    var today = new Date();
    var minutes = today.getMinutes();
    var time = today.getHours() + ":" + (minutes > 9 ? minutes : "0" + minutes);
    $('#' + targetId).val(time);
}