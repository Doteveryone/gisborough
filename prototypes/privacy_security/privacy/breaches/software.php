<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Poor software</h1>

<p>Poorly designed software can make it unclear what’s public and what’s private. Settings and functions might be complicated to use, or it might be difficult to check what’s visible to whom.</p>

<p>Badly made software could have bugs that unintentionally reveal information to the wrong users. These are often caught and fixed, but not always.</p>
<hr/>

<p>
  If it's not <em>poor software</em>:<br/>
  It might be that someone <a href="mistakes">made a mistake</a>.<br/>
  It might be that someone's been <a href="permissions">given the wrong permissions</a>.
</p>

(if: (history:) contains "breachMistake" and (history:) contains "breachPermissions")[
<hr/>
That's everything here. You can go [[back to the start|Home]], or find out more about [[Security|security]].
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
