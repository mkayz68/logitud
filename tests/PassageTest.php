<?php

use App\Entity\Passage;

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


// fonctionne pas celui-là
it('temps du passage', function ()
{
    $timePassage = new Passage();
    $timePassage->setTempsPassage('i:s,u');
    $this->assertSame(0, $timePassage->getTempsPassage());
});



/*it('verified type of Time of passage', function($time){
    $timeStage = DateTime::createFromFormat('i:s.u', $time);
    $result = $this->passage->SetTempDePassage($time);
    $this->expect($result->getTempDePassage())->toEqual($timeStage);
})->with('TimePassage');

it('test Exception Set Time',function($time) {
    $this->passage->SetTempDePassage($time);
})->with('TimePassageEx')->throws(Exception::class);*/
