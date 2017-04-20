<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Identity: who you are</h1>

<p>Different websites will ask for different combinations of identifying information to create an account identity. This might include email address, username or nickname, real name, postal address, and postcode.</p>

<p>For example, the Weather Watchers site asks you to create a nickname to display alongside your photo, rather than using your real name.</p>

<p>Your identity is unique within each website. You can't usually have two accounts on the same site, which are tied to the same email address. But you might use the same identifying information on different websites.</p>

<hr/>
<p>The other two components of access security are <a href="authentication">Authentication</a> and <a href="authorisation">Authorisation</a>.</p>

<p><em>Wait, what does that green padlock thingy mean?|transmission</em></p>

(if: (history:) contains "authorisation" and (history:) contains "authentication")[
<hr/>
When you're happy with all three, you might like to know about things that can go wrong|wrong
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
