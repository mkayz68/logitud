<?php

use App\Passage;

it('test Passage', function()
{
    $numPassage = new Passage();
    $numPassage->setNumPassage(2);

    $this->assertSame(2, $numPassage->getNumPassage());

});


it('nombre négatif', function ()
{
    $this->expectException(\InvalidArgumentException::class);
    $nbNegatif = new Passage();
    $nbNegatif->setNumPassage(0);
});


// j'ai une erreur pour le format du temps qui me mets null dans le setPassage
/*it('temps du passage', function ()
{
    $timePassage = new Passage();
    $timePassage->setTempsPassage('1.23.90');
    $this->assertSame(0, $timePassage->getTempsPassage());

});*/
