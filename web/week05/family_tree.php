<?php
    require "database_setup.php";
    $db = get_db();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Haderlie Family Tree</title>
    <link rel="stylesheet" type="text/css" href="family_tree.css" />
    <style>
        img.intext {
            border-radius: 5px;
            width: 15%;
            height: auto;
            margin: 3px 6px 3px 6px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="logo">Haderlie Et Al.</h1>
    </header>
    <hr />
    <ul class="menu">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="family_tree.php">Family Tree</a></li>
        <li><a href="memory_list.php">Memories</a></li>
        <li><a href="recipes.php">Recipes</a></li>
    </ul>
    <div class="a">
        <h1 style="font-family:'Yu Gothic'; text-transform:uppercase">Welcome to Haderlie et al.</h1>
        <p>
            This website was created for Kirk and Katie Haderlie and all their descendents (and kids-in-law, of course).
            Still working on the content and style of the thing.
            Should be working good soon!
        </p>
        <h3 style="font-family:'Yu Gothic'; text-transform: uppercase;">Children of Kirk and Katie</h3>
        <p>
            <ul>
                <?php
            //     foreach ($db->query('SELECT first_name, last_name, birth_date 
            // FROM family_members WHERE father_id = (SELECT member_id FROM family_members WHERE first_name = \'Kirk\');') as $row) {
            //         $first = $row['first_name'];
            //         $last = $row['last_name'];
            //         $birth = $row['birth_date'];
            //         $content = $row['content'];
            //         echo "<li>$first $last Born: $birth</li> ";
                    // echo "<br/>";
              //  }
                ?>
                <ul>
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum
        </p>
        <div style="text-align: center; font-family: Arial; font-size: 18px;">
            <a href="family_tree.php" class="buttonlike">Family Tree</a>
            <a href="memory_list.php" class="buttonlike">Memories</a>
        </div>
    </div>
    <footer>Thank you for visiting!</footer>
</body>

</html>