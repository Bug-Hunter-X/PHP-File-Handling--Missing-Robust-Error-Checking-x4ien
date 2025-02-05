```php
$file = @fopen("nonexistent_file.txt", "r");
if ($file) {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line
        echo $line;
    }
    fclose($file);
} else {
    // Handle the error
    $error = error_get_last();
    echo "Error opening file: " . $error['message'] . "\n";
}
```