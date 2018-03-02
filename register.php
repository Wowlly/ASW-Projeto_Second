<html>
    <head>
        <meta charset = "UTF-8">
        <title>registerPage</title>
        
    </head>

    <body>

        <h1>Pandemic</h1>
        <form action="home.php" action="post">
            <fieldset>
            <legend>Register:</legend>
                Username:<br>
                <input type="text" name="username" placeholder="user001"><br>
                Password:<br>
                <input type="password" name="password" placeholder="password"><br>
                Email:<br>
                <input type="text" name="email" placeholder="user001@domain.com"><br>
                First Name:<br>
                <input type="text" name="firstname" placeholder="Freddy"><br>
                Last Name:<br>
                <input type="text" name="lastname" placeholder="Mercury"><br>
                Sex:<br>
                <select>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O" selected>Other/Non-specified</option>
                    
                </select><br>
                Country:<br>
                <select>
                    <option value="PT">Portugal</option>
                    <option value="ES">Espanha</option>
                    <option value="BR">Brazil</option>
                    <option value="OT" selected>Other</option>
                    
                </select><br>

            <input type="submit" value="Submit">
            </fieldset>
        </form> 

        <?php if($_SESSION['value'] == 'PT') : ?>

            <form>
                District:<br>
                <select>
                    <option value="LX">Lisboa</option>
                    <option value="AL">Almada</option>
                    <option value="OT">Other</option>
                    
                </select><br>
                County:<br>
                <select>
                    <option value="AM">Amadora</option>
                    <option value="LX">Lisboa</option>
                    <option value="O">Other</option>
                    
                </select><br>
            </form>

        <?php endif; ?>
    </body>

</html>

