<?php

$dragonManager = new DragonManager($PDOConnectionObject);
$characterManager = new CharacterManager($PDOConnectionObject);
$weaponManager = new WeaponManager($PDOConnectionObject);

/*
	Home : actions
*/
if ($menu === 'home')
{
    //echo 'home'  ;

    $gameIsReady = false ;
// sélection du dragon
    if (isset($_GET['action']) && $_GET['action'] === 'dragonSelect')
    {
        //echo 'selectedDragon'  ;
        $_SESSION['selectedDragon'] = $_GET['dragonId'] ;
        header('Location: index.php');
    }
// sélection du character
    if (isset($_GET['action']) && $_GET['action'] === 'characterSelect')
    {
        //echo 'selectedCharacter'  ;
        $_SESSION['selectedCharacter'] = $_GET['characterId'] ;
        header('Location: index.php');
    }
// sélection de l'arme
    if (isset($_GET['action']) && $_GET['action'] === 'weaponSelect')
    {
        //echo 'selectedWeapon'  ;
        $_SESSION['selectedWeapon'] = $_GET['weaponId'] ;
        header('Location: index.php');
    }

    if (isset($_SESSION['selectedDragon'])
        && isset($_SESSION['selectedCharacter'])
        && isset($_SESSION['selectedWeapon']))
    {
        $gameIsReady = true ;
       // echo 'gameIsReady'  ;

// création de l'objet dragon , weapon ,character


        $selectedDragonObject = $dragonManager ->create($_SESSION['selectedDragon']) ;
        $weaponObject = $weaponManager->create($_SESSION['selectedWeapon']) ;
        $selectedCharacterObject = $characterManager->create($_SESSION['selectedCharacter'], $weaponObject) ;

        $_SESSION['selectedDragonObject'] = serialize($selectedDragonObject);
        $_SESSION['selectedCharacterObject'] = serialize($selectedCharacterObject);

        unset($_SESSION['selectedDragon'],$_SESSION['selectedWeapon'])  ;

    }

    if(isset($_SESSION['selectedDragonObject']) && isset($_SESSION['selectedCharacterObject'],$_SESSION['selectedCharacter']))
    {
        $characterUnserializedObject = unserialize($selectedCharacterObject) ;
        $dragonUnserializedObject = unserialize($selectedDragonObject) ;
        $gameIsReady = true ;
    }
    else
    {
        $gameIsReady = false;
    }

   /* if(isset($_GET['action'])&& $_GET['action']=== "dragonAttack")
    {
        // récupérer les obj à partir des obj temporaire
        $dragonUnserializedObject->attack($characterUnserializedObject);

    }
*/
}


/*
	Administration : actions
*/

if ($menu === 'admin')
{
    //echo 'admin'  ;

    if (isset($_POST['action']) && $_POST['action'] === 'dragonAdd')
    {
        $dragonManager->add($_POST['dragonName'], $_POST['dragonLifeMax'], $_POST['dragonForce']);

        header('Location: index.php?menu=admin');
    }

    if (isset($_POST['action']) && $_POST['action'] === 'characterAdd')
    {
        $characterManager->add($_POST['characterName'], $_POST['characterLifeMax'], $_POST['characterArmor']);

        header('Location: index.php?menu=admin');
    }

    if (isset($_POST['action']) && $_POST['action'] === 'weaponAdd')
    {
        $weaponManager->add($_POST['weaponName'], $_POST['weaponForce']);

        header('Location: index.php?menu=admin');
    }

    if (isset($_GET['action']) && $_GET['action'] === 'dragonDelete')
    {
        $dragonManager->delete($_GET['dragonId']);

        header('Location: index.php?menu=admin');
    }

    if (isset($_GET['action']) && $_GET['action'] === 'characterDelete')
    {
        $characterManager->delete($_GET['characterId']);

        header('Location: index.php?menu=admin');
    }

    if (isset($_GET['action']) && $_GET['action'] === 'weaponDelete')
    {
        $weaponManager->delete($_GET['weaponId']);

        header('Location: index.php?menu=admin');
    }

}

$dragonsArray = $dragonManager->listAll();
$charactersArray = $characterManager->listAll();
$weaponsArray = $weaponManager->listAll();
