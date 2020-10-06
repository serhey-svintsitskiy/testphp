<?php


namespace Filesystem;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;


class LocalFilesystem
{
    private string $rootDir;
    
    public function __construct(string $rootDir)
    {
        $this->rootDir = $rootDir;
    }

    public function test()
    {
        $adapter = new Local($this->rootDir . '/../var');
        $filesystem = new Filesystem($adapter);
        print_r($filesystem->listContents());
    }
}