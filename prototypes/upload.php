<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">


<h1>What happens when I upload a photo?</h1>

<p class='standfirst'>When you visit the Weather Watchers site, you aren't just <em>on</em> the internet &mdash; you're actually part of it.</p>

<p>The internet is a network of millions of computers and devices, all connected to each other. When you go online, your computer joins this network too.</p>

<div class='image-block'>
  <img src="images/upload/the-internet.png" />
  <p class='caption'>A simplified look at how your computer, tablet or phone connects with the vast internet network.</p>
</div>

<p>To be part of the internet, all devices (including yours) have to follow rules about sending information.</p>

<p>
  The rules for what format to send data in are called <abbr title="HyperText Transfer Protocol">HTTP</abbr>.
  The rules for where to send it and how are called <abbr title="Transmission Control Protocol / Internet Protocol">TCP/IP</abbr>.
</p>

<p>Here's what happens when you add a photo to the Weather Watchers page and click 'Post this report' &mdash; all within milliseconds.</p>

<h2>What is sent?</h2>
<p class='standfirst'>The most obvious data you send when you post a Weather Watchers report is your photo, your weather observations, and anything you write in the fields on the form.</p>

<div class='image-block'>
  <img src="images/upload/weather-watchers-upload.png" />
  <p class='caption'>How a Weather Watchers report page might look before upload.</p>
</div>

<p>You're also sending other data you didn't directly type into the form, such as your login identity, so your photo can be linked to your profile.</p>

<p>On other sites, this data might be the date and time you make a post, or the clicks you took to arrive on the page.</p>

<h2>Where is it sent?</h2>
<p class='standfirst'>The data is sent to a particular <abbr title="Uniform Resource Locator">URL</abbr>. URLs are like addresses. They can represent the location of a page (like when you share a photo). They can also represent a location to send data to.</p>

<p>The URL your data is sent to might look like this:</p> 

<p><code>http://bbc.co.uk/weatherwatchers/send_report</code></p>

<p>In that address, "<code>bbc.co.uk</code>" is the domain and <code>/weatherwatchers/send_report</code> is the path.</p>

<p>The domain is a friendly name for the computer we're sending it to. The path describes where on that computer to send it.</p>

<p>To send your data, your device needs to know the domain's <abbr title="Internet Protocol">IP</abbr> (internet protocol) address. This is a unique string of numbers, and every device on the internet has one &mdash; including yours.</p>

<p>Your device finds out the BBC's IP address by sending a request to the <abbr title='Domain Name System'>DNS</abbr> which records all IP addresses.</p>

<p>Once the system's reply comes back, your device knows exactly where to send your data.</p>

<h2>How is it sent?</h2>
<p class='standfirst'>TCP/IP connects your device and the BBC's, so they can exchange data.</p>

<p>TCP/IP also chunks your data up into lots of very small packets and numbers them.</p>

<p>Your packets can take lots of possible routes through the internet to reach the BBC, so TCP/IP guarantees they are all delivered, and in the order they were sent.</p>

<div style='width: 610px; margin: 0 auto 10px;' class='image-block'>
  <img src="images/upload/tcpip.png" />
  <p class='caption'>How TCP/IP sends your photo</p>
</div>


<h2>Arrival</h2>
<p class='standfirst'>Your data packets arrive at the BBC's web server, which recombines them and uploads your data into the Weather Watchers software.</p>

<p>The software stores your photo, weather observations, and account details in a structured way, so the Weather Watchers site can access and link it later.</p>

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
