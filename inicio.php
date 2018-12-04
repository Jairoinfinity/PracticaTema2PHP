<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menu">
        <div class="carrito">
            <label for="icon">Carro de compra</label>
            <a href="" id="icon"><img src="" alt="carrito"></a>
            <div class="circulo"></div>
        </div>
    </div>
    <div class="formulario">
        <form action="carrito.php" method="POST">
            <h1>Selecciona el producto a añadir al carrito</h1>
            <select name="product">
                <option value="p1-899-Xiaomi Mi Air 13.3">Xiaomi Mi Air 13.3"</option>
                <option value="p2-489-LG 55UK6200PLB 55 LED IPS UltraHD 4K">LG 55UK6200PLB 55" LED IPS UltraHD 4K</option>
                <option value="p3-289-Samsung Galaxy A7 Negro">Samsung Galaxy A7 Negro</option>
                <option value="p4-299-Asus GeForce GTX 1060 Expedition OC 6GB GDDR5">Asus GeForce GTX 1060 Expedition OC 6GB GDDR5</option>
                <option value="p5-319-LG 27GK750F-B 27 LED FullHD 240Hz FreeSync">LG 27GK750F-B 27" LED FullHD 240Hz FreeSync</option>
                <option value="p6-199-Medion Akoya MD60691 Intel Atom x5-Z8350/4GB/64GB/11.6 Táctil">Medion Akoya MD60691 Intel Atom x5-Z8350/4GB/64GB/11.6" Táctil</option>
                <option value="p7-179-Samsung Galaxy Tab A 10.1 2016 32GB Negra">Samsung Galaxy Tab A 10.1" 2016 32GB Negra</option>
                <option value="p8-219-Cecotec Conga Serie 1090">Cecotec Conga Serie 1090</option>
                <option value="p9-285-LG 43LJ500V 43 LED Full HD">LG 43LJ500V 43" LED Full HD</option>
                <option value="p10-1199-HP OMEN 15-DC0000NS Intel Core i7-8750H/16GB/1TB+256GB SSD/GTX 1060/15.6">HP OMEN 15-DC0000NS Intel Core i7-8750H/16GB/1TB+256GB SSD/GTX 1060/15.6"</option>
                <option value="p11-94-AOC I2281FWH 21.5 IPS">AOC I2281FWH 21.5" IPS</option>
            </select>
            <br>
            <label>Cantidad: </label>
            <input type="number" name="cantidad" min="1" value="1">
            <input type="submit">
        </form>
    </div>
    <div class="articulos">
        <div class="articulo">
            <div class="titulo">Xiaomi Mi Air 13.3"</div>
            <img src="img/articulo1.jfif" alt="" class="imgArticulo">
            <div class="precio">899€</div>
        </div>
        <div class="articulo">
            <div class="titulo">LG 55UK6200PLB 55" LED IPS UltraHD 4K</div>
            <img src="img/articulo2.jfif" alt="" class="imgArticulo">
            <div class="precio">489€</div>
        </div>
        <div class="articulo">
            <div class="titulo">Samsung Galaxy A7 Negro</div>
            <img src="img/articulo3.jfif" alt="" class="imgArticulo">
            <div class="precio">289€</div>
        </div>
        <div class="articulo">
            <div class="titulo">Asus GeForce GTX 1060 Expedition OC 6GB GDDR5</div>
            <img src="img/articulo4.jfif" alt="" class="imgArticulo">
            <div class="precio">299€</div>
        </div>
        <div class="articulo">
            <div class="titulo">LG 27GK750F-B 27" LED FullHD 240Hz FreeSync</div>
            <img src="img/articulo5.jfif" alt="" class="imgArticulo">
            <div class="precio">319€</div>
        </div>
        <div class="articulo">
            <div class="titulo">Medion Akoya MD60691 Intel Atom x5-Z8350/4GB/64GB/11.6" Táctil</div>
            <img src="img/articulo6.jfif" alt="" class="imgArticulo">
            <div class="precio">199€</div>
        </div>
        <div class="articulo">
            <div class="titulo">Samsung Galaxy Tab A 10.1" 2016 32GB Negra</div>
            <img src="img/articulo7.jfif" alt="" class="imgArticulo">
            <div class="precio">179€</div>
        </div>
        <div class="articulo">
            <div class="titulo">Cecotec Conga Serie 1090</div>
            <img src="img/articulo8.jfif" alt="" class="imgArticulo">
            <div class="precio">219€</div>
        </div>
        <div class="articulo">
            <div class="titulo">LG 43LJ500V 43" LED Full HD</div>
            <img src="img/articulo9.jfif" alt="" class="imgArticulo">
            <div class="precio">285€</div>
        </div>
        <div class="articulo">
            <div class="titulo">HP OMEN 15-DC0000NS Intel Core i7-8750H/16GB/1TB+256GB SSD/GTX 1060/15.6"</div>
            <img src="img/articulo10.jfif" alt="" class="imgArticulo">
            <div class="precio">1199€</div>
        </div>
        <div class="articulo">
            <div class="titulo">AOC I2281FWH 21.5" IPS</div>
            <img src="img/articulo11.jfif" alt="" class="imgArticulo">
            <div class="precio">94€</div>
        </div>
    </div>
    
</body>
</html>

<!--

Enlaces de Bibliografia

https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_number

-->