$(document).ready(function() {
  $("a.fakelink").click(function() {
    var url = this.href
    if(confirm("Normally, this link would take you straight to '"+url+"'. If you'd like to go there, click 'OK'; otherwise, 'cancel' will keep you on your current page.")) {
      window.location = this.href;
    } else {
      return false;
    }
  });
});