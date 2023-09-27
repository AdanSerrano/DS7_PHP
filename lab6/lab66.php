<?php
final class ClaseBase
{
    public function test()
    {
        echo "ClaseBase::test() llamada\n";
    }
    // Aquí da igual si se declara el método como
    // final o no
    final public function moreTesting()
    {
        echo "ClaseBase::moreTesting() llamada\n";
    }
}
class ClaseHijo extends ClaseBase
{
}


//Dado que ClaseBase es una clase final, significa que no se puede heredar de ella para crear subclases. Por lo tanto, no se pueden crear objetos de ClaseHijo que hereden de ClaseBase. Intentar crear una instancia de ClaseHijo generaría un error en PHP.