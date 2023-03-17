<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Задача №1: сформировать массив с данными для блока «Опыт работы».
        Вывести данные массива в HTML-шаблоне. </p>
    <?php
        $job = [
            'job_name' => ['Apple', 'Sony', 'Samsung'],
            'job_data' => ['2022-настоящее время', '2007-2013', '2015-2022'],
            'job_desc' => ['Работа над Iphone 15', 'Разработка x-box', 'работа над samsung watch']
        ]
    ?>

    <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i
                class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['job_name'][0]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][0]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][0]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['job_name'][1]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][1]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][1]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['job_name'][2]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][2]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][2]; ?>
        </p><br>
    </div>
</div>
</body>
</html>
