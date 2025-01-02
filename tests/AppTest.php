<?php

declare(strict_types=1);

namespace Usa\Tests;


use PHPUnit\Framework\TestCase;
use Usa\Public;

class AppTest extends TestCase
{
    public function testEchoOutput()
    {
        // Zapneme výstupní buffer
        ob_start();

        // Zde je kód, který chceme testovat
        echo "Test is OK.";

        // Získáme obsah výstupního bufferu
        $output = ob_get_clean();

        // Porovnáme výstup s očekávaným textem
        $this->assertEquals("Test is OK.", $output);
    }
}