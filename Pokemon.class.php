<?php

class Pokemon
{
	public $type = 'normal';
	public $nom;
	public $sexe;

	public function charge()
	{
		return $this->nom." lance charge ! Ce n'est pas très efficace... <br/>";
	}

	public function mimi_queue()
	{
		return "La def de l'ennemi baisse ! <br/>";
	}

	public function paralyse()
	{
		return $this->nom.' est paralysé, il ne peut pas attaquer <br/>';
	}

	public function setSexe($sexe)
	{
		if ( $sexe !== 'feminin' || $sexe !== 'masculin')
		{
			throw new Exception ('Le sexe doit etre masculin ou feminin');
		}
	}

	public function evolution($nom)
	{
		return "hein ? ".$this->nom." évolue ! <br/>";
	}

	public function pokedex()
	{
		return $this->nom." est un pokemon de type ".$this->type." et son sexe est ".$this->sexe." <br/>";
	}
}

try
{

$lippoutou = new Pokemon();
$lippoutou->type = 'glace';
$lippoutou->nom = 'lippoutou';
$lippoutou->sexe = 'lesdeux';


echo $lippoutou->paralyse();
echo $lippoutou->charge();
echo $lippoutou->pokedex();

$canartichaut = new Pokemon();
$canartichaut->type = 'Vol';
$canartichaut->nom = 'Canartichaut';
$canartichaut->sexe = 'masculin';

echo $canartichaut->charge();
echo $canartichaut->pokedex();

echo '<pre>';
var_dump($lippoutou);
echo '</pre>';
}

catch(Exception $error)
{
	echo "erreur : ".$error->getMessage();
}