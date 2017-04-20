<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Authorisation: you're allowed to do the thing you want to do</h1>

Authorisation allows or limits what you can do on a website or device once it's authenticated your identity.

Some websites, like your bank's, won't let you do anything unless you're logged in.

Other websites will let you do some things without being logged in, but allow more once you do. For example, anyone can browse and filter items on eBay, but only logged-in users can bid on them.

<hr/>
The other two components of access security are [[Identity|identity]] and [[Authentication|authentication]].

<hr/>

<em>[[Wait, what does that green padlock thingy mean?|transmission]]</em>

(if: (history:) contains "identity" and (history:) contains "authentication")[
<hr/>
When you're happy with all three, you might like to know about [[things that can go wrong|wrong]]
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
