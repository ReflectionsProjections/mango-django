<?php
$speaker_photo="andrew_ritz.png";
$speaker_bio_id="ritz_bio";
$speaker_name="Andrew Ritz";
$speaker_job="Development Manager for Windows at Microsoft";
$speaker_bio="
<p>
Andrew Ritz is the development manager for core networking in Windows, which provides the heart of secure, simple, and scalable communications for mobile devices, enterprise networks, and the cloud. Ritz helped enable network communications for Windows 8, and helped redefine the networking for the private/public/hybrid cloud through Hyper-V Network Virtualization and Hyper-V Extensible switch. A 16 year Microsoft veteran, Ritz was previously the development manager for the Windows Kernel, working on a number of server scalability projects, innovating on power management for mobile devices, and helping provide the abstraction layer between core platform hardware and Windows. Ritz holds a BS in Computer Engineering from the University of Illinois. In his spare time, he enjoys running, reading, following sports, and spending time with his family.
</p>
";


$has_talk_abstract=True;
$talk_abstract_id="ritz_talk_abstract";
$talk_title="Designing Windows for SOC PCs";

$talk_abstract="
<p>
The advent of System of Chip (SOC) PCs has generated a number of new opportunities for Windows. SOC PCs promise a tightly integrated system and unique new peripheral devices. SOC PCs introduce new usage models for consumers, and offer a new level of energy efficiency and battery life. To address this opportunity, Microsoft had to understand how an SOC PC could be best designed. In this talk, Ritz will review some of the key hardware components of SOC PCs and how Windows was optimized for these components. He will review how Windows evolved to support new usage models, and how battery life was optimized for SOC PCs.
</p>
";

include "speaker_template.php";
?>
