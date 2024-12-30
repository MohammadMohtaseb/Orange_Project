<?php
$zip = new ZipArchive();
if ($zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
    $zip->addFromString('test.txt', 'Hello, world!');
    $zip->close();
    echo 'Zip file created successfully!';
} else {
    echo 'Failed to create zip file.';
}
?>
