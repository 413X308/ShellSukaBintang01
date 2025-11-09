<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    $url = "https://egre55.com/resources/us.php";  // Fixed double slash
    
    // Try cURL first
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Optional: Skip SSL verification if needed (use cautiously)
        $output = curl_exec($ch);
        
        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
        } else {
            echo $output;  // Output the fetched content
        }
        
        curl_close($ch);
    } else {
        // Fallback to file_get_contents if cURL is unavailable
        $context = stream_context_create([
            "http" => [
                "method" => "GET",
                "header" => "User-Agent: PHP Script\r\n"
            ]
        ]);
        $output = file_get_contents($url, false, $context);
        
        if ($output === false) {
            echo "Error: Unable to fetch data from $url";
        } else {
            echo $output;  // Output the fetched content
        }
    }
?>
