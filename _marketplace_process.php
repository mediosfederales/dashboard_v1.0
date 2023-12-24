<?php
$action = $_POST['action'];
$htmlCode = $_POST['html_code'];
$filename = '_marketplace.php';

if ($action === 'insert') {
    // Read the contents of the _marketplace.php file
    $currentContent = file_get_contents($filename);

    // Insert the HTML code before <div class="end_widget_area"></div>
    $insertPosition = strpos($currentContent, '<div class="end_widget_area"></div>') - 1;
    $updatedContent = substr_replace($currentContent, $htmlCode . "\n\n", $insertPosition, 0);

    // Write the updated content back to the file
    file_put_contents($filename, $updatedContent);

    echo "HTML code inserted successfully!";
} elseif ($action === 'delete') {
    // Read the contents of the _marketplace.php file
    $currentContent = file_get_contents($filename);

    // Remove the HTML code
    $updatedContent = str_replace($htmlCode . "\n\n", '', $currentContent);

    // Write the updated content back to the file
    file_put_contents($filename, $updatedContent);

    echo "HTML code deleted successfully!";
} else {
    echo "Invalid action!";
}





if ($action === 'delete') {
    // Read the contents of the _marketplace.php file
    $currentContent = file_get_contents($filename);

    // Find the <div> with the specified ID and delete its content
    $divId = $_POST['div_id'];  // Get the ID from the form
    $startTag = "<div id=\"$divId\">";
    $endTag = "</div>";

    $startPos = strpos($currentContent, $startTag);
    $endPos = strpos($currentContent, $endTag, $startPos) + strlen($endTag);

    if ($startPos !== false && $endPos !== false) {
        $contentToDelete = substr($currentContent, $startPos, $endPos - $startPos);
        $updatedContent = str_replace($contentToDelete, '', $currentContent);

        // Write the updated content back to the file
        file_put_contents($filename, $updatedContent);

        echo "HTML code within <div id=\"$divId\"> deleted successfully!";
    } else {
        echo "No matching <div id=\"$divId\"> found!";
    }
}


?>







