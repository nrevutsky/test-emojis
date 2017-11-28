function sendText () {
  text = $('#input-field').val();
  if (text != '') {
    $.ajax({
      method: "POST",
      url: '/emoji',
      datatype: 'json',
      data: {text: text},
      success: function (response) {
        if (response.status == 'ok') {
          $('.recent-data').append('<div>' + response.text + '</div>');
          $('#input-field').val('');
        }
        else {
        }
      },
      error: function () {
      }
    });
  }
  $('#input-field').focus();
  return false;
}
$(document).ready(function(){
  $('#input-field').focus();
  $(document).keypress(function(e) {
    if(e.which == 13) {
      sendText();
    }
  });
  $('.emoji-list a').click(function(){
    cursor_position=document.getElementById('input-field').selectionStart;
    string=$('#input-field').val();
    new_string=string.slice(0,cursor_position) + $(this).attr('data-text') + string.slice(cursor_position+Math.abs(0));
    $('#input-field').val(new_string);
    return false;
  });
  $('#submit-button').click(function(){
    return sendText();
  });
});