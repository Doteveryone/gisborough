<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">


<h1>What happens when I upload a photo?</h1>

<p class='standfirst'>When you visit the Weather Watchers site, you aren't just <em>on</em> the internet – you're actually part of it.</p>

<p>The internet is a network of millions of computers and devices, all connected to each other. When you go online, your computer joins this network too.</p>

<div class='image-block'>
  <img src="images/upload/the-internet.png" />
  <p class='caption'>The internet is a network of computers. TODO PLEASE CHANGE</p>
</div>


<p>To be part of the internet, all devices (including yours) have to follow rules about sending information.</p>

<div class='boxout side right'>
  <h2>Breaking the chain</h2>
  <div class='inner'>
    <p>If the internet is a network of devices, what happens when a link in that network breaks?</p>

    <p>Often, not a lot: because there are many routes to the same direction, your data takes a different route.</p>

    <p>Sometimes, though, if a key connection in the network breaks, than that can disrupt your access to the internet. If you've ever lost your internet connection at home, it might because of any one of the links - not necessarily the one leaving your house.</p>

    <p>The number of possible connections makes the internet resilient - but if a key connection goes down that a country or company relies on, it can impact lots of people's access. If your connection breaks, it may well not be your fault!</p>
  </div>
</div>

<p>
  The rules for what format to send data in are called <abbr title="HyperText Transfer Protocol">HTTP</abbr> (hypertext transfer protocol).<br/>
  The rules for where to send it and how are called <abbr title="Transmission Control Protocol / Internet Protocol">TCP/IP</abbr> (transmission control protocol / internet protocol).
</p>

<p>Here's what happens when you add a photo to the Weather Watchers page and click 'Post this report' – all within milliseconds.</p>

<h2>What is sent?</h2>
<p class='standfirst'>The most obvious data you send when you post your report is your image, your weather observations, and anything you write in the fields on the form.</p>

<p>You're also sending other data you didn't directly type into the form, such as your login identity. On other sites, this other data might be the date and time you make a post, or the clicks you took to arrive on the page.</p>

<h2>Where is it sent?</h2>
<p class='standfirst'>The data is sent to a particular <abbr title="Uniform Resource Locator">URL</abbr>. URLs are like addresses: they can represent the location of a page (like when you share a photo); they can also represent a location to send data to.</p>

<p>The URL your data is sent to might look like this:</p> 

<p><code>http://bbc.co.uk/weatherwatchers/send_report</code></p>

<p>In that address, "<code>bbc.co.uk</code>" is the <em>domain</em> and <code>/weatherwatchers/send_report</code> is the path.</p>

<p>The domain is a friendly name for the computer we're sending it to. The path describes where on that computer to send it.</p>

<p>To send your data, your device needs to know the domain's <abbr title="Internet Protocol">IP</abbr> (internet protocol) address. This is a unique string of numbers, and every device on the internet has one – including yours.</p>

<p>Your device finds out the BBC's IP address by sending a request to a system that records all IP addresses, called the domain name system (<abbr title="Domain Name System">DNS</abbr>).</p>

<p>Once the system's reply comes back, your device knows exactly where to send your data.</p>

<h2>How is it sent?</h2>
<p class='standfirst'>Now it's TCP/IP's turn. TCP/IP connects your device and the BBC's, so they can exchange data.</p>
<p>TCP/IP chunks your data up into small packets and numbers them.</p>

<p>Your packets can take lots of possible routes through the internet to reach the BBC, so TCP/IP guarantees they are all delivered, and in the order they were sent.</p>

<div style='width: 610px; margin: 0 auto 10px;' class='image-block'>
  <img src="images/upload/tcpip.png" />
  <p class='caption'>TCP/IP in action.</p>
</div>


<h2>Arrival</h2>
<p class='standfirst'>Your data packets arrive at the BBC's web server, which recombines them and uploads your data into the Weather Watchers software.</p>

<p>The software stores your photo, weather observations, and account details in a structured way, so the Weather Watchers site can access and link it later. (For example, it can link your location data later to create a list of 'Photos near you' featuring your image.)</p>

<p>All of this activity happens in milliseconds!</p>

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
