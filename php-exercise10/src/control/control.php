<?php
require "src/model/model.php";
use model\FileSettings;

$message = '';
$filename = '';
$message1 = '';
$text = '';
$x = 0;
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $setting = new FileSettings();

    if(isset($_POST['fileFun'])){
        $fileFun = $_POST['fileFun'];
        switch($fileFun){
            case 'create' :         
                $filename = $_POST['fileName'].".txt";
                $_SESSION["filename"] = $filename;
                
                $text = empty($_POST['textWritten']) ? ' ' : $_POST['textWritten'];

                $_SESSION["text"] = $text;
                $file = fopen($filename, "w") or die("unable to open file!");
                $message1 = $setting->create($file, $text);
                fclose($file);

                $file2 = fopen($filename, "r") or die("unable to read file!");
                $message = $setting->read($file2, $filename);
                fclose($file2);
                break;
            case 'update' :            
                $filename = $_SESSION['filename'];
                $text = $_POST['textWritten'];
                $file = fopen($filename, "a") or die("unable to update file!");
                $message1 = $setting->update($file, $text);
                fclose($file);

                $file2 = fopen($filename, "r") or die("unable to read file!");
                $message = $setting->read($file2, $filename);
                fclose($file2);
                break;
            case 'delete' :
                $x = 1;
                $message1 = $setting->delete($_SESSION['filename']); 
        }
    }
}
