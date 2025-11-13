<!doctype html>
<html>
    <head>
    <?php
    $page = "Home Page ";
    include_once'./includes/var.php';
    ?>

        <title>
            <?php
            echo $page."- ".$project;
            ?>
        </title>
    </head>
<body>
    <nav>
        <section id="header">
    <?php
    echo $nav;

    ?>
    </section>

    </nav>

<h1 style="text-align:center;"><?= "Welcome to ".$project.$page;?></h1>
<section id="footer">
    <?php
    echo $nav;

    ?>
    </section>

</body>
</html>