<?php

class WtfTest extends PHPUnit_Framework_TestCase
{
    public function testWhatTheFramework()
    {
        $this->assertTrue((bool) 'Kirk is better!');
        $this->assertTrue((bool) 'No! Picard is better!');
        $this->assertTrue((bool) 'Use the force, Harry.');
        $this->assertTrue((bool) 'All your base belong to us');
        $this->assertTrue((bool) 'Kharak is burning.');
    }
}

