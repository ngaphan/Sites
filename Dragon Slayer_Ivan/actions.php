<?php

// actions.php

$dragonManager = new DragonManager($PDOConnectionObject);
$characterManager = new CharacterManager($PDOConnectionObject);
$weaponManager = new WeaponManager($PDOConnectionObject);

/*
	Home : actions
*/

if ($menu === 'home')
{
    if (!isset($_SESSION['selectedDragonId'])) $_SESSION['selectedDragonId'] = 0;
    if (!isset($_SESSION['selectedCharacterId'])) $_SESSION['selectedCharacterId'] = 0;
    if (!isset($_SESSION['selectedWeaponId'])) $_SESSION['selectedWeaponId'] = 0;

    if (isset($_GET['action']) && $_GET['action'] === 'dragonSelect')
    {
        if (isset($_GET['dragonId']) && $dragonManager->exists($_GET['dragonId']))
        {
            $_SESSION['selectedDragonId'] = $_GET['dragonId'];
        }

        header('Location: index.php');
    }

    if (isset($_GET['action']) && $_GET['action'] === 'characterSelect')
    {
        if (isset($_GET['characterId']) && $characterManager->exists($_GET['characterId']))
        {
            $_SESSION['selectedCharacterId'] = $_GET['characterId'];
        }

        header('Location: index.php');
    }

    if (isset($_GET['action']) && $_GET['action'] === 'weaponSelect')
    {
        if (isset($_GET['weaponId']) && $weaponManager->exists($_GET['weaponId']))
        {
            $_SESSION['selectedWeaponId'] = $_GET['weaponId'];
        }

        header('Location: index.php');
    }

    if ($_SESSION['selectedDragonId'] != 0 && $_SESSION['selectedWeaponId'] != 0 && $_SESSION['selectedCharacterId'] != 0)
    {
        $_SESSION['selectedDragonObject'] = serialize($dragonManager->create($_SESSION['selectedDragonId']));
        $_SESSION['selectedCharacterObject'] = serialize($characterManager->create($_SESSION['selectedCharacterId'], $weaponManager->create($_SESSION['selectedWeaponId'])));

        unset($_SESSION['selectedDragonId'], $_SESSION['selectedWeaponId'], $_SESSION['selectedCharacterId']);
    }

    if (isset($_SESSION['selectedDragonObject']) && isset($_SESSION['selectedCharacterObject']))
    {
        $selectedDragonObject = unserialize($_SESSION['selectedDragonObject']);
        $selectedCharacterObject = unserialize($_SESSION['selectedCharacterObject']);

        $gameIsReady = true;
    }
    else
    {
        $gameIsReady = false;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'dragonAttack')
    {
        $selectedDragonObject->attack($selectedCharacterObject);
        $_SESSION['selectedCharacterObject'] = serialize($selectedCharacterObject);

        header('Location: index.php');
    }

    if (isset($_GET['action']) && $_GET['action'] === 'characterAttack')
    {
        $selectedCharacterObject->attack($selectedDragonObject);
        $_SESSION['selectedDragonObject'] = serialize($selectedDragonObject);

        header('Location: index.php');
    }
}

/*
	Administration : actions
*/

if ($menu === 'admin')
{
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
