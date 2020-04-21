<?php $customCSS="<link rel='stylesheet' href='css/forms.css'>"; ?>

<?php include "inc/html-top.php"; ?>

<body>
    <div class="container">
    <header>
        <h1>Makoto Shinkai</h1>
        <div class="subtitle">---- A Japanese animator, filmmaker, and manga artist</div>
    </header>

    <?php include "inc/nav.php"; ?>

    <form action="form-processor.php" method="post" class="full-width">
        <p>Name: <input type="text" name="name" id="name"></p>
        <p>Email: <input type="email" name="email" id="email"></p>
        <p>Phone: <input type="number" name="phone" id="phone"></p>

        <fieldset id="fieldset">
            <legend id="legent">Some information</legend>
            <p>Which movie about Makoto Shinkai do you know?</p><br>

                <input id="check1" type="checkbox" name="check1" value="Your Names"><label for="check1">Your Names</label><br>
                <input id="check2" type="checkbox" name="check2" value="5 Centimeters per Second"><label for="check2">5 Centimeters per Second</label><br>
                <input id="check3" type="checkbox" name="check3" value="Weathering with You"><label for="check3">Weathering with You</label><br>


            <p>What element in Makoto Shinkai's movie do yo like?</p><br>

                <input id="radio1" type="radio" name="radio" value="Rain"><label for="radio1">Rain</label><br>
                <input id="radio2" type="radio" name="radio" value="Train"><label for="radio2">Train</label><br>
                <input id="radio3" type="radio" name="radio" value="Cat"><label for="radio3">Cat</label><br>


        </fieldset>

        <p>How do you think of Makoto Shinkai?</p>
        <textarea name="open" rows="4" cols="40"></textarea><br>

        <button type="submit" name="button">submit the form</button>
    </form>

    </div><!--.container-->
    <?php include "inc/scripts.php"; ?>
</body>

</html>
