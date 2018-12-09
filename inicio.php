<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info sep">
        <div class="carrito">
            <a href="carrito.php" id="icon" class="btn btn-success">Carro de compra <i class="fas fa-shopping-cart"></i></a>
            <div class="circulo"></div>
        </div>
    </nav>
        <form action="carrito.php" method="POST">
            <div class="form-group">    
                <h1>Selecciona el producto a añadir al carrito</h1>
                <select name="product">
                    <option value="p1-899-Xiaomi Mi Air 13.3">Xiaomi Mi Air 13.3"</option>
                    <option value="p2-489-LG 55UK6200PLB 55 LED IPS UltraHD 4K">LG 55UK6200PLB 55" LED IPS UltraHD 4K</option>
                    <option value="p3-289-Samsung Galaxy A7 Negro">Samsung Galaxy A7 Negro</option>
                    <option value="p4-299-Asus GeForce GTX 1060 Expedition OC 6GB GDDR5">Asus GeForce GTX 1060 Expedition OC 6GB GDDR5</option>
                    <option value="p5-319-LG 27GK750FB 27 LED FullHD 240Hz FreeSync">LG 27GK750F-B 27" LED FullHD 240Hz FreeSync</option>
                    <option value="p6-199-Medion Akoya MD60691 Intel Atom x5Z8350/4GB/64GB/11.6 Táctil">Medion Akoya MD60691 Intel Atom x5-Z8350/4GB/64GB/11.6" Táctil</option>
                    <option value="p7-179-Samsung Galaxy Tab A 10.1 2016 32GB Negra">Samsung Galaxy Tab A 10.1" 2016 32GB Negra</option>
                    <option value="p8-219-Cecotec Conga Serie 1090">Cecotec Conga Serie 1090</option>
                    <option value="p9-285-LG 43LJ500V 43 LED Full HD">LG 43LJ500V 43" LED Full HD</option>
                    <option value="p10-1199-HP OMEN 15DC0000NS Intel Core i78750H/16GB/1TB+256GB SSD/GTX 1060/15.6">HP OMEN 15-DC0000NS Intel Core i7-8750H/16GB/1TB+256GB SSD/GTX 1060/15.6"</option>
                    <option value="p11-94-AOC I2281FWH 21.5 IPS">AOC I2281FWH 21.5" IPS</option>
                </select>
                <br>
                <label>Cantidad: </label>
                <input type="number" name="cantidad" min="1" value="1">
                <input type="hidden" name="anadido" value="si">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    <div>
        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo1.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Xiaomi Mi Air 13.3"</h4>
                <button class="btn btn-primary">899€</button>
            </div>
         </div>

        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo2.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">LG 55UK6200PLB 55" LED IPS UltraHD 4K</h4>
                <button class="btn btn-primary">489€</button>
            </div>
        </div>

        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo3.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Samsung Galaxy A7 Negro</h4>
                <button class="btn btn-primary">289€</button>
            </div>
        </div>

        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo4.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Asus GeForce GTX 1060 Expedition OC 6GB GDDR5</h4>
                <button class="btn btn-primary">299€</button>
            </div>
        </div>

        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo5.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">LG 27GK750F-B 27" LED FullHD 240Hz FreeSync</h4>
                <button class="btn btn-primary">319€</button>
            </div>
        </div>
        
        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo6.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Medion Akoya MD60691 Intel Atom x5-Z8350/4GB/64GB/11.6" Táctil</h4>
                <button class="btn btn-primary">199€</button>
            </div>
        </div>

        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo7.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Samsung Galaxy Tab A 10.1" 2016 32GB Negra</h4>
                <button class="btn btn-primary">179€</button>
            </div>
        </div>

        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo8.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Cecotec Conga Serie 1090</h4>
                <button class="btn btn-primary">219€</button>
            </div>
        </div>
        
        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo9.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">LG 43LJ500V 43" LED Full HD</h4>
                <button class="btn btn-primary">285€</button>
            </div>
        </div>
        
        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo10.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">HP OMEN 15-DC0000NS Intel Core i7-8750H/16GB/1TB+256GB SSD/GTX 1060/15.6"</h4>
                <button class="btn btn-primary">1199€</button>
            </div>
        </div>
        
        <div class="card float-left articulo" style="width:300px">
            <img class="card-img-top" src="img/articulo11.jfif" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">AOC I2281FWH 21.5" IPS</h4>
                <button class="btn btn-primary">94€</button>
            </div>
        </div>
    </div>
    

    <!--Script de Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<!--

Enlaces de Bibliografia

https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_number

-->