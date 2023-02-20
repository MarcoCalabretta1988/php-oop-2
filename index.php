<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Categories.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Game.php';
include_once __DIR__ . '/Models/House.php';

$dog = new Categories('Cani');
$cat = new Categories('Gatti');
$dog_food = new Food('Carne in barattolo', 'https://b2b.puntorigenera.com/82548-large_default/bocconcinipercaniconcarnepercani1230graltaqua.jpg', 'Alimento umido percani contentente carne allevatain italiae ortaggi.Non contiene conservanti chimici', 2,$dog,'22-05-2024','Manzo');
$scratching_post = new Game ('Tiragraffi', 'https://cdn.manomano.com/images/images_products/3648093/P/20110876_1.jpg', 'Tiragrffi resistente perogni tipo di gatto,corda canapa a tossica e comodacuccia per il riposino', 15,$cat,'Statici','Canapa e legno');
$cat_food= new Food('Bustine carne', 'https://m.media-amazon.com/images/I/81X2KlTjqxL._AC_SY355_.jpg', 'Alimento umido per gatti 100% pura carne', 1,$cat,'12-12-2023','Pollo');
$cat_game= new Game('Acchiappa la palla', 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/ferplast/flashlight/6/400/491124_katzenkarussell_flashlight_6.jpg', 'Fai divertire il tuo gatto con questo simpatico gioco ', 8,$cat,'Dinamici','Plastica e canapa');
$dog_game= new Game('Cordone', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYIFBgVFhYZGBYVHCUfGhocHB4jHCAhHhwcHBwkHSUcIC4lHCErHxwaJzgnLC80NTU2HiY+QDs0Py40NTEBDAwMEA8QHxISHz0sJSw0Nj03OzY0Nj0/PT0xNjQ0NDQ2PTQ0PTQ3ND09NDQ2PTY9ND00PTQ0NjY0NDQ0NDQ0Nv/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcBBAUDAgj/xAA6EAACAQIFAgQDBQYHAQEAAAABAgADEQQFEiExQVEGImFxE4GRBzKhscEUQlJi0eEVIzNykvDxoiT/xAAZAQEAAwEBAAAAAAAAAAAAAAAAAgMEAQX/xAAnEQACAgEDBAEEAwAAAAAAAAAAAQIDERIhMQQiQVGhE2GB8EJxkf/aAAwDAQACEQMRAD8AuaIiAeesX03F7Xt1txefZnDzzOqOTMrVCblWsoHmIunF7A2sTa95B888bVccoSmhQk3urtq7b2A239ePSWQqlLgrlZGLwy0wwbiZlOZf4pr5XddZsvCaRyedrAWsNgLfKT/w14pTORYkCoOgvY+19wfT6XnZ0yisnI2xkSWIiVFoiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAYnLznOEyoDVuzbIo5J6/IXF51JUXjgPQxb/5zMfKwt+55Qp2Bst1tew359JbTDXLDIWS0rJo58v7fXqVVLCx1aHYnSD/AAXHlvv3H5DkoiqxekpVxYhGYm299j8jPDEYlq2xJ26sefQGwO/a5ni9U0rKSyEG4Nx+R5HznoqOlbGN5f8AZ1kpDME+KBpIcrax1KwAYjjgHvNFKjYVg6MVYHfT0N+fVT+Bt336mRVkxAamxANQ3a38VtIa3S+wP9t+TjsubJ3VHYkOSqm3kNhsOdj0+XHUG/ZGPLXwWb4N8aDMgKVYgVBsG79N/wDv9ZO5+a9bYVviDbR9724v77gfOWF4b8XPRW9zUVfvIT5tP8Sk9RwRex5sCZlt6fLzE0xtwu4tKJq4DGLj6a1EN1YXH6g+oO02pjaxsy9NNZRmIiDoiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIBrYuscOjOFLlVJ0ra5sL2FyBc+8qXNqZzDEPVZ10O1z/AAlOUBK2t5QADY9+ZbOYVDSpOyi7KpIHqAbSicyzM12CIHUX4tpYe5DEGw6eWaumXLM9++Edl8tOEclFALbFtXG9xa4uNuonqMtasLOdS9nBZfy8vuLTltnjXsWW5sPNp/RgR8zPc5sgNiAGPB1uB/y4/GbHlejGknvufOJ8PBT5L39CykexIAI9Z8jHBL0cQxbe2ojzAgbah1P8y2PHz2MNnBJtpLf7HD/UHczaxL0sYAlVQoawSoNhc8KbgFW/lPMi5eyWH7I1+zHCv8Ft9X+i5PldbbqWPDAbWP8AcamHrnL6wO4AO1h0GzC3QjqP67dbEZccE3wqpJpOfJUO1j0BP7pvaxmtjFakTRxC+cC6Ve4GwLW5twf+idiSTeeP32WX9nGJ+KK66tgynR/Cx1BiPQ2U/j1k4lN/Zxmi4bHVUZwF+Exbt5Alz+DGSDOfFZrXsxWmP3RyR6kflxMdlTnY8GlTVcUmT2piUpmxZQexIBnspvKJqY8VmZjcXP8A5OtlHiupk7INRaizDUDuLX82m/BtJy6NqOU9yuHUycsOOF7LiieaMHAI3BFwZ6TGaxERAEREAREQBERAEREAREQBERAEREAxObj8moY4EOi3P7wADD52/OdOYhNrg40nyV1mnhitgN0tVQfyLqtz5goG/qNjbpI3jqzIbCkGHVQVX35YXPoD7y6Zo4zK6ON+/TVj3tv9RvNEb3/IplSs5RR+NqFxpK/DA6CmoP1Vjb3Bnhh69Skf8uotZALujC50/vbEbjvYn1tLP8WU8J4dpayh1MbIgY7nqTe9lA5+Q6yB0MV+3NqeiikHy1EOl/l/c2l8J6/BTNaeTayzM6WPX4YN1YWNJvvAfyH94DtyOnE5+fuaKfDYhim9Nutr2APe/HvNDG5aMZW+HSBWp97sqj+Lbj5Ei/FuJKMJkOso9aoajpxtYXt8ye8nnHBFpbNEdy3KhhW1v/qkWJ6Ltuo33Ntr+k9cxxKsdC725tvO7jkpoSqqCb+Zjvv6Xmk6rTUsdgJpisR2MkrHry92crA4P9vfTqVB/MfN8hyTJNmGVpTwxRFuyWKnYktwee4vI3hkOJqFuP06C0mWS4F8a6IWLC9yT/D1PvKbJY3yall4WCwMnUph6IbkU1B99IvN2ALRPKfJ6CMxEQBERAEREAREQBERAEREAREQBERAEREAREQCr/tIQ18UinhaYsPdmv8AkPpI5RWwHtJ19o2TPiqa4ilcvRBDqBcsh3v66Tc27M0qypjXtufKeo9faep00ouC+x5t9M5Te+zO6MQuFOoMFNvmR29ZnE+IH02ReeSDvb0keH1/KfQe8vaT3ZyNWlYybj5kVH3CT7gCe2MpMMM2JdrNbyJ0vfSvv3nngMCcRd38lFd2Y/kO59v7TQzvOHzVgiJoop5VQjfsCfX24lc5tbInCqCeyNbJ80fDvdvMp5X0/l7GSLO84ehiEahUZQtNTdT3LH8rSOYZPhjfa06OR0xiUYsL6mP0G36Tigm1knbJRWrBbfgbxE2eU2FS3xKdrkfvKeD73G/ykrlLeHc0PhmvqK61caLXsbEg34O408S2sqzOnmiaqZv3B5B9Zh6ilwk2lsXVWxkks7nQiImcvEREAREQBERAEREAREQBERAEREAREQBERAMSH5v4Aw2YOXW9Jm3IS2knvp6fKTCJKMpReUzjinyQ2h4Fp0RpBXT/ALLk+9zzPjNfAVOvS00D8Ore+sgbjqDbce4/GTWJP60/ZD6UfRBsv8Ds1I08TVFTayaARpPQ3P3rdiO/M1Mv+zUUamqpWDoD91VIJ9yWNpYkTn1p+zjpg/BRniDKRgalSk2zKTpPdTup9bgifeT4A0sMjixtq1WH87b/AE5ln+KPDiZ6vOmqo8r9PZu4/L8DEctyutk6mnXW3mOlgbqQbHY+/Tmbq+oUkvZispmsxfHg4i4UY2oim4tqba1+LfrO/keI/wABrBmb/KYEMbG1ub2G9wZp06CriTp6Jx7sL2+k3c0QPRcfyn6yc5KWU+GVwrcUn5RYODxqY5dVNlZe4M2ZXeWVGwbKymzD059DbkSe4WsMSoccEf8Av4zzrK9D24PRqs1Lfk2ImJmVloiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAYnNzzAnH0WVbaxut+NQ6HsDxfpe86UTqeHlHGk1hlGYnMmwWIuyujp5XRhY29xse4PtOrn2ZrWwmum33io9R5hcHsZPvFPh9M8osNK/GA/y3tuCNwL9idvneUTjFejWVCCpDWZTtuOh9jPQqnGcc+UZZV4ZNMgz39ptTq2DnZX6Mex7GS3CeJVyploupKsNWoHdd7G46jrcfSVOZIMAzZ0SxbzUlCbjnk3PbYj6S2yqMueCqTlBao8lzYeuuIUMpBU8ET3kB8I5qMuZqFZgqndSxsA3Fr+o/KTwG4uNxPNsr0Swa6bVZHPnyfcTEXlZaZiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAYkQ8VeC6edN8ZfJWHJts1uL24PS/4SXxJRk4vKIyipLDPzjjEOGJB/tJH4KFqD1P43P8A8gD9J0PtAyFsE7VFW9Gqb8bKx3IPa5uR726SM+G8zGXI1J9kZiQexIHPoZ6TnrinExJvDi1ujuY2r+1VUFhs31AB/W072A8VJkHlcsykfcWxYHoVBIAB7XEg+MxjUn1KbbEbC979fw5nPXXVN9Dkn+U/nCqU1iR2Pa8osNvHVfNn+HQpaAepa7W7kgAKPafeIoVa7BhWZXXqCbfnec/KK1HLECl11tuxJ69h6DpOouNp1BcOv1EjoUX2rByUta34JT4czBsYpSp/qU7XI4YG9iPoQfadyQzwrmK1a7IpJ8pJPTYj+smcw2x0z4NVMlKCw8mYiJWWiIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAeNWktZSrAMCLEEXBHqDzKvz/I8FQqM60zpBsU1HQzeg5Avfrb0lnYquuFUsxsB/36ypc/rNUYaVNrk2JF9+L79pq6WLcjL1UtMcrk8NYOwAVBwqiwA4mli8YKZ0p97qe395r4yvUorsqhm43/Hjac6krsQAAWY+pJJ/6J6ey2Rhqq1d0me5XVc9T1M6lXA/4VhmrONLuVCA88/qL7dLToYJqVGp8KnparTUfEY2Pm66b8WP5zifaEzKcOxJN9fXb9zf05lM7NtjTGKk9LJL4J8S4bLmZqxKu4ADbFVHJBsb82+ks/B46nj11U3V17qQZ+f8jqLSszorbc/e/C8kuHz1Fa66gw4Ksy29PvX/AAma2nW9XknGxVLSuEXLErzL/HTUrCqhYdxv9SAPqRJplua08zW6NfuOomWdUoco0QtjLhnQiYmZWWCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgHL8QUGxFBwouwFwO9t7So3BudRIsd7/rLuM4XiXIxm1FgoUVeVawBNuhPNiP0mnp71Xs+GY+podncnuvBSuJqGsxbgDYe05uMzFqZ00zZ+r9QPTsfWSnN8qqYJD8Sm69BcbX6BTx0kWOC+EfNuxGon5/0m+T1LtIUtcNYx4N3w+xwdVH32YA+oOxnZ+0CiMQqkc0Rf0sxGr8LH5Tk0KNygH71re3WSXxXhQMK7230kMPlt/SclFLn0clJ6k17IHl2IbkWFu5sJ6jGs53uSeLtttzaw3n1haa1KZGm21979tx+omzSwmHqoqmoCpJKt/CdtQDW9jv3kUnhYZbKcc7o+8PmLU+UuD63/MTuZZmbUAKlN/Mp+6GIPytYd9rmaOGoplwBcCtSJ+9azqO5tcOPx9518XkiAa6GsG17Brow53629R36yWpcMokoveP+om/hnxkuPtTrApU4BI8rfTg/hJjKRo6avlQhKijUUe7X7aSDcD1W9pYnhHPqmOU0q6haibKwYEOPrswt15+sxX0pd0TRRa3tL8EsiImU1CIiAIiIAiIgCIiAIiIAiIgCIiAIiIBiZiIBF/H+WvmOCb4YJqUiKigcnTfUAOp0lrDqbSnMTiEdVc7bWt39p+iZBfEf2d0s0qGrSf4TsbsttSE7kkDYgk8729Jp6e5QymUW1apKS8Fe+E//ANlYgjyot1vydxf8/wAZKfE+XVMfga7U+KShj6hWVmAP+wE/L1nTyD7PDltTW9YEAEaVW17+pO30k5p4VKaaABpta3cHm/e8nbev4vJxVNvLPzjh3OkC4IP3W/Rh0Yces96VFcU1mJDqLiwFipNhffv2sZ2PEXhw+H670yLo51Uj109NJ6svBU8ixnNbDFCrqDqXlTz2YEdbzTXLVHbcpswvszawqGmSoY7cqeR7d/pabeAzx8AxR1LKovpta63AJQ77rcAjt2sZ5vQXGBOusWR+oe11Vvc/UE9ZxqIdHV1FmQ33OxHBG/II2t14kpd34K645eWSbM0p5hoxFDzOhu1O4DkWO4BBBO+4HIJnd8AYYYqsKh1lQCyrcFUYXBVr+YW2KkbHa+8iFBlqOQLAndORrvvYEbq44uNiRvvzOPA6CjiLqXtWQll07AqwHn28hJDehNx2vXbtW8F0EtSTLGiInmGwREQBERAEREAREQBERAEREAREQBERAEREAREQBERAON4lyRM9oGm1gw3RiL6WH6EXB9DKkxuCfLGK1dmU6W9P4SD1Ft79mt0l5ys/tRompWwyot3dWVulxqQLqPQXZue5mjp7GpYM99akskRyhjTd6LXIvqS3IvvYX53UkdQdr9J4vhKiuFRkdTfysQrWv2Y2I9J51waek+YMg35v5GAbburBTb0PrOvmaf4ggdOdiV9DsSvs1vl6nbfjGxjT8ng+WrRRt2d0a5sR5TZfLfYqNw9zbg8arTqfZmXONZ6hOplZbm9yx81m/wCJI9pwslqlB5bjWLX6gjcA97XI9ie8sP7PUWv8SoHBdTpZV4sQCCfnf6GQu2rbf7ksqk3ZgncRE8s9AREQBERAEREAREQBERAEREAREQBERAEREAREQBERAMSsvGuDqpitZJ0M66SeNIVNh7OpNvX1lmzm51lq5rSKHYghlPZlNxf06H0Jk6pKMsshZFyjhFZeNMpOEqudS2q1GKX2AayuVP8Ay/E+0iuAxFTB1GV7qitsH2Kcgg345sQf1lmZzRXHYd8FVV1r/eR2AZWZAApUrubqNPF9zzIc2X/HQqw863DqeQQWUhvWwsfke831Sckk/HyYrMRz6fwaGa1DgwdF/ObttupPm5G5sb7j/wB7fgDNvh4lPvF6nkcWuGWxIYW3JBAv2F5q5D4XxVXSpUmg99LncgDi/BB439DzJPkvgqrgcQr3C6CGvYMjWPFjYg9iLETtk4OLTfjgVqUZLbP3LGiYmZ5h6AiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAJiZiAauKwiYoWdA3a/I9jyPlIh4jyF8HVTFUNRAK/GQElmANri9yTY7+wk4iThY4vKK7KlNYfJrYJtSL5dO3AFh6WHQEb26TamJmRZNCIicOiIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAf/Z', 'Gioco multifunzionale per cani,atossico lungaresistenza', 11,$dog,'Corde','Sintetico');
$dog_house= new House('Cuccia per cani', 'https://cuccepercani.net/wp-content/uploads/2016/07/cuccia-esterno-apribile.jpg', 'Cuccia per cani in legno, comoda e resistente alle intemperie', 70,$dog,30,'Legno');
$houses = [$dog_house];
$games = [$scratching_post,$cat_game,$dog_game];
$foods = [$dog_food,$cat_food];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <header class="bg-dark text-center text-white p-3 position-sticky">
               <h1>ANIMAL MARKET</h1>
    </header>
    <main>
        <div class="container my-5">
            <!-- HOUSES -->
            <h1>Houses:</h1>
            <div class="row row-cols-4">
                <?php foreach($houses as $house):?>
                <div class="col p-3">
                  <div class="card p-3 h-100" style="width: 18rem;">
                     <img src="<?=$house->image?>" class="card-img-top" alt="<?=$house->name?>">
                     <div class="card-body">
                        <h3><?=$house->name?></h3>
                        <p><strong>Categoria:</strong> <?=$house->categories->name?></p>
                        <p><strong>Prezzo:</strong> <?=$house->price?>€</p>
                        <p><strong>Materiale:</strong> <?=$house->material?></p>
                        <p><strong>Peso:</strong> <?=$house->weight?>Kg</p>
                     <p class="card-text"><strong>Descrizione:</strong> <?=$house->description?></p>
                   </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>

        <div class="container my-5">
            <!-- GAMES -->
            <h1>Games:</h1>
            <div class="row row-cols-4">
                <?php foreach($games as $game):?>
                <div class="col p-3">
                  <div class="card p-3 h-100" style="width: 18rem;">
                     <img src="<?=$game->image?>" class="card-img-top" alt="<?=$game->name?>">
                     <div class="card-body">
                        <h3><?=$game->name?></h3>
                        <p><strong>Categoria:</strong> <?=$game->categories->name?></p>
                        <p><strong>Prezzo:</strong> <?=$game->price?>€</p>
                        <p><strong>Materiale:</strong> <?=$game->material?></p>
                        <p><strong>Tipologia:</strong> <?=$game->type?></p>
                     <p class="card-text"><strong>Descrizione:</strong> <?=$game->description?></p>
                   </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>

        <div class="container my-5">
            <!-- FOODS -->
            <h1>Foods:</h1>
            <div class="row row-cols-4">
                <?php foreach($foods as $food):?>
                <div class="col p-3">
                  <div class="card p-3 h-100" style="width: 18rem;">
                     <img src="<?=$food->image?>" class="card-img-top" alt="<?=$food->name?>">
                     <div class="card-body">
                        <h3><?=$food->name?></h3>
                        <p><strong>Categoria:</strong> <?=$food->categories->name?></p>
                        <p><strong>Prezzo:</strong> <?=$food->price?>€</p>
                        <p><strong>Scadenza:</strong> <?=$food->expiration?></p>
                        <p><strong>Ingredienti:</strong> <?=$food->ingredients?></p>
                     <p class="card-text"><strong>Descrizione:</strong> <?=$food->description?></p>
                   </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>