<?php include($_SERVER['DOCUMENT_ROOT']."/prototype_header.php"); ?>

<div id="main">

<h1>Authentication: you are who you say you are</h1>

<?php include($_SERVER['DOCUMENT_ROOT']."/prototypes/privacy_security/navigator.php"); ?>

<p class='standfirst'>Before allowing access to your account, a website will often verify that you are who you say.</p>

<p>You can think of this as the website providing the window lock, with you as the user bringing the key. If the key doesn't fit, you won't be able to enter.</p>

<p>The most familiar method of authentication for websites is a password. Phones often have passcodes. Some devices now even use biometric identification, like thumb-print unlocking on iPads.</p>

<p>Two-factor authentication adds an extra layer of verification. The person logging in needs to know the password and have access to a second device which is used to verify the password. Often it's a text message sent to a phone, or it can be a dedicated device like a bank secure key.</p>

<hr/>
<p>The other two components of access security are <a href="identity">Identity</a> and <a href="authorisation">Authorisation</a>.</p>

<hr/>
<p>When you're happy with all three, you might like to know about <a href="problems">things that can go wrong.</a></p>

<div class='boxout'>
  <h2>What about that green padlock symbol?</h2>
  <div class='inner'>
    <p>You might have noticed the green padlock symbol in your browser bar.</p>

    <p>This symbol means that all of the computers that are part of the network leading to an end website, are sending data securely.</p>

    <p>This symbol means that your data will be sent securely between your device and its destination. No computer that your data passes through en route will be able to see what you're sending - it's private between you and the endpoint</p>

    <p>It doesn’t mean that what you do on the website stays private, or that the end website stores your data securely.</p>

    <p>All e-commerce websites have the green padlock because they ask buyers to send them credit card details. Never pay for anything on a website that doesn’t have a green padlock.</p>
  </div>
</div>

</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
