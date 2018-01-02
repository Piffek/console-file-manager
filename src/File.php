<?php

class File
{
    private $name;

    private $openfile;

    private $text;

    private $directory;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDirectory(string $directory)
    {
        $this->directory = $directory;
    }


    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function read()
    {
        $this->ifFileNotExists();
        $this->openfile = fopen($this->directory.'/'.$this->name, 'r');

        return fread($this->openfile, filesize($this->name));
    }

    public function write()
    {
        $this->ifFileNotExists();
        $this->openfile = fopen($this->directory.'/'.$this->name, 'w');

        fwrite($this->openfile, $this->text);
    }

    public function __destruct()
    {
        fclose($this->openfile);
    }

    private function ifFileNotExists()
    {
        if (! file_exists($this->name)) {

            throw new Exception('File not found');
        }
    }
}