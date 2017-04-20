<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>What you show</h1>

<p>How much are you comfortable with others knowing or seeing of your life: what you think and do, who you spend time with, where you go?</p>

<p>Consider people: friends, family, acquaintances, teammates; colleagues, bosses, employees.</p>

<ul>
  <li>Does what you share depend on, what you do, when you do it, or who you’re with?</li>
  <li>Are there things you don’t want to show or say of your free time, work time, family time?</li>
</ul>

<p>Consider events: weddings, birthdays and holidays; nights out and sports matches; conferences and leaving parties.</p>

<ul>
  <li>Does what you keep private online match what you keep private offline?</li>
  <li>What different things do you do in different contexts that might alter what you share?</li>
  <li>What might people think about you sharing events that involve them?</li>
</ul>

<p>Consider topics: morals, ethics, religion, politics, personal experiences.</p>
<ul>
  <li>Would you express the same views online to a wider audience as you would offline to a small group?</li>
  <li>Might you feel more open with a distant audience?</li>
  <li>What implications might expressing your views online have, beyond just making your point?</li>
</ul>
<hr/>
Other aspects of privacy:
<em>What you show</em>
[[To who|privacyWho]]
[[How|privacyHow]]
[[Where|privacyWhere]]
[[When|privacyWhen]]

(if: (history:) contains "privacyWho" and (history:) contains "privacyHow" and (history:) contains "privacyWhere" and (history:) contains "privacyWhen")[
<hr/>
Of course, sometimes, we hear about [[privacy breaches|breaches]].
]
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
