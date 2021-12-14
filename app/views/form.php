<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .main {
            display: flex;
            flex-wrap: wrap row;
            align-items: center;
            justify-content: space-evenly;
        }

        .form {
            box-sizing: border-box;

        }

        .form-row {
            width: 100%;
            margin: 2rem;
        }
    </style>
</head>

<body>
    <?php
    var_dump($data->model[0]->field[0])
    ?>

    <div class="main">


        <?php
        foreach ($data->model as $model) {
        ?>
            <form action="/<?php echo $model->name  ?>" method="post" class="form">
                <h1> <?php echo $model->name  ?> </h1>
                <?php foreach ($model->field as $field) { ?>
                    <div class="form-row">

                        <label> <?php echo $field[2]  ?> </label>
                        <input type="<?php echo ($field[1] == 'integer' ? 'number' : 'text') ?>" name="<?php echo $field[0]  ?>" id="<?php echo $field[0]  ?>" <?php echo ($field[3] ?: '') ?>>
                    </div>

                <?php } ?>

                <input type="submit" name="submit" id="submit" value="Submit" />
            </form>

        <?php
        }
        ?>

    </div>

</body>

</html>