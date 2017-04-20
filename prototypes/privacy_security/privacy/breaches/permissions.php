<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Lack of permission</h1>

<p>Other people’s content isn’t yours to use without their permission, and vice versa.</p>

<p>Anyone can link to a Weather Watchers photo without permission, but it shouldn’t be copied for another use without their permission.</p>

<p>Some sites and apps have terms and conditions on the use of members’ content. Copyright law also applies, just as it does to offline creative outputs.</p>

<p>There are exceptions for <a href="https://en.wikipedia.org/wiki/Creative_Commons" target="_blank">Creative Commons</a> and public domain content. If you’re in doubt, don’t copy.</p>
<hr/>

<p>
  If it's not a <em>lack of permission</em>:<br/>
  It might be that someone <a href="mistakes">made a mistake</a>.<br/>
  It might just be that <a href="software">the software doesn't work correctly</a>.
</p>

(if: (history:) contains "breachMistake" and (history:) contains "breachSoftware")[
<hr/>
That's everything here. You can go [[back to the start|Home]], or find out more about [[Security|security]].
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
