<?php
class ClaseBase
{
    public function test()
    {
        echo "ClaseBase::test() llamada\n";
    }
    public function masTests()
    {
        echo "ClaseBase::masTests() llamada\n";
    }
}

class ClaseHijo extends ClaseBase
{
    public function masTests()
    {
        echo "ClaseHijo::masTests() llamada\n";
    }
}


// la salida muestra que se ejecuta el método de la clase hija, y se imprime "ClaseHijo::masTests() llamada". Esto demuestra que la sobrescritura en la clase hija anula el comportamiento del método final en la clase base.