<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 18/10/2016
 * Time: 11:20
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class FightersTable extends Table
{

    function addFighter($nomCombattant){
        $query = $this->query();

        $query->insert(['name','player_id','coordinate_x','coordinate_y','level', 'xp', 'skill_sight', 'skill_strength', 'skill_health', 'current_health'])
            ->values([
                    'name'=> $nomCombattant,
                    'player_id' => '545f827c-576c-4dc5-ab6d-27c33186dc3e',
                    'coordinate_x' => 9,
                    'coordinate_y' => 9,
                    'level' => 1,
                    'xp' => 0,
                    'skill_sight' => 1,
                    'skill_strength' => 1,
                    'skill_health' => 3,
                    'current_health' => 3
                ])
            ->execute();

    }

    function getInfoFighter($id_player){
        return $this->find()
            ->select(['name','level', 'skill_sight', 'skill_strength', 'skill_health', 'current_health'])
            ->where(['player_id' => $id_player])
            ->toArray();
    }

    function levelUp($id_player, $skill){
        if($skill == 'skill_health'){
            $caracBonus = 3;
        }
        else {
            $caracBonus = 1;
        }

        $value = $this->find()
            ->select([$skill])
            ->where(['player_id' => $id_player])
            ->toArray();

        $this->query()
            ->update()
            ->set([$skill => (intval($value[0][$skill]) + $caracBonus)])
            ->where(['player_id' => $id_player])
            ->execute();
    }
}
