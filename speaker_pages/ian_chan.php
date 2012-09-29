<?php
$speaker_photo="ianchan.png";
$speaker_name="Ian Chan";
$speaker_job="Front End Engineer at Twitter";
$speaker_bio="
<p>
Ian Chan is a Sr. Software Engineer at Twitter, where he has worked on the Web and Platform team for the last 2.5 years. He graduated from the University of Toronto, studying Software Engineering and Computer Science. Prior to Twitter, he helped build user interfaces and consumer experiences for Thoora, Autodesk, and IBM.
</p>
";


$talk_abstract_id="chan_talk_abstract";
$talk_title="Engineering at Human Scale: Building Software for 1 to 100 million users";

$talk_time="Saturday @ 2:45PM";
$talk_location="1320 DCL";

$talk_abstract="
<p>
Building great software products for large consumer audiences is about solving big problems at huge scale, and a ton of code. As engineers, sometimes these challenges overshadow or distract us from the main goal: delivering great experiences to our users and customers. When hundreds of millions of users cause millions of lines of code to be run every second, the one in a million corner case can occur thousands of times a day. Things can break; things will break. How can we avoid, prepare for, and manage these unique, yet often inevitable, issues? This talk shares and investigates some of the more interesting corner cases encountered at Twitter over the years. Additionally Chan explores various techniques used to enable the smooth development and release of new software to millions of people around the world.
</p>
";

include "speaker_template.php";
?>
