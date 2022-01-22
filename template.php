<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Mein Formular</h1>
    <form action="save.php" method="POST">
        <!-------------input---------------------------->
        <h2>input</h2>
        <label for="id_input">Input:</label>
        <input type="text" id="id_input" name="input" value="<?=$input ?>">
        <hr>
        <br>

        <!----------------textarea------------------------->
        <h2>textarea</h2>
        <label for="id_textarea">textarea</label>
        <textarea cols="30" name="textarea"
                  rows="5" id="id_textarea"><?=$textarea ?></textarea>
        <hr>
        <br>
        <!---------------select-------------------------->
        <h2>select</h2>
        <label for="id_select">select:</label>
        <select name="select" id="id_select">
            <option value="">bitte wählen Sie einen Wert</option>

            <option 
            <?php if($select==1):?>
                selected
            <?php endif ?> 
            value=1>Audi</option>


            <option 
            <?php if($select==2):?>
                selected
            <?php endif ?> 
            value=2>BMW</option>

            <option 
            <?php if($select==3):?>
                selected
            <?php endif ?> 
            value=3>Mercedes</option>
        </select>
        <hr>
        <br>

        <!---------------checkbox-------------------------->
        <h2>checkbox</h2>
        <input type="checkbox" id="id_checkbox1" name="checkbox1" value=1 
        <?php if($checkbox1==1):?>
                checked
            <?php endif ?> 
        >
        <label for="id_checkbox1">checkbox 1</label>    

        <input type="checkbox" id="id_checkbox2" name="checkbox2" value=1 
        <?php if($checkbox2==1):?>
                checked
            <?php endif ?> 
        >
        <label for="id_checkbox2">checkbox 2</label>       
        <hr>
        <br>

        <!---------------radio-------------------------->
        <h2>radio</h2>
        <input type="radio" id="id_radio1" name="radio" value=1
        <?php if($radio==1):?>
                checked
        <?php endif ?> 
        >
        <label for="id_radio1">html</label>
        <input type="radio" id="id_radio2" name="radio" value=2
        <?php if($radio==2):?>
                checked
        <?php endif ?> 
        >
        <label for="id_radio2">css</label>
        <input type="radio" id="id_radio3" name="radio" value=3
        <?php if($radio==3):?>
                checked
        <?php endif ?> >
        <label for="id_radio3">javascript</label>
        
        <hr>
        <br>

        <!--------------date--------------------------->
        <h2>date</h2>
        <label for="id_date">Datum:</label>
        <input type="date" id="id_date" name="date" value="<?=$date?>">
        <hr>
        <
br>

        <!----------------color------------------------->
        <h2>color</h2>
        <label for="id_color">Farbe:</label>
        <input type="color" name="color" id="id_color"
               value="<?=$color?>" >
        <hr>
        <br>

        <!---------------password-------------------------->
        <h2>password</h2>
        <label for="id_password">Password:</label>
        <input type="password" id="id_password" name="password"
            value="<?=$password?>">
        <hr>
        <br>

        <!---------------email-------------------------->
        <h2>email</h2>
        <label for="id_email">email:</label>
        <input type="email" id="id_email" name="email"
            value="<?=$email?>">
        <hr>
        <br>

        <input type="submit" value="übertrage">
    </form>
    
</body>
</html>