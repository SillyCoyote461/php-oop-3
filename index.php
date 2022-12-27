<?php
include_once __DIR__ . '/class/book.php';
include_once __DIR__ . '/class/dvd.php';
include_once __DIR__ . '/class/employer.php';
include_once __DIR__ . '/class/genre.php';

$genre=[
    'romanzo' => new genre('romanzo','fa-solid fa-book'),
    'fantasy' => new genre('fantasy', 'fa-solid fa-dragon')
];

$products=[
    new book('Le notti bianche', 'Fedor Michajlovic Dostoevskij', 9.99, $genres['romanzo'], 'lorem ipsum dolor sit amet, consectetur adipiscing el aspect et accus.', 'Tascabile', 4.5, 'Flessibile', 125),
];

var_dump($products[0]);

// $test=[
//     new Product('prova', 'prova 2', 4.5, 'platinum prova')
// ];
// $test[0]->day = 20;
// $test[0]->month = 12;
// $test[0]->year = 2022;
// $test[0]->image = '20';
// var_dump($test);
// var_dump($test[0]->getDate());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h2>Boolshop</h2>
        
    </header>
    <main>
        <section>
            <h3>I nostri prodotti</h3>
        
            <?php foreach ($products as $elem) { ?>
                <!-- container -->
                <div class="cont">
                    <!-- cards -->
                    <div class="card">
                        <section class="prev">
                            <!-- image -->
                            <img src="<?php echo $elem -> image ?>" alt="imagine">
                        </section>
                        <section>
                            <!-- details -->
                            <h2><?php echo $elem -> title ?></h2> 
                            <div>
                                <i class="<?php echo $elem -> genre -> icon ?>"></i> <?php echo $elem -> genre -> name ?>
                            </div>
                            <p>
                                Prezzo: € <?php echo $elem -> price ?>
                            </p>
                        </section>
                        
                    </div>
                </div>     
            <?php }; ?>
        </section>
    </main>
</body>
</html>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        width: 100vw;
        height: 100vh;
        padding-top:5vh;
    }

    header, main{
        width: 70vw;
        margin: auto;
    }

    header h2{
        margin-bottom: 10px;

    }

    main{
        display: flex;
        justify-content: space-between;
        gap: 10px;
        flex-wrap:wrap;
        padding-top: 30px;
    }

    .cont{
        flex-basis:calc((100% / 3) - 20px);

    }

    .card{
        margin: auto;
        width: 350px;
        border: 1px solid black;
        border-radius: 6px;
        padding: 5px;
    }
    .prev{
        padding: 5px
    }

    .prev img{
        width: 100%;
        aspect-ratio: 1/1;
    }

</style>