<?php
$speaker_id="hunter";
$speaker_photo="rianhunter.png";
$speaker_name="Rian Hunter";
$speaker_job="Software Engineer at Dropbox";
$speaker_bio="
<p>
Rian Hunter is Dropbox’s third engineer. He’s developed and helped shape the entire product from its early alpha and beta versions to its current form, supporting millions of users today. He’s a graduate from MIT, and his experience spans distributed computing, highly concurrent systems, databases, file systems, kernel and embedded programming, and data synchronization algorithms.
</p>
";


$talk_abstract_id="hunter_talk_abstract";
$talk_title="Dropbox Notification Servers";
$talk_time="Saturday 10/6 @ 4PM";
$talk_location="1310 DCL";

$talk_abstract="
<p>
Dropbox aims to propagate changes across your computers as fast as possible. In most cases, as soon as a file is changed on your phone or on the web or another computer, the new data is usually available on all your computers within seconds. At the core of this system is a small number of highly-efficient and custom-built servers, each responsible for notifying millions of computers when they should be syncing with Dropbox. In this talk, you’ll hear about how Dropbox engineered this system, pushed the Linux networking stack to its absolute limit to blow the C10K problem out of the water, and came to support tens of millions of connected users with roughly a dozen servers.
</p>
";

include "speaker_template.php";
?>
