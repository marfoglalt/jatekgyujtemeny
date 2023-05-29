<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $ablakcim['cim']?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/sajat.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php if (file_exists('./assets/css' . $keres['fajl'] . '.css')) { ?>
        <link rel="stylesheet" href="./assets/css/<?= $keres['fajl'] ?>.css" type="text/css"><?php } ?>
</head>

<body class="egesz">
    <header>
        <section>
            <div>
                <nav class="navbar navbar-expand-sm navbar-dark" id="menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <?php foreach ($oldalak as $url => $oldal) { ?>
                                <?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                                    <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                                        <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                                            <?= $oldal['szoveg'] ?></a>
                                        </li>
                                <?php }
                            } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
    </header>

    <div id="content">
    <?php if(isset($_SESSION['login'])) { ?>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>

    <footer>
        <div>
            <ul>
                <li>&copy; Játékgyűjtemény. All rights reserved.</li>
            </ul>
        </div>
    </footer>
</body>

</html>