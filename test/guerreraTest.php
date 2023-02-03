<?php

use PHPUnit\Framework\TestCase;
include './src/Guerrera.php';

class GuerreraTest extends TestCase {

    public function testHerida() {
       
        $objeto = new Guerrera('Juanita', 100, 'viva');
        $this->assertEquals(90, $objeto->herida());

    }

    public function testHerida2() {
       
        $objeto = new Guerrera('Juanita', 9, 'viva');
        $this->assertEquals(-1, $objeto->herida());
        $this->assertEquals('muerta', $objeto->estado);

    }
    
    public function testPocion() {
       
        $objeto = new Guerrera('Juanita', -15, 'muerta');
        $this->assertEquals(-5, $objeto->pocion());
        $this->assertEquals('muerta', $objeto->estado);

    }

    public function testPocion2() {
       
        $objeto = new Guerrera('Juanita', -9, 'muerta');
        $this->assertEquals(1, $objeto->pocion());
        $this->assertEquals('viva', $objeto->estado);

    }
}


?>