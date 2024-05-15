<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
 icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

 <?php 
    require_once __DIR__ . '/Models/Shop.php';
    require_once __DIR__ . '/Models/Categories.php';
    


    $dog = new Categories ('cane');
    $cat = new Categories ('gatto');
    
    $product1 = new Shop ('Gunzaglio', 'Prodotto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non porro inventore itaque voluptates cum ea atque unde distinctio corrupti, amet at veritatis? In illum quis ducimus laborum nobis tempora nostrum.','https://fastly.picsum.photos/id/1009/300/200.jpg?hmac=ylPtCmzmDQqOyCKacjGk30nzAn7JjMT66-xkdS91kig' ,'9.90', $dog );
    $product2 = new Shop ('Sabbia', 'Prodotto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non porro inventore itaque voluptates cum ea atque unde distinctio corrupti, amet at veritatis? In illum quis ducimus laborum nobis tempora nostrum.','https://fastly.picsum.photos/id/1009/300/200.jpg?hmac=ylPtCmzmDQqOyCKacjGk30nzAn7JjMT66-xkdS91kig' ,'7.80', $cat);
    $product3 = new Shop ('Peluche', 'Gioco', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non porro inventore itaque voluptates cum ea atque unde distinctio corrupti, amet at veritatis? In illum quis ducimus laborum nobis tempora nostrum.','https://fastly.picsum.photos/id/1009/300/200.jpg?hmac=ylPtCmzmDQqOyCKacjGk30nzAn7JjMT66-xkdS91kig' ,'11.70', $dog);
    $product4 = new Shop ('Crocchette', 'Cibo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non porro inventore itaque voluptates cum ea atque unde distinctio corrupti, amet at veritatis? In illum quis ducimus laborum nobis tempora nostrum.','https://fastly.picsum.photos/id/1009/300/200.jpg?hmac=ylPtCmzmDQqOyCKacjGk30nzAn7JjMT66-xkdS91kig'  ,'54.10', $cat);

    $products = [$product1, $product2, $product3, $product4];
   

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>
 <body>
     <main>
        <section class="container mt-5 d-flex">
            <?php foreach ($products as $product) { ?>
                <div class="card me-4" style="width: 18rem;">
                    <img src="<?php echo $product->image ?>" class="card-img-top overflow-hidden" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->product ?></h5>
                        <div class="d-flex">
                            <div class="me-2"><?php echo $product->category->setIcon() ?> </div>
                            <div> <?php echo $product->type  ?></div>
                        </div>
                        <p class="card-text"> <?php  echo $product->description ?></p>
                        <div class="ms-2" >€ <?php echo $product->price  ?></div>
                    </div>
                </div>
            <?php } ?>
        </section>
     </main>
     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
 </html>