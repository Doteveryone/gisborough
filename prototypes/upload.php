<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">


<div class='sticky-header'>
  <div class='progbar'>
  </div>
  <h1>What happens when I upload a photo?</h1>
</div>

<p class='standfirst'>When you upload a photo to the the Weather Watchers site, you’re using the internet. But what <em>is</em> the internet?</p>

<p>The internet is a vast network of millions of computers and devices, all connected to each other.</p>

<p>When you go online, your computer joins this network too - and you connect to the BBC via some of these other computers on the way.</p>

<div class='image-block'>
  <h3 class='caption'>Your computer connects to the BBC via a network of computers</h3>
  <div class='inner'>
    <video loop autoplay src="images/upload/internet.mp4" style='max-width: 100%'>
      When you connect to the internet, you connect to your destination through many other networked computers. Other people are doing this at the same time as you.
    </video>
  </div>
</div>

<p>Here's what happens when you add a photo to the Weather Watchers page and click 'Post this report' — all within milliseconds.</p>

<h2>What is sent?</h2>
<p class='standfirst'>You send the data you can see directly on the upload page, and some data you can’t.</p>

<p></p>

<div class='image-block'>
  <h3 class='caption'>Your Weather Watchers upload also sends your login identity, so your photo can be linked to your profile.</h3>
  <div class='inner'>
    <img src="images/upload/form-with-hidden-data.png" />
  </div>
</div>

<p>On other sites, this extra data might be the date and time you make a post, or the clicks you took to arrive on a page.</p>

<h2>Where is it sent?</h2>

<p class='standfirst'>The upload data is sent to a particular <abbr title="Uniform Resource Locator">URL</abbr>, which is like a postal address.</p>

<p>A URL describes a location on the internet. That could be a page on a website (like the Weather Watchers home page) or a place to send data to.</p>

<div class='image-block'>
  <h3 class='caption'>The URL your data is sent to might look like this:</h3> 
  <div class='inner'>
    <video loop autoplay src="images/upload/url-animation.mp4" style='max-width: 100%'>
      In the URL "http://www.bbc.co.uk/weatherwatchers/upload", "www.bbc.co.uk" is the Domain, and "/weatherwatchers/upload" is the Path.
    </video>
  </div>
</div>

<p>The domain is a friendly name for the computer we're sending it to. The path describes where on that computer to send it.</p>

<p>Your device needs to translate the domain into an IP address (internet protocol). This is a unique string of numbers, and every device on the internet has one — including <a href="https://www.google.co.uk/search?hl=&site=&q=what%27s+my+ip+address">yours</a>.</p>


<div class='image-block'>
  <h3 class='caption'>Your device finds out the BBC's IP address by sending a request to the domain name system (DNS) which records all IP addresses.</h3>
  <div class='inner'>
    <video loop autoplay src="images/upload/dns-lookup.mp4" style='max-width: 100%'>
      Your device asks the DNS system what the IP address for www.bbc.co.uk is. The DNS system tells your device that it's 212.58.246.91. Your device then sends its full request to 212.58.246.91.
    </video>
  </div>
</div>

<h2>How is it sent?</h2>
<p class='standfirst'>TCP/IP is a set of rules about sending and receiving information, meaning your device and the BBC’s can exchange data.</p>

<div class='image-block'>
  <h3 class='caption'>Your packets can take lots of possible routes through the internet to reach the BBC. TCP/IP also guarantees they’re all delivered, and in order.</h3>
  <div class='inner'>
    <video loop autoplay src="images/upload/tcpip.mp4" style='max-width: 100%'>
      Your photo is broken down up into packets which are addressed, and sent to the server.
    </video>
  </div>
</div>

<h2>And finally...</h2>
<p class='standfirst'>The web server now uses the path in the URL to direct your upload to the Weather Watchers software.</p>
<p>This stores your photo, weather observations, and account details in a structured way, so the Weather Watchers site can access and link it later.</p>
<p>All of this activity happens in milliseconds!</p>

<div class='boxout'>
  <h2>When the internet breaks</h2>
  <div class='inner'>

    <p>If the internet is a network of devices, what happens when a connection in that network breaks?</p>
    <p>Often, not a lot. There are so many connections, your data will just take a different route. This gives the internet resilience.</p>
    <p>If a key connection in the network breaks, that can disrupt your access to the internet.</p>
    <p>For instance, if you lose your internet connection at home, any one of the connections in the long chain might have broken – not necessarily the one leaving your house.</p>
    <p>So if your connection breaks while downloading a webpage or uploading a photo, it may well not be your fault!</p>

  </div>

</div>

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
