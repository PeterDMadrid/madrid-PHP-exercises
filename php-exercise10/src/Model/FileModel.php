<?php
namespace src\Model;

class FileModel
{
    public function create($file, $text)
    {
        if ($file) {
            fwrite($file, $text);
            return "File created successfully.";
        } else {
            return "Error opening file!";
        }
    }
    public function read($file, $filename)
    {
        return fread($file, filesize($filename));
    }
    public function update($file, $text)
    {
        if ($file) {
            fwrite($file, $text);
            return "File updated successfully.";
        } else {
            return "Error updating file!";
        }
    }
    public function delete($filename)
    {
        unlink($filename);
        return $filename . " is deleted";
    }
}
