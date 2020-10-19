<?php

use App\Epreuve;

it('ajouter une épreuve', function ()
{
    $lieu = new Epreuve();
    $lieu->setLieu('ski de fond');
    $this->assertSame("ski de fond",$lieu->getLieu());
});

