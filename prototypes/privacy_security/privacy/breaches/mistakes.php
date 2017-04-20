<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Mistakes</h1>

<p>A common mistake is being unaware of things being publicly visible. This is usually because a user hasn’t switched the settings on a site or app to match what they want, giving more people authorisation to view things.</p>

<p><a href="https://identity.utexas.edu/everyone/how-to-manage-your-social-media-privacy-settings" target="_blank">Find out how to check your settings on social media.</a></p>

<p>A common oversight is having one account identity inadvertently connect to another. For example, someone might use their real name and nickname on one site, but just a nickname on another. Googling could help someone link both accounts back to the real name.</p>

<p>Something commonly forgotten is what you share about other people. For example, if they’re in photos with you, or you mention them in a post. Your choices can affect, and maybe breach, other people’s privacy, just as theirs can yours. If you’re in doubt, ask before you post.</p>
<hr/>
<p>
  If it's not a <em>mistake</em>:<br/>
  It might be that someone's been <a href="permissions">given the wrong permissions</a>.<br/>
  It might just be that <a href="software">the software doesn't work correctly</a>.
</p>

(if: (history:) contains "breachPermissions" and (history:) contains "breachSoftware")[
<hr/>
That's everything here. You can go [[back to the start|Home]], or find out more about [[Security|security]].
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
