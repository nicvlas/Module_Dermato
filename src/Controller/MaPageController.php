<?php

namespace Drupal\mon_module\Controller;
use Drupal\Core\Controller\ControllerBase;

class MaPageController extends ControllerBase {

public function maPage() {

        $retour = "Voir des informations sur : 

		<form action='/showpdf'>
		  <select name='maladie'>
		    <option value='Carence_congénitale_en_iode'>Carence congénitale en iode</option>
		    <option value='Aspergillose'>Aspergillose</option>
		    <option value='Colibacillose'>Colibacillose</option>
		    <option value='Botryomycose'>Botryomycose</option>
		  </select>
		  <br><br>
		  <input type='submit' value='Submit'>
		</form>";

        return array(
            '#type' => 'markup',
            '#markup' => t($retour),
          );
    }


public function showpdf() {

$retour = "";

	switch($_GET['maladie']){

	case 'Carence_congénitale_en_iode':
		$retour='<button><a href="/sites/default/files/fiches_dermato//Affections_héréditaires_et_congénitales/Carence_congénitale_en_iode.pdf" target="_blank"><font color="black">Ouvrir le PDF</font></a></button>';
		break;

case 'Aspergillose':
		$retour='<button><a href="/sites/default/files/fiches_dermato//Affections_fongiques/Aspergillose.pdf " target="_blank"><font color="black">Ouvrir le PDF</font></a></button>';
		break;

case 'Colibacillose':
		$retour='<button><a href="/sites/default/files/fiches_dermato//Affections_bactériennes/Colibacillose.pdf " target="_blank"><font color="black">Ouvrir le PDF</font></a></button>';
		break;

case 'Botryomycose':
		$retour='<button><a href="/sites/default/files/fiches_dermato//Affections_bactériennes/Botryomycose.pdf " target="_blank"><font color="black">Ouvrir le PDF</font></a></button>';
		break;


	}        

        return array(
            '#type' => 'markup',
            '#markup' => t($retour),
          );
    }

}
