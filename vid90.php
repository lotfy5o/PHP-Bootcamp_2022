<?php

// (1) glob
// (2) rename
// (3) copy
// (4) unlink

echo "<pre>";
// *.* => every file of every extenstion
//  .php or .txt or anything
// *.txt => every file of .txt extentsion
// "<dir>/*.txt" => every text file inside 
// that directory, for example "vid90/*.txt"
// every text file inside the file vid90

print_r(glob("vid90/*.txt"));
echo "</pre>";

// [Rename => Same Place]

// change the name of the file "vid90_1.txt"
// into "vid90_first.txt"
// rename("vid90/vid90_1.txt", "vid90/vid90_first.txt");


// [Rename => Other Place] = Cut in windows
// rename("vid90/vid90_first.txt", "vid90/other/vid90_first_other.txt");

// [Move To Other Place]
// rename("vid90/lotfy.pptx", "vid90/other/lotfy.pptx");

// [Copy Without Rename]
// rename("vid90/Info.docx", "vid90/other/Info.docx");

// [Copy With Rename]
// rename("vid90/work.txt", "vid90/other/work_other.txt");



unlink("vid90/delete_me.txt");