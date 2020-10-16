<?php

use App\Participant;


it('test ajout participant', function ()
{
        $name = new Participant();
        $name->setNom("Mohamed");
        $this->assertSame("Mohamed",$name->getNom());

});

it('test vérifier le nom du participant', function ()
{
        $this->expectException(\InvalidArgumentException::class);
        $name = new Participant();
        $name->setNom("Mohamed233");

});

it('test ajouter un profil', function ()
{
        $prof = new Participant();
        $prof->setProfil("ASVP");
        $this->assertSame("ASVP",$prof->getProfil());

});

it('test vérifier le profil du particiapnt', function()
{
        $this->expectException(\InvalidArgumentException::class);
        $prof =  new Participant();
        $prof->setProfil("GENDARME");

});
