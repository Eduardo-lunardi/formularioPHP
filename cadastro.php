<html>

<head>
    <title>Cadastro</title>
</head>

<body>
    <form method="post">
        <label>Nome</label>
        <br>
        <input name="nome" type="text" placeholder="Seu nome..." /> <br>
        <?php
        if (preg_match_all('/[a-zA-Zà-úÀ-Ú][ ][a-zA-Zà-úÀ-Ú]+$/', $_POST['nome'])) {
            
        } else{
            echo "<b><font color='red'> Nome e Sobrenome</font></b>";
        }

        ?>
        <br>
        <br>

        <label> Data Nascimento </label>
        <br>
        <input type="date" name="data_nasc" /> <br>
        <?php
        if (isset($_POST['data_nasc']) && !empty($_POST['data_nasc'])) {

        } else if (isset($_POST['data_nasc'])) {
            echo "<b><font color='red'> Informe sua data de nascimento </font></b>";
        }
        ?>
        <br>
        <br>

        <label> Email </label>
        <br>
        <input type="text" name="email"> <br>
        <?php

        if(preg_match_all('/^\w+([.-]?\w+)@\w+([.-]?\w+)(\.\w+)+$/', $_POST['email'])){

        } else{
            echo "<b><font color='red'> Email valido</font></b>";
        }

        // if ((!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        //     echo "<b><font color='red'> Preencha com um email. </font></b>";
        // }
        ?>
        <br>
        <br>

        <label> Senha </label>
        <br>
        <input type="password" name="pass" /> <br>
        <br>
        <br>

        <label> Confirmação de senha </label>
        <br>
        <input type="password" name="pass2" /><br>
        <?php

        if ($_POST['pass2'] = $_POST['pass']) {
        } else {
            echo "<b><font color='red'> Senha incorreta. </font></b>";
        }
        ?>

        <p><input type="submit" /></p> <br>

    </form>
</body>

</html>