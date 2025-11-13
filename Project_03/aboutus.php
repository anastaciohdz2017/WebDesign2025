<!doctype html>
<html>
    <head>
        <?php
        $page = "About Us ";
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
    include"./includes/nav.html";

    ?>
    </section>
    </nav>

<h1 style="text-align:center;"><?= "Welcome to ".$project.$page;?></h1>
<section id="footer">
    <?php
    include"./includes/nav.html";

    ?>
    </section>
</body>
</html>