<?php
// Start the session
session_start();

// Retrieve the username from the session
if (isset($_SESSION['User_ID'])) {
    $User_ID = htmlspecialchars($_SESSION['User_ID']); // Sanitize the input

    // Format the data for HTML body content
    $data = "<p><strong>User_ID:</strong> $User_ID</p>\n";

    // Write each POST variable and its value to the string, wrapped in <p> tags
    foreach ($_POST as $variable => $value) {
        // Sanitize input
        $sanitizedValue = htmlspecialchars($value);
        $data .= "<p id='post-$variable'>$variable = <span class='copy-content'>$sanitizedValue</span> 
                  <button class='copy-btn' data-target='post-$variable'>Copy</button></p>\n";
    }

    $data .= "<hr>\n";

    // Check if form_data.html exists and is writable
    $filePath = "india.html";
    if (file_exists($filePath) && is_writable($filePath)) {
        // Read current content of form_data.html
        $currentContent = file_get_contents($filePath);

        // Find the position to insert the new data (right after <body> tag)
        $insertPosition = strpos($currentContent, "<body>") + 6;

        if ($insertPosition !== false) {
            // Insert new data at the calculated position
            $newContent = substr_replace($currentContent, $data, $insertPosition, 0);

            // Write the updated content back to form_data.html
            file_put_contents($filePath, $newContent);

            // Redirect to page3.php after processing
            header("Location: page3.php");
            exit(); // Ensure that no further code is executed after redirection
        } else {
            echo "Error: Could not find <body> tag in form_data.html";
        }
    } else {
        echo "Error: form_data.html is not writable or does not exist.";
    }
} else {
    echo "Access Denied";
}
?>
