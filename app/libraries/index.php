<?php 
    $path = '/dir1/myfile.php';
    $file = 'file1.txt';

    // Return filename
    // echo basename($path);

    // Return filename without extension
    // echo basename($path, '.php');

    // Return the dir name from path
    // echo dirname($path);

    // Check file exists
    // echo file_exists($file);

    // Get absolute path
    // echo realpath($file);

    // Check to see if file
    // echo is_file($file);

    // Check if writeable
    // echo is_writable($file);

    // Check if readable
    // echo is_readable($file);

    // Get filesize 
    // echo filesize($file);

    // Create directory
    // mkdir('testing');

    // Remove dir if empty
    // rmdir('testing');

    // Copy file
    // echo copy('file1.txt', 'file2.txt');

    // Rename file
    // rename('file2.txt', 'myfile.txt');

    // Delete file
    // unlink('myfile.txt');

    // Write from file to string
    // echo file_get_contents($file);

    // Adding text to a file
    // $current = file_get_contents($file);
    // $current .= ' Goodbye World';
    // file_put_contents($file, $current);

    // Open file for reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;

    // Open file for writing
    // $handle = fopen('file2.txt', 'w');
    // $txt = 'John Doe';
    // fwrite($handle, $txt);
    // fclose($handle);

?>