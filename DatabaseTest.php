<?php

require_once 'db.php';

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testConnection()
    {
        $db = new Database();
        
        $this->assertInstanceOf(mysqli::class, Database::$conn);
    }
}