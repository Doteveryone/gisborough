<h2>Concertinas</h2>

<script type="text/javascript">
  $(document).ready(function() {
    $("a.concertina-link").click(function(e) {
      $("a.concertina-link").removeClass('selected');
      $(this).addClass('selected');
      var concertinaName = $(this).data('concertina-target');
      $(".concertina").hide();

      var concertina = $(".concertina[data-concertina-name=" + concertinaName + "]")

      concertina.fadeIn();

      $(window).scrollTo(concertina[0], 0, {over: -0.5})

      return false;
    });

    $("a.concertina-return").click(function() {
      $(this).parents(".concertina").fadeOut();
      $("a.concertina-link").removeClass('selected');
      return false;
    })
  });
</script>

<p><a name='concertina-what' class="concertina-link" data-concertina-target="what" href="#">WHAT</a> gets sent to the server is described by <abbr title="HyperText Transfer Protocol">HTTP</abbr>.</p>

<p><a name='concertina-where' class="concertina-link" data-concertina-target="where" href="#">WHERE</a> it is sent and <a name='concertina-how' class="concertina-link" data-concertina-target="how" href="#">HOW</a> it is sent are described by <abbr title='Transfer Control Protocol / Internet Protocol'>TCP/IP</abbr>.

<div class='concertina boxout' data-concertina-name="what">
  <h2>WHAT is sent to the server <a href="#concertina-what" class='concertina-return'>⏎</a></h2>
  <div class='inner'>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco.</p>
    <p>laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>

<div class='concertina boxout' data-concertina-name="where">
  <h2>How a computer works out WHERE to send data <a href="#concertina-where" class='concertina-return'>⏎</a></h2>
  <div class='inner'>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco.</p>
    <p>laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>

<div class='concertina boxout' data-concertina-name="how">
  <h2>HOW your data is sent to the server <a href="#concertina-how" class='concertina-return'>⏎</a></h2>
  <div class='inner'>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco.</p>
    <p>laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>