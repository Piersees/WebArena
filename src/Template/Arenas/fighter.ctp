<?php $this->assign("title",'WebArena - Your fighter'); ?>

<p>Name : <?php echo $name; ?></p>
<p>Level : <?php echo $level; ?></p>
<p>Sight : <?php echo $sight;?></p>
<p>Strength : <?php echo $strength;?></p>
<p>Health : <?php echo $healthcurrent;?> / <?php echo $healthmax;?></p>

<details>
    <summary>Création d'un combattant</summary>
    <form method="post" action="fighter">
        <input name="nomCombattant" value="Nom du combattant">
        <input type="submit">
    </form>
</details>

<details>
    <summary>Passer Niveau</summary>
    <form method="post" action="fighter">
        <input type="radio" name="levelup" value="skill_health" id="vie"/><label for="vie">Plus de vie</label>
        <input type="radio" name="levelup" value="skill_sight" id="vision"/><label for="vision">Plus de vision</label>
        <input type="radio" name="levelup" value="skill_strength" id="force"/><label for="force">Plus de force</label>
        <input type="submit">
    </form>
</details>
