$(document).ready(function(){
  var timer_id = setInterval(function(){
    $.ajax({
      method: "GET",
      url: '/emoji',
      datatype: 'json',
      data: {timestamp:timestamp},
      success: function (response) {
        if (response.status == 'ok') {
          timestamp=response.timestamp;
          $(response.phrases).each(function(){
            $('.recent-data').append('<div>' + this + '</div>');
          });
        }
        else {
        }
      },
      error: function () {
        return false;
      }
    });
  }, 5000);

});