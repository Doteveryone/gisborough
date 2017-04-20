<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>How you show it</h1>

<p>You can choose how closely tied your real identity is to your online accounts.</p>

<p>Are you using your real name? Are you completely anonymous? Are you using a pseudonym, like a nickname or handle?</p>

<p>Can people work out who you are from it? Does that matter to you or in your wider life?</p>

<p>Decide what level of identity you're comfortable with, and in which context. You might find it varies.</p>
<hr/>
Aspects of privacy:
[[What you show|privacyWhat]]
[[To who|privacyWho]]
<em>How</em>
[[Where|privacyWhere]]
[[When|privacyWhen]]

(if: (history:) contains "privacyWhat" and (history:) contains "privacyWho" and (history:) contains "privacyWhere" and (history:) contains "privacyWhen")[
<hr/>
Of course, sometimes, we hear about [[privacy breaches|breaches]].
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
