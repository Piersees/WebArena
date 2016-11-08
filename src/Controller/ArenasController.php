<?php
/**
 * Created by PhpStorm.
 * User: agnes
 * Date: 11/10/2016
 * Time: 10:55
 */

namespace App\Controller;

use App\Controller\AppController;

/**
 * Personal Controller
 * User personal interface
 *
 */
class ArenasController extends AppController
{
    public function index()
    {
        //die('test');
    }

    public function fighter()
    {
        $this->loadModel('Fighters');
        $id_player = 'ceciestuntest';

        $fighter = $this->Fighters->getInfoFighter($id_player);

        if(isset($_POST['nomCombattant'])){
            $this->Fighters->addFighter($_POST['nomCombattant']);
        }

        if(isset($_POST['levelup'])){
            $this->Fighters->levelUp($id_player, $_POST['levelup']);
        }

        $this->set('name',$fighter[0]['name']);
        $this->set('level',$fighter[0]['level']);
        $this->set('sight',$fighter[0]['skill_sight']);
        $this->set('strength',$fighter[0]['skill_strength']);
        $this->set('healthmax',$fighter[0]['skill_health']);
        $this->set('healthcurrent',$fighter[0]['current_health']);

    }

    public function login()
    {
        //die('test');
    }

    public function sight()
    {
        //die('test');
    }

    public function diary()
    {
        //die('test');
    }
}