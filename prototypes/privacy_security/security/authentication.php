<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Authentication: you are who you say you are</h1>

Before allowing access to your account, a website will often verify that you are who you say.

You can think of this as the website providing the window lock, with you as the user bringing the key. If the key doesn't fit, you won't be able to enter.

The most familiar method of authentication for websites is a password. Phones often have passcodes. Some devices now even use biometric identification, like thumb-print unlocking on iPads.

Two-factor authentication adds an extra layer of verification. The person logging in needs to know the password and have access to a second device which is used to verify the password. Often it's a text message sent to a phone, or it can be a dedicated device like a bank secure key.

<hr/>
The other two components of access security are [[Identity|identity]] and [[Authorisation|authorisation]].

<hr/>

<em>[[Wait, what does that green padlock thingy mean?|transmission]]</em>

(if: (history:) contains "identity" and (history:) contains "authorisation")[
<hr/>
When you're happy with all three, you might like to know about [[things that can go wrong|wrong]]
]

</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
