<?php
require_once("start.php");
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once("head.php"); ?>
</head>
<body style="padding: 0px 10px 0px 10px">
<div class="container">
<?php require_once("nav.php"); ?>
<?php if ( ! $CFG->OFFLINE ) { ?>
<div class="hidden-phone hidden-tablet" style="width: 560; float: right; margin:10px;">
<iframe width="450" height="253" src="https://www.youtube.com/embed/hRNFBhEykcY" frameborder="0" allowfullscreen></iframe>
</div>
<?php } ?>
<p>
If you are a teacher and interested in reusing my materials, this is my plan:
<ul>
<li>My textbook is Creative Commmons Share Alike - so it is free in PDF form - I need to get it into HTML and EPUB3 form ASAP</li>
<li>All my lecture slides will be Creative Commons - they are in Apple's Keynote as their native format - but I export them to PowerPoint
and make that available for you to download - 
they are not as pretty as Keynote but with a little cleanup they work.</li>
<li>All of my recorded videos will be up on YouTube and you can use them any way you like.   
</li>
<li>My autograder is an IMS Learning Tools Interoperability tool - it is also PHP 
and open source so you could easily install it yourself.
Again for small/medium clases, I can give you a key so you can use my UMich-hosted 
instance of the autograder for free.
You can use the autograder directly without a key - but if you want it to pass 
grades to your LMS automatically, 
we need to set up a key.
</li>
<li>I should be able to get this into an IMS Common Cartridge format as well and once I did that, the course could be imported 
into D2L, Sakai, Blackboard Learn, Canvas, etc.</li>
<li>I am doing this in Moodle and I will provide you with a Moodle backup of the course and instructions on how to drop it into your Moodle.</li>
<li>I may even let folks use my Moodle instance to host their own classes using my dr-chuck online system and its associated Moodle.  
Maybe I will make a one-click way to whip up a new instance of a course for a roster of your choosing.
Heck - who knows where I go with this.
</ul>
<p>
So give me a little time and stay in touch if you are a teacher interested in reusing this content, software, or technology.  I should 
probably start a Google Community or something about this... Hmmm.  For now I need to write code.
</p>
<p>
Charles Severance - 
Tue Jan 15 20:08:38 EST 2013
</p>
<?php require_once("footer.php"); ?>
</div>
</body>
