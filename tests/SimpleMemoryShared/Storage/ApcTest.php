<?php

namespace SimpleMemorySharedTest\Storage;

use PHPUnit_Framework_TestCase as TestCase;
use SimpleMemoryShared\Storage;

class ApcTest extends TestCase
{
    protected $storage;

    public function setUp()
    {
        $this->storage = new Storage\Apc();
    }

    public function testCanWriteAndRead()
    {
        $success = $this->storage->write('custom-key', 'sample');
        $this->assertEquals($success, true);
        $datas = $this->storage->read('custom-key');
        $this->assertEquals($datas, 'sample');
    }
}
