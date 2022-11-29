<?php

class FileWrite
{
    public $handle;
    public string $filename;

    public function __construct($filename)
    {
        if (is_writable($filename)) {
            $this->handle = fopen($filename, 'a');
            $this->filename = $filename;
        } else {
            exit("File <b>$filename</b> doesn't exists or not available");
        }
    }

    public function __destruct()
    {
        if (isset($this->handle)) {
            fclose($this->handle);
        }
    }

    public function write($text): void
    {
        if (fwrite($this->handle, $text . PHP_EOL) === false) {
            exit("Не могу произвести запись в файл $this->filename");
        }
    }
}
