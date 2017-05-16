<!doctype html>
<meta charset="utf-8">
<html lang="es">
<head>
<title>En linea</title>
<meta charset="UTF-8">       
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="MobileOptimized" content="width"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="robots" content="no index">
<meta name="keywords" content="Geometria, Dibujo técnico, Dibujo lineal, Creatividad, Bellas artes">
<meta name="description" content="El objetivo es aprender">
<meta name="generator" content="SublimeText,HTML5,CSS3,PHP,Apache">
<meta name="MiguelAlfonso" content="geometria">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="newcss.css"/>
<link rel="icon" href="imagenes/imagenes/fabicon20.png" type="image/x-icon">
</head>
<body>
<noscript>
<p>Bienvenido a Mi Sitio</p>
<p>Para visualizar el contenido completo de este sitio es necesario tenerJavaScript habilitado. Aqu&#65533; est&#65533;n las 
<a href="http://www.enable-javascript.com/es/" target="_blank"> 
instrucciones para habilitar JavaScript en tu navegador web</a>. .</p>
</noscript>
<a id="ini"></a>
<div id="contenedor">
<h4>#Linear en #linea</h4> 
<?php $fecha = date("<p>d-m-Y</p>"); ?>
<kbd>#esmiguelalfonso <?php echo "<p> $fecha</p>"; ?></kbd>     
</div>
<div class="form_caja_cero"><kbd>Linear ha sido visitada
<?php 
function contador(){ $archivo = "visitas.txt"; $f = fopen($archivo, "r"); if($f){
$contador = fread($f, filesize($archivo)); $contador = $contador + 1; fclose($f); }
$f = fopen($archivo, "w+"); if($f){ fwrite($f, $contador); fclose($f);} return $contador; } 
echo contador()." veces </kbd>";  ?>
<?php 
echo "<kbd>Tu IP es: {$_SERVER['REMOTE_ADDR']}</kbd>"; 
echo "<kbd>El navegador y agente: {$_SERVER['HTTP_USER_AGENT']}</kbd>"; 
?>
<?php 
$arc = "private.txt"; $mas = fopen($arc,"a+"); 
$ip = $_SERVER['REMOTE_ADDR']."\r\n".PHP_EOL; 
$fecha= date("d-m-Y"); fwrite($mas,$ip); fwrite($mas,$fecha); fclose($mas); 
?>
</div>
<div style="clear: both"></div>
<nav>
<ul class="menu">
<li><a href="#circulo" title="circulo" alt="circulo">El circulo</a></li>
<li><a href="#circulo2" title="circulo" alt="circulo y rectas">El circulo y sus rectas</a></li>
<li><a href="#triangulo" title="triangulos" alt="triangulos">Los triangulos</a></li>
<li><a href="#altura" title="t. altura" alt="teorema altura">El teorema de la altura</a></li>
<li><a href="#cateto" title="t. cateto" alt="teorema cateto">El teorema del cateto</a></li> 
<li><a href="#cuadrilateros" title="cuadrilateros" alt="cuadrilateros">Los caudrilateros</a></li>
<li><a href="#areas" title="las areas" alt="el area">Que es el area</a></li>
<li><a href="#tales" title="t. Tales" alt="teorema Tales">Teorema de Tales</a></li>
<li><a href="#armonica" title="Razon armonica" alt="razon aurea">Una razon Aurea</a></li>
<li><a href="#trigonometria" title="la trigonometria" alt="trigonometria">Principios de trigonometria</a></li>
<ul>
</nav>
<br/><br/>
<div style="clear: both"></div>
<div class="form_caja">
<h1>Algunos recursos externos</h1><br/>
<nav>
<ul class="menu">
<!--COMENTARIO-->
<li>Acceso<a href="Agenda/Agenda/agenda.php" target="_blank" alt="MyAgenda">MyAgenda</a></li>
<li>Accede recursos Google+ <a href="2.php" target="_self" alt="recursos">Geogebra</a></li>
</ul>
</nav>
</div>
<a id="circulo"></a>
<div class="form_caja">
</br><h5>El círculo.</h5>
<h1>1. El círculo, es siempre un círculo.</h1></br>
<p>La circunferencia es el lugar geométrico de los puntos del plano que equidistan de uno fijo llamado centro.</p></br> 
<p>Tambien es el conjunto de dos puntos del plano cuya distancia a uno fijo, llamado centro, es una cantidad constante llamada radio.</p></br>
<p>Por lo tanto de una circunferencia F, para quedar perfectamente definida se ha de conocer su centro O y su radio R.</p>
</br><p>F (O R)</p><br/>
<img src="imagenes/imagenes/circuloF.jpg" alt="el circulo" title="Circulo"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">
<h1>2. Los elementos de una circunferencia.</h1></br>
<p><b>Centro</b>: Es el punto interior de que equidistan todos los puntos de la curva. El centro es O</p></br>
<p><b>Radio</b>: Es todo segmento que une un punto cualquiera de la circunferencia con el centro.</p></br>
<p>O H es radio, O D es radio, O C es radio, son radios.</p></br>
<p><b>Cuerda</b>: Es todo segmento que une dos puntos no consecutivos de la circunferencia. Pongamos A B es cuerda, tambien C D.</p></br>
<p><b>Arco</b>: Es la porcion de circunferencia entre dos puntos, A B es arco, B A es otro arco. Toda cuerda divide la circunferencia en dos arcos.</p></br>
<p><b>Diametro</b>: Todo elemento que une dos puntos de la circunferencia pasando por el centro C D es un diametro.</p></br>
<p>De las anteriores definiciones deducimos que:</p>
<p>Un diametro es igual a dos radios.</p>
<p>Un diametro es la cuerda mayor.</p>
<p>Un diametro divide a la circunferencia en dos arcos iguales.</p></br>
<img src="imagenes/imagenes/020circulo.gif" alt="Elementos circunferencia" title="Elementos del circulo"/><br/><br/>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">              
<h1>3. Determinacion de una circunferencia por tres puntos.</h1></br> 
<p>Por tres puntos no alineados pasa una circunferencia y solo una.</p></br> 
<p>Sean A, B y C tres puntos dibujados no alineados en una superficie, uniremos estos puntos con dos lineas tales que obtendremos los segmentos.</p>
<p>Trazamos las mediatrices de estos segmentos que llamaremos A B, B C, el punto de interseccion de estas sera el nuevo punto hallado O que equidista de A, B, C, 
luego es el centro de la circunferencia de radio</p><p>O A = O B = O C</p></br>
<p>Como mediatriz comprendemos que es la linea recta perpendicular al segmento que parte este en dos lados iguales y pasara por el centro.</p><br/>  
<img src="imagenes/imagenes/021circulo3puntos.gif" alt="Circulo 3 puntos" title="Circulo por tres puntos"/><br/><br/>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">        
<h1>4. El angulo central.</h1></br></br> 
<p>Definicion: Angulo central es el angulo cuyo vertice esta en el centro de una circunferencia.</p> 
<p>Las semirrectas O A y O C forman dos angulos cuya suma es 360&deg; correspondiente al citar el angulo A O C nos referimos al menor de estos dos de no indicar lo contrario.</p>
<p>Definicion de Arco correspondiente a un angulo es:</p> 
<p>El arco comprendido entre dos lados y cuyo centro es el vertice del angulo, asi en la figura el arco A C B es el correspondiente al angulo A O C.</p>
<p>Definicion de Cuadrante es: El arco correspondiente a un angulo recto de 90&deg;</p>
<p>Definicion de Semicircunferencia es: El arco correspondiente a un angulo llano o de dos rectos 180&deg;</p><br/>
<img src="imagenes/imagenes/022anguloCentral.gif" alt="Angulo central" title="Angulo central"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>5. Las unidades empleadas.</h1></br></br>
<p>La unidad de angulos es el angulo recto del cual se usan dos submultiplos:</p> 
<P>El grado sexagesimal y el grado centesimal simbolicamente se representan el primero por el signo ( &deg; ) y el segundo el signo g.</p> 
<P>El angulo recto tiene 90&deg; o bien 100g</p> 
<P>El arco correspondiente al angulo recto se denomina cuadrante, ademas despues de estudios se ha convenido que, como en los angulos, a cada cuadrante corresponden 90 grados, o bien 100 g, 
la primera de estas divisiones se llama sexagesimal y la segunda centesimal.</p> 
<P>Un grado sexagesimal se divide a su vez en 60 minutos sexagesimales (que se representan por 60') y a su vez en sesenta segundos (60'').</p> 
<p>Un grado centesimal se divide en 100 m minutos centesimales y el minuto en 100 s segundos centesimales.</p><br/><br/>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>6. El diametro perpendicular a una cuerda.</h1></br></br>
<p>El diametro perpendicular a una circunferencia divide a esta y a sus arcos correspondientes en dos partes iguales.</p> 
<p>Uniendo O con A y B se tiene A O = O B por ser radios.</p> 
<p>Por lo tanto son oblicuas iguales, estas sabemos que se apartan la misma distancia del punto P de la perpendicular.</p> 
<p>Por lo tanto A P = P B</p>
<p>Trazando ahora las cuerdas entre A D y B D, resultan ser oblicuas que se apartan la misma distancia del punto P de la perpendicular.</p>
<p>Asi que A D = B D</P>
<P>Y en consecuencia, tambien: arco A D = arco B D</p><br/>
<img src="imagenes/imagenes/023DPerpendicular.gif" alt="Perpendicular diametro" title="Diametro perpendicular"/>
</br></br></br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>7. Arcos comprendidos entre rectas paralelas.</h1></br></br>
<p>Los arcos comprendidos entre rectas paralelas tienen un alto coeficiente de igualdad.</p>
<p>El diametro perpendicular a una de ellas tambien lo es a la otra, luego este divide a cada cuerda y a sus arcos en dos partes iguales.</p><br/>
<img src="imagenes/imagenes/ArcosRectasParalelas.jpg" alt="ArcosRectasParalelas" title="Arcos y sus rectas paralelas"/>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a><br/><br/>
</br></br>
</div>
<div style="clear: both"></div>
<a id="circulo2"></a>
<div class="form_caja">
</br><h5>El circulo y sus rectas.</h5>
<h1>1. La importancia de la circumferencia y sus rectas.</h1></br></br>
<p>La recta B y la circunferencia tienen el punto Q comun, la recta B es tangente a la circunferencia.</p>
<p>La recta C y la circunferencia no tienen ningun punto comun, luego la recta C es exterior a ella.</p> 
<p>La recta A y la circunferencia tienen dos puntos comunes I y H, luego la recta A es secante a la circunferencia dada.</p><br/>
<img src="imagenes/imagenes/circumferenciaYrecta.jpg" alt="CircumferenciaYrectas" title="Circunferencia y rectas"/><br/><br/>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>2. Posibles posiciones de sus rectas.</h1></br></br>
<p><b>Exteriores</b>: Si no tienen ningun punto en comun y el segmento que une sus centros es mayor que la suma de sus radios sera que.</p>
<p>O O' &gt; R + r</p></br></br>
<img src="imagenes/imagenes/exteriores.jpg" alt="Exteriores"/></br></br>
<p><b>Interiores</b>: Si no tienen ningun punto comun y el segmento que une sus centros es menor que la suma de sus radios, se llaman interiores y seran tal que.</p>
<p>O O' &lt; R + r</p><br/>
<img src="imagenes/imagenes/interiores.jpg" alt="Interiores"/></br></br>
<p><b>Concentricas</b>: Si dos circunferencias interiores tienen el mismo centro se llaman concentricas, el espacio comprendido entre dos circunferencias concentricas se llama corona o anillo circular.</p><br/>
<img src="imagenes/imagenes/concentricas.jpg" alt="Concentricas" title="Concentricas"/></br></br>
<p><b>Tangentes</b>: Si dos circunferencias tienen un solo punto comun se llaman tangenciales, pueden ser tangentes interiores o tangentes exteriores. 
En dos circunferencias tangentes exteriores la distancia entre sus centros es igual a la suma de sus radios.</p>
<p>O O' = R + r</p>
<p>El punto de contacto o de tangencia se encuentra en la recta que une los centros en un caso en su prolongacion.</p><br/>
<img src="imagenes/imagenes/tangentes.jpg" alt="Tangentes" title="Tangentes"/></br></br>
<p><b>Secantes</b>: Si dos circunferencias tienen dos puntos comunes se llaman secantes, tienen las dos una cuerda comun A B, que une los puntos en que se cortan, esta cuerda es perpendicular al segmento que une los centros de las circunferencias.</p><br/>
<img src="imagenes/imagenes/secantes.jpg" alt="Secantes" title="Secantes"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">                
<h1>3. La longitud de la circunferencia.</h1></br></br> 
<p>Tomemos una moneda y midamos su contorno con un hilo, si dividimos este contorno por su diametro obtendremos la cifra: 3,14</p> 
<p>si repetimos este ejercicio con cualquier objeto circular del tamano que se desee, siempre obtendremos el mismo resultado, o sea. 3,14</p>
<p>Por lo tanto, la relacion entre la longitud de una circunferencia y su diametro es <b>constante</b> y vale siempre 3,14 con 9 decimales= 3,141592654 o redondeando mas 3,1416</p>
<p>A este numero lo llamamos (pi) de esta relacion obtenemos que Lc = Longitud de la circunferencia</p> 
<p>(L c = &#960; x d)   como d = 2 r (r = radio)   (L c = &#960; x 2 x r = 2 &#960; r)</p>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br>
</div>
<div style="clear: both"></div>
<a id="triangulo"></a>  
<div class="form_caja">
</br><h5>Los triangulos.</h5>
<h1>1. Un triangulo.</h1></br></br>
<p>Cuando tenemos tres o mas puntos en un plano que no estan situados en linea recta y unimos dichos puntos con segmentos limitamos un trozo o un espacio.</p> 
<p>Esta porcion del plano limitada por segmentos se llama poligono, un poligono se nombra por las letras de todos sus vertices.</p> 
<p>Tendremos por ejemplo el poligono (A B C D) o (E F G H Y) o (A B C) o (S T U) o (J K L LL) o (P Q R S)</p>
<p>La linea quebrada formada por los segmentos ha de ser <b>cerrada obligatoriamente</b>.</p></br></br>
<img src="imagenes/imagenes/Poligono.jpg" alt="Poligono" title="Un poligono"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>2. El triangulo es un poligono de tres lados.</h1></br></br>
<p>La union de estos puntos por medio de segmentos limita una porcion de plano. 
Por lo tanto, triangulo es la porcion de plano limitada por segmentos. 
Un triangulo se escribe y nombra con las letras de sus vertices y un triangulo sobre ellas. (Vertices) son los puntos A, B y C.</p>
<p>(Lados) son los segmentos A B, B C, C A que unen los vertices. Generalmente el lado se designa con la letra <b>minuscula</b> del vertice al que se oponen.</p>
<p>A B = c  B C = a  A C = b</p></br></br>
<p>(<b>Perimetro</b>) o contorno es la suma de los lados de un triangulo a + b + c = P</p>
<p>(<b>Angulos interiores</b>) son los lados contiguos que se unen en un solo vertice y forman un angulo en el interior del triangulo, A, B y C son los angulos interiores.</p>
<p>(<b>Base</b>) es el lado sobre el que parece apoyarse el triangulo, se llama base del triangulo. Cualquier lado se puede tomar como base del triangulo.</p>
<p>(<b>Altura</b>) es el segmento trazado sobre un lado o su prolongacion desde el vertice opuesto. Recibe el nombre de altura del triangulo y para definirla se usa la letra "h".</p>            
<p>(<b>Mediana</b>) todo segmento que une un vertice con el punto medio de un lado de un triangulo se llama mediana (m). Un triangulo tiene tan solo tres.</p>
<p>(<b>Mediatriz</b>) es la perpendicular trazada en el punto medio de un lado, un triangulo tiene solo tres.</p>
<p>(<b>Bisectriz</b>) es la recta que divide un angulo en dos partes iguales. Un triangulo tiene tres bisectrices una por cada angulo.</p><br/>
<img src="imagenes/imagenes/Poligonotreslados.jpg" alt="Poligonotreslados" title="Poligono tres lados"/>
</br></br></br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">
<h1>3. Suma de los angulos de un triangulo.</h1></br></br>
<p>Supongamos un triangulo A B C, y prolongado el lado B C. Por el punto C trazamos una paralela al lado A B, que sera C D.</p>
<p>De este modo se nos han formado los angulos 1' 2'</p>
<p>La suma 3 + 2' + 1' vale 180&deg; = 2 rectos, es por ser A B paralela a C D y A C secante a ellas.</p> 
<p>Los angulos 2 y 2' son iguales dado que son alternos internos.</p> 
<p>2 = 2' esto es por ser A B paralela a C D y A C y E B secante a ambas.</p> 
<p>1 y 1' son iguales por ser correspondientes.</p>
<p>Luego si tenemos que:</p> 
<p>(3 + 2' + 1' = 180&deg; grados) (2 = 2') (1 = 1')</p>
<p>Tambien (1 + 2 + 3 = 180&deg; grados)</p>
<p>La suma de los angulos interiores de cualquier triangulo siempre suman <b>180&deg;</b> o lo que es lo mismo dos angulos rectos, 
tambien el angulo mayor se opondra siempre al lado mayor.</p>
<P>La prolongacion de B C y el lado A C forman un angulo llamado exterior del triangulo.</p>
<p>Angulo exterior de un triangulo es el angulo formado por la prolongacion de un lado y el lado contiguo.</p>
<p>El lado exterior vale 1' + 2' pero como 3 = 3 (1' + 2' + 3 = 1' + 2' + 3 = 180&deg; ) (1' + 2' = 180&deg; - 3)</p><br/>
<img src="imagenes/imagenes/Sumaangulos.jpg" alt="Sumaangulos" title="Suma de angulos triangulo"/></br></br>       
<p><b>Por la demostracion anterior sabremos que:</b></p></br></br> 
<p>1 + 2 = 180&deg; - 3 Luego (1 primo + 2 primo = 180&deg; - 3) (1 + 2 = 180&deg; -3) (1 primo + 2 primo = 1 + 2)</p>
<p>Un angulo exterior de un triangulo es igual a la suma de los dos angulos internos de triangulo contiguos, no adyacentes.</p><br/><br/>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>4. Las clases de triangulos.</h1></br></br>
<p>De esas figuras que son los <b>triangulos</b> podemos establecer dos clasificaciones, 
la primera es por sus <b>lados</b> y la segunda por sus <b>angulos</b>.</p><br/>
<p><strong>1 Por sus lados</strong>. Un triangulo puede ser equilatero por tener sus tres lados iguales. 
Ser isosceles cuando solo tiene dos lados iguales. 
Y ser escalena cuando tiene los tres lados desiguales.</p>
<p><strong>2 Por los angulos</strong> que los triangulos puede tener. 
Cuando tienen un angulo recto recibe el nombre de rectangulo y asi los lados que forman 
este angulo se llaman catetos y el lado opuesto al angulo recto se llama hipotenusa.</p> 
<p>El triangulo con sus tres angulos agudos o menores de 90 grados recibe el nombre de acutangulo.</p> 
<p>Y Por sus angulos mayores de 90 grados reciben el nombre de obtusangulo.</p><br/>
<img src="imagenes/imagenes/clasesTriangulos.jpg" alt="Clasestriangulos" title="Clases de triangulos"/>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<a id="altura"></a>
<div class="form_caja">
</br><h5>El teorema de la altura.</h5>
<h1>1. Teorema de la altura.</h1></br></br>
<p>En un triangulo rectangulo la altura trazada sobre la hipotenusa es media proporcional (media geometrica) 
entre los segmentos que determina sobre esta.</p>
<p>La demostracion se basa en que los triangulos A F C y C F B son semejantes porque tienen sus tres angulos iguales ya que 
los parte su altura h.</p> 
<p>3 = 3' por ser rectos 90&deg;</p> 
<p>2 + 1 = 90&deg; ya que 3 = 90&deg; y los angulos internos de un triangulo cualquiera suman 180&deg; siempre.</p>
<p>2 + 1' = 90&deg; por la misma razon. Luego 1 = 1'</p>       
<p>El angulo 2 ha de ser igual a 2' puesto que 1 + 2 + 3 = 180&deg; y 1' + 2' + 3' = 180 grados asi 
los triangulos cuyos angulos son iguales son semejantes: A F C ~ C F B y podemos escribir que:</p>
<p>AF/CF = CF/FB</p>  
<p>Siendo A F = Lado opuesto al angulo 2</p> 
<p> C F = Lado opuesto al angulo 2'</p> 
<p>C F = Lado opuesto al angulo 1'</p>
<p>El segmento C F es la altura de A B C relativa a la <b>hipotenusa</b>.</p>
<p>AF/h = h/FB</p></br></br>
<img src="imagenes/imagenes/teoremaAltura.jpg" alt="TeoremaAltura" title="Teorema de la Altura"/>
</br></br>
<h1>2. Demostracion de la altura.</h1><br/>
<p>Hay una  torre que no se conoce la altura, pero tenemos su sombra reflejada en el suelo que son 600 m y contamos con un baston de 1,20 m y la sombra de este.</p>
<p>El elemeto <b>BV</b> es la altura de la torre que no conocemos y el <b>BA</b> son los 600 m de la sombra de la torre.</p>
<p>Tenemos <b>MN</b> que son 1,20 m de altura de baston y <b>MP</b> que sera la sombra de este.</p>
<p>Sabemos que <b>BVA</b> es media geometria entre <b>MNP</b> por ser triangulos rectangulos.</p>
<p>Por lo tanto calculamos el resultado de la altura <b>BV</b> que sera <b>(BV = BA . MN / MP)</b></p>
<p>600 . 1,20 = 720 / <b>la sombra del baston</b> = los metros exactos de la altura de la torre.</p>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br></br></br>
</div>
<div style="clear: both"></div>
<a id="cateto"></a>            
<div class="form_caja">
</br><h5>El teorema del cateto.</h5>           
<h1>1. Teorema del cateto.</h1></br></br>
<p>En un triangulo rectangulo un cateto es media proporcional entre la hipotenusa y su proyeccion sobre ella.</p>
<p>El la figura de un triangulo A B C que sea rectangulo C = 90&deg;</p> 
<p>Por el vertice C hemos trazado C D perpendicular a A B.</p> 
<p>(C D &#9524; A B).</p> 
<p>A D es la proyeccion de A C sobre A B. Por otra parte tenemos que A B C ~ A D C por tener sus lados iguales: 
D = C por ser rectos; A = A por ser comun; 1 = 2 ya que dos triangulos que tienen dos angulos iguales tienen el otro forzosamente igual. 
Asi al ser semejantes ambos triangulos, podemos escribir que:</p>     
<p>A C / A B = A D / C B  (A C 2 = A B . A D) (Siendo: A C = lado opuesto al angulo D</p> 
<p>A B = lado opuesto al angulo C</p><p>A D = lado opuesto al angulo 1</p><p>A C = lado opuesto al angulo 2</p>
<p>Tomamos en cuenta ahora los triangulos A B C y B C D podemos escribir igualmente:</p>    
<p>C B / A B = D B / C B (C B 2 = A B . D B) Podemos concluir pues, con que:  Un cateto es media proporcional entre la hipotenusa y su proyeccion sobre ella.</p><br/>
<img src="imagenes/imagenes/TeoremadelCateto.jpg" alt="TeoremadelCateto" title="Teorema del cateto"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">            
<h1>2. Valor del lado opuesto a un angulo obtuso.</h1></br></br>
<p>El triangulo A C D por ser rectangulo nos permite escribir que:</p> 
<p>(A C 2 = A D 2 + D C 2), (A C 2 = (A B + B D) 2 + D C 2), (A C 2  = A B 2 + B D 2  + 2 . A B . B D + D C 2).</p> 
<p>Pero (A D = A B + B D).</p>
<p>Pero en B D C: (B D 2 + D C 2 = B C 2) luego: (A C 2  = A B 2  + B C 2  + 2 . A B . B D) o sea que:</p> 
<p>El cuadrado del lado opuesto a un angulo obtuso, es igual a la suma de los cuadrados de los otros dos lados mas el doble del producto de uno de estos por la proyeccion del otro sobre este.</p>
<p>(b 2 = c 2 + a 2 + 2 c p)</p></br></br>
<img src="imagenes/imagenes/LadoOpuestoAnguloOptuso.jpg" alt="LadoOpuestoAnguloOptuso" title="Lado opuesto a un angulo optuso"/>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br></br></br>
</div>
<div style="clear: both"></div>
<a id="cuadrilateros"></a>
<div class="form_caja">
</br><h5>Los caudrilateros.</h5>
<h1>1. Cuadrilateros.</h1></br></br>
<p><b>Otras figuras planas.</b></p>
<p>El poligono de cuatro lados recibe el nombre de cuadrilatero, los cuadrilateros se clasifican en Trapezoide, Trapecios y Paralelogramos.</p> 
<p> El (trapezoide) es el cuadrilatero cuyos lados opuestos no son paralelos.</p></br></br>
<img src="imagenes/imagenes/trapezoide.jpg" alt="Trapezoide" title="Un trapezoide"/></br></br>
<p>Los (trapecios) son los que tienen dos lados opuestos paralelos y los otros dos no.</p> 
<p>Imagina lados opuestos A B y D C son paralelos (A B // D C) y los lados A D y B C no lo son.</p>
<p>Los trapecios a la vez se clasifican en (trapecio rectangulo), (Isosceles) y (Escaleno).</p>
<p>Las bases de un trapecio son sus lados paralelos, la altura es la perpendicular a la base.</p>
<p>(Rectangulos) si tiene sobre todo dos angulos rectos.</p>
<p>(Isosceles) si los lados no paralelos son iguales.</p>
<p>(Escaleno) si no son rectangulos ni isosceles.</p></br></br>
<img src="imagenes/imagenes/trapecios.jpg" alt="Trapecio" title="Un trapecio"/></br></br>
<p>El (paralelogramo) es el cuadrilatero cuyos lados opuestos son siempre paralelos.</p>
<p>Asi suponiendo que el lado A B es paralelo al lado D C y el A D al B C.</p>
<p>Entonces la base de un paralelogramo es uno cualquiera de sus lados por ser todos paralelos 2 a 2.</p>
<p>La altura es la perpendicular comprendida entre la base y su lado opuesto.</p></br></br>
<img src="imagenes/imagenes/paralelogramo.jpg" alt="Paralelogramo" title="Un paralelogramo"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">
<h1>2. Clasificacion de los poligonos.</h1></br></br>
<p>Segun sus lados pueden ser los poligonos, para ello vamos a fijar el numero de lados para limitar el espacio del plano.
El numero minimo de lados que debemos trazar es de tres, porque solo con dos lados no podemos limitar una superficie del plano. 
Los poligonos se pueden clasificar segun el numero de lados que tienen, veamos que:</p>
<p>Triangulo tiene 3 lados, Cuadrado tiene 4 lados, Pentagono tiene 5 lados, Hexagono tiene 6 lados, Heptagono tiene 7 lados, Octogono tiene 8 lados, 
Eneagono tiene 9 lados...</p></br></br>
<p><b>Segun sus angulos.</b></p>
<p>Segun sus angulos los poligonos pueden ser convexos o concavos. 
(Convexos) son si la prolongacion de uno cualquiera de sus lados no corta al poligono y 
(Concavo) si la prolongacion de alguno de sus lados corta al poligono por alguno de sus lados, entonces sera concavo.</p>
<br/>           
<p><b>Segun sus lados y angulos.</b></p>
<p>Los poligonos puedes ser equilateros, regulares e irregulares, (Equilateros) son si tienen sus lados iguales, 
(Regulares) si tienen lados y angulos iguales e (Irregulares) si tienen sus lados y sus angulos respectivamente desiguales.</p></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">  
<h1>3. El numero de diagonales posibles de un poligono de n lados.</h1></br></br>
<p>Siendo n = numero de lados de un poligono cualquiera. Podemos dibujar un poligono cualquiera, un cuadrilatero o un pentagono por ejemplo. 
Trazaremos todas las diagonales posibles de uno a otro vertice, recordamos que la diagonal pasa de un vertice al otro vertice opuesto. 
El cuadrilatero tiene 4 lados y 2 diagonales. El pentagono tiene 5 lados y 6 diagonales. El exagono tiene 6 lados y 18 diagonales.</p>
<p>En general desde cada vertice se pueden trazar (n - 3) diagonales, siendo n = el numero de tus lados y 3 el minimo comun.</p>
<p>Como cualquier poligono tiene n vertices, el numero total de diagonales sera de: n . (n - 3) / 2</p>
<p>Segun este razonamiento cada diagonal la hemos contado dos veces, (puesto que la diagonal une dos vertices).</p>
<p>n = n . ( n-3 ) / 2</p>
<p>Luego el numero de diagonales de un poligono viene dado por la figura constante de que:</p>
<p>D = n . (n-3) /2</p>
<p>Ejemplo de numero de diagonales de un eneagono de (9 lados):</p>
<p>D = n . ( n-3 ) / 2 = 9 . (9-3) / 2 = 9.6 / 2 = 54  / 2 = 27</p></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">            
<h1>4. Valor de la suma de los angulos de un poligono.</h1></br></br>
<p>Ya hemos visto que la suma de los angulos de un triangulo siempre valen 180&deg;, teniendo esto en cuenta nos podremos fijar en la figura que hemos dividido, 
en triangulos y estos son E A D, A D C y A C B.</p> 
<p>Ahora, el pentagono tiene 5 lados y los triangulos que resultan son 3.</p> 
<p>Esto es el numero de triangulos en que se puede descomponer un poligono de 5 lados.</p>
<p>En el pentagono de la figura tenemos los angulos que son:</p>
<p>(A = 2 + 5 + 7) (B = B) (C = 4 + 6)
(D = 1 + 3) (E = E).</p>
<p>Podemos comprobar facilmente que la suma es la suma de los angulos de los triangulos I II y III.</p>
<p>( I: E + 2 + 1 = 180&deg; ) ( II: 3+4+5= 180&deg; ) ( III: 6 + 7 + B = 180&deg; )</p>
<p>180&deg; . 3</p>
<p>De donde A + B + C + D + E = 180&deg; . 3</p>
<p>Por lo tanto en un poligono de <b>n</b> lados, la suma de los angulos interiores sera (180&deg;. n - 2)</p> 
<p>De otro modo tambien 180&deg; por el numero de triangulos comprendidos en el poligono.</p></br></br>
<img src="imagenes/imagenes/sumaAngulosPoligono.jpg" alt="SumaAngulosPoligono" title="Suma angulos interiores poligono"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">           
<h1>5. La suma de los angulos exteriores valen 4 rectos.</h1></br></br>
<p>Dibujamos un poligono que puede ser irregular, como el de la figura y hallamos sus angulos 
valiendonos de un lado y de la prolongacion del continuo. Por ejemplo el angulo 5 con el lado D E, el angulo 4 con el lado C D y asi. 
Estos angulos construidos reciben el nombre de angulos exteriores de un poligono en construccion.</p> 
<p>A cada angulo interior le corresponde uno exterior. 
Al angulo interior A le corresponde el exterior 1, al B el 2, al C el 3, al D el 4, al E el 5. 
Observaremos a proposito que a un angulo interior mas su correspondiente exterior suman 180&deg;, esto es muy visual y quiere decir que son suplementarios.</p><br/>
<img src="imagenes/imagenes/sumaAngulosExterioresPoligono.jpg" alt="SumaAngulosExterioresPoligono" title="Suma angulos exteriores poligono"/>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<a id="areas"></a>
<div class="form_caja">
</br><h5>El área.</h5>
<h1>Area. Extension superficial.</h1></br></br>
<p>La extension es la parte del espacio ocupada por una superficie. Medimos la superficie tomando como unidad la de un cuadrado cuyo lado mide la unidad de longitud.</p> 
<p>El numero que resulta de la medicion se llama area y depende de la unidad escogida.</p></br></br> 
<p><b>Superficie es la parte exterior de un cuerpo.</b></p> 
<p>Se consideran solo dos dimensiones.</p>      
<p> Primera consecuencia, a cada superficie corresponde un area.</p>
<p> Segunda consecuencia, a las superficies con la misma extension superficial les corresponde areas iguales.</p>
<p> Tercera consecuencia, a una superficie S suma o diferencia de otras le corresponde un area que es la suma o la diferencia de las areas de esas otras.</p></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja">
<h1>1. Area del triangulo.</h1><br/>
<p>Es igual a la mitad del producto de la base por la altura, base por altura dividida entre dos.</p>     
<p>S = b . h / 2</p>   
<p>El area del triangulo rectangulo es igual a la mitad del producto de sus catetos.</p> 
<p>Las areas de triangulos de igual altura son proporcionales a sus bases.</p> 
<p>De alguna e igual forma, las areas de triangulos de igual base son proporcionales a las alturas.</p>
<p>Los triangulos de igual base y altura tienen la misma area.</p>
<p>La formula trigonometrica.</p> 
<p>El area de un triangulo es igual al semiproducto de dos lados por el seno del angulo comprendido.</p>     
<p>(S = 1 / 2 a . b . sen&#8733;)</p>    
<p>Ya que la altura (h = a .  sen&#8733;)</p></br></br>
<img src="imagenes/imagenes/area_triangulo.jpg" alt="areatriangulo" title="areatriangulo"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>2. Area del rectangulo.</h1></br></br>
<p>Si consideramos el lado AB como base y C B como altura podemos decir:</p>
<p>Area S = A B . C B</p>
<p>El area del rectangulo es igual al producto de la base por la altura, el largo por el ancho.</p>
<p>(S = a x b)  donde a = AB y b = CB</p><br/>
<img src="imagenes/imagenes/area_rectang.jpg" alt="arearectangulo" title="araerectangulo"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>3. Area del cuadrado.</h1></br></br>
<p>Sabemos que el cuadrado es un rectangulo cuyas dimensiones de sus lados son iguales.</p> 
<p>Llamando al lado (a), tendremos que:    (S = a . a = a 2)</p>
<p>Luego el area del cuadrado es igual a la media de su lado elevada al cuadrado.</p></br></br>
<img src="imagenes/imagenes/area_cuadrado.jpg" alt="areacuadrado" title="areacuadrado"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>4. Area de un paralelogramo.</h1></br></br>
<p>Sea el paralelogramo de lados A B C D en el que consideramos como base el lado A B y como altura la perpendicular D E.</p> 
<p>Si trazamos la diagonal B D se forman dos triangulos iguales 
A B D = B D C, teniendo ambos lados altura (D E).</p>
<p>El area de los triangulos sera:</p>     
<p>(S = 2 . (   1  )/(  2  )  A B . D E = A B . D E    (S = b . h))</p>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<a id="tales"></a></br></br>
<div class="form_caja">
</br><h5>El teorema de Tales.</h5>
<h1>1. Teorema de Tales</h1></br></br>
<p><b>Cuando un sistema de rectas paralelas corta a dos rectas.</b></p>
<p>En un plano los segmentos determinados sobre una de las rectas son proporcionales a los segmentos 
correspondientes determinados sobre la otra recta.</p> 
<p>El sistema de paralelas 1 // 2 // 3 corta a las rectas r y r'.</p> 
<p>Sobre la recta r determina los segmentos AB y BC.</p> 
<p>Estos segmentos guardan entre si una relacion de semejanza AB / BC</p> 
<p>Los segmentos determinados por las paralelas sobre la recta r' son A' B' y B' C'.</p> 
<p>La relacion entre estos segmentos es que  AB / BC = A'B' / B'C'</p> 
<p>Esto sera, que la razon de los segmentos determinados sobre una de las rectas es igual a la razon de 
los segmentos correspondientes determinados sobre la otra.</p></br></br>
<img src="imagenes/imagenes/thales1.jpg" alt="thales" title="thales" style="width: 100%; min-width: 40px; max-width: 540px;"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>2. Consecuencias del teorema de Tales.</h1></br></br>
<p>1 Paralela a un lado de un triangulo.</p> 
<p>2 Base media o paralela media de un triangulo.</p>
<p>3 Concurrentes cortadas por paralelas.</p>
</br></br>
<p><b>2. 1. Paralela a un lado de un triangulo.</b></p>
<p>Tenemos el triangulo A B C de la figura.</p> 
<p>Paralelo al lado B C hemos trazado el segmento D E, que corta a los lados 
A B y A C en los puntos D y E</p>
<p>De este modo hemos construido una figura en la que tenemos dos convergentes:</p> 
<p>B A y C A, cortadas por las paralelas D E // B C</p>
<p>Trazando una paralela a D E y B C por el vertice A observamos mas claramente que, 
segun el teorema de Thales, podemos escribir la siguiente serie de proporciones:</p> 
<p>A D / D B = A E / E C   D B / A B = E C / A C    A D / A B = A E / A C  (1)</p>
<p>Podemos concluir que:</p> 
<p>Una paralela trazada a un lado de un triangulo divide a los otros dos lados en segmentos proporcionales.</p>
<p>Si trazamos por el punto E (en la misma figura) una paralela al lado A B, obtenemos de nuevo dos convergentes cortadas por paralelas:</p>
<p>(A C y BC= convergentes) y (A B // E F = paralelas que las cortan) 
Segun teorema Tales tenemos:</p>   
<p>A E / A C = B F / B C  pero (B F = D E), sustituyendo tenemos  A E / A C = D E / B C  (2)</p>
<p>De (1) y de (2) tenemos que:</p> 
<p>A D / A B = A E / A C     A E / A C = D E / B C      A D / A B = A E / A C = D E / B C</p>
<p>O sea que tenemos que:</p> 
<p>La paralela al lado de un triangulo forma un triangulo A D E cuyos lados son proporcionales al triangulo dado A B C.</p><br/>
<img src="imagenes/imagenes/paralelamedia.jpg" alt="paralelamedia" title="paralelamedia" style="width: 100%; min-width: 40px; max-width: 540px;"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>2. 2. Base media (o paralela media) de un triangulo.</h1></br></br>
<p>En el triangulo de la figura, M es el punto medio del lado A B.</p>
<p>Por este punto trazamos una paralela a B C; esta corta a A C en N.</p>
<p>Por construccion sabemos que A B es el doble de A M luego estan en la proporcion  A M / A B = 1/2 
Ahora bien, M N es una paralela a un lado del triangulo, luego:</p>  
<p>A M / A B = A N / A C = M N /B C</p> 
<p>Pero, como   A M / A B = 1/2</p>
<p>Tambien lo sera cualquiera de las otras razones   A M / A B = 1/2 = M N /B C    o lo que es lo mismo:   A N / A C = 1/2      M N / B C = 1/2</p>
<p>De la ultima expresion  M N / B C = 1/2   resulta, MN es igual a la mitad de B C.</p>
<p>B C es la base del triangulo, lado sobre el que parece apoyarse el triangulo. A M N lo llamamos base media o paralela media porque es igual a la mitad de la base  BC/2  y se llama base media.</p>
<p>Sabiendo que la base de un triangulo mide 6 cm, calcularemos la medida de la paralela media.</p>
<p>La paralela media o base media es igual a la mitad de la base, paralela media=  6/2 = 3</p></br></br>
<img src="imagenes/imagenes/basemedia.jpg" alt="basemedia" title="basemedia" style="width: 100%; min-width: 40px; max-width: 540px;"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>2. 3. Concurrentes cortadas por paralelas.</h1></br></br>
<p>En la figura tenemos varias rectas que concurren en un punto A. Estas son cortadas por las paralelas 
B E, B' E', B'' E''.</p>
<p>Consideremos el triangulo A B C. El segmento B' C' es paralelo a la base y por tanto podemos escribir:    
A B / A B' = A C / A C' = B C / B' C'</p>
<p>Ahora consideremos el triangulo A C D. Como el segmento C D es paralelo a la base podemos escribir:  
A C / A C' = A D / A D' = C D / C' D'</p>
<p>Consideremos el triangulo A D E y por la misma razon tendremos que:  
A D / A D' = A E / A E' = D E / D' E'</p>
<p>(1   A B / A B' = A C / A C' = B C / B' C'                 
<p>(2   A C / A C' = A D / A D' = C D / C' D'</p>              
<p>(3   A D / A D' = A E / A E' = D E / D' E'     B C / B' C' = C D / C' D' = D E / D' E'</p></br></br>    
<img src="imagenes/imagenes/concurrentes.jpg" alt="concurrentes" title="concurrentes" style="width: 100%; min-width: 40px; max-width: 540px;"/></br></br>
</br></br> 
<p><b>O sea que:</b></p>
<P>Los segmentos determinados por varias rectas concurrentes o convergentes sobre dos rectas paralelas son proporcionales.</p>
<p>Tomando como referencia las paralelas B' E' y B'' E'' y siguiendo el mismo procedimiento para ellas podemos escribir:</p>   
<p>E'' D'' / B' C' = D'' C'' / C' D' = C'' B'' / D' E'</p>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"><a id="armonica"></a>
</br><h5>Sección aurea.</h5>
<h1>1. Razon armónica o número de oro.</h1><br/>
<p><b>Dos segmentos son proporcionales a otros dos cuando los numeros que expresan sus medidas forman proporcion.</b></p>
<p>La razon de dos segmentos es la medida de uno de ellos cuando se toma el otro por unidad. Esto se obtiene midiendo los dos segmentos con una unidad comun y dividiendo una medida por otra.</p>
<p>Asi seran segmentos proporcionales:</p>
<p>A B = 6 cm; C D = 10 cm;</p>
<p>E F = 18 cm; G H = 30 cm</p>
<p>Y se obtiene que:</p>
<p>A B / C D = E F / G H ya que 6 / 10 = 18 / 30 = 0,60 = 0,60</p></br></br>
<p><b>Propiedades de la seccion aurea.</b></p>
<p>Si a un segmento dado le sumamos su porcion aurea, se obtiene otro segmento cuya porcion aurea es el segmento dado.</p></br>
<p>Al dividir un segmento dado en media y extrema razon, la porcion menor es la porcion aurea de la mayor.</p>
<p>La porcion aurea de cualquier segmento se puede calcular siguendo este procedimineto pero tambien se puede construir.</p></br>
<p><b>Construir la seccion aurea de un segmento cualquiera.</b></p>
<p>Para construir la porcion aurmonica de un segmento ( a ), bastara con tener presente la primera de sus propiedades y cuya expresion es que:</p>
<p>x / a = a / ( a + x )</p>
<p>Trazaremos una circunferencia que tendra de radio la medida de ( a ) y centro ( O ) y en ella dos diametros A B y C D.</p>
<p>En el punto medio de O D ( P ), haremos una semicircunferencia que cortara a la recta desplegada O P en un punto M, tal que el segmento O M sera la porcion aurea de ( a ).</p>
<p>O M / O A = O A / O A + O M = x / a = a / (a + x)</p></br></br>
<img src="imagenes/imagenes/030ConstruccionSeccionAurea.gif" alt="armonica" title="armonica" style="width: 100%; min-width: 40px; max-width: 540px;"/>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<a id="trigonometria"></a>
</br></br>
<div class="form_caja">
<h5>La trigonometría.</h5>
<h1>1. Trigonometria.</h1></br></br>  
<p><b>El objetivo de la trigonometria es resolver triangulos, a esto se le suele llamar triangulacion.</b></p>
<p>Solo con los elementos de la geometria no es posible hallar las medidas de los 6 elementos ( seno, coseno, tangente, secante, cosecante, cotangente), de un triangulo. 
Vamos a estudiar la teoria que nos permitira hallar estos elementos.</p></br>
<p>Para introducir estos nuevos elementos lo haremos mediante el sistema de coordenadas cartesianas.</p> 
<p>Este sistema esta definido mediante dos rectas perpendiculares y una unidad de medida comun en cada uno de sus ejes.</p>
<p>Suelen ponerse estas rectas una en posicion horizontal que tiene el nombre de eje de abscisas, 
(de las x) y la otra recta en posicion vertical que es el eje de ordenadas, (de las y).</p>
<p>El punto central queda definido como origen, (punto 0).</p>
</br></br>
<p>En este sistema un punto queda determinado mediante dos numeros, el primero indica la distancia 
del punto al eje de las y y se llama abscisa, y el otro numero indica la 
diferencia al eje de las x y se llama ordenada.</p></br></br>
<p>Por convenio se establece que las abscisas de los puntos situados a la derecha 
del eje de las y son positivos y los situados a la izquierda del eje y tendran abscisa negativa.</p></br></br> 
<p>Por lo mismo, las ordenadas de los puntos situados por encima del eje las x son positivas y 
las ordenadas de los puntos situados por debajo del eje de las x son negativas.</p>
</br></br>
<p><b>Signo y posicion de un angulo.</b></p>
<p>El signo sera positivo o el angulo sera positivo, cuando sea el contrario al movimiento de las agujas del reloj.</p>
<p>Supondremos siempre el angulo situado de tal forma que el vertice coincida con el origen y uno de sus lados con la parte positiva del eje de las x.</p>
</br></br>
<p><b>Elementos fundamentales de la trigonometria.</b></p>
<p>Sea el angulo de la figura, en el que las coordenadas de un punto cualquiera del lado que giramos son, P ( x, f ).</p> 
<p>Se nos forma un triangulo rectangulo, siendo ( x, f ) los catetos y ( r ) la hipotenusa.</p></br></br>
<img src="imagenes/imagenes/senocoseno.jpg" alt="senocoseno" title="senocoseno" style="width: 100%; min-width: 40px; max-width: 540px;"/><br/>
<p><strong>Seno del angulo a (se escribe sen a).</strong></p>
<p>Se llama seno del angulo a, a la razon o relacion entre el cateto opuesto a dicho angulo y la hipotenusa ( r ).</P>
<p>sen a = (  f  ) / (r  )</p></br></br>
<p><strong>Coseno del angulo a (se escribe cos a).</strong></p>
<p>Se llama coseno del angulo a, a la razon o relacion entre el cateto contiguo ( f ) a dicho angulo y la hipotenusa ( r ).</p>
<p>cos a = ( f ) / (  r  )</p></br></br>
<p><strong>Tangente del angulo a (se escribe tg a).</strong></p>
<p>Se llama tangente del angulo a, a la razon o relacion entre el cateto opuesto ( f ) y el cateto contiguo a dicho angulo.</p>
<p>tg a = ( f ) / ( x )</p></br></br>
<p><b>A estas tres razones, seno, coseno y tangente se les llama fundamentales.</b></p><br/><br/>
<p>Hay otras tres formas derivadas de ellas que son sus inversas y son, secante, cosecante y cotangente.</p><br/>
<p><strong>Secante (se escribe sec a).</strong></p>
<p>Se llama secante del angulo a, a la razon o relacion entre la hipotenusa y el cateto contiguo a dicho angulo.</p>
<p>sec a = ( r ) / ( x )</p></br></br>
<p><strong>Cosecante (se escribe cosec a).</strong></p>
<p>Se llama cosecante del angulo a, a la razon o relacion entre la hipotenusa y el cateto opuesto a dicho angulo.</p>
<p>cosec a =  ( r ) / ( f )</p></br></br>
<p><strong>Cotangente (se escribe cotg a).</strong></p>
<p>Se llama cotangente del angulo a, a la razon o relacion entre el cateto contiguo ( x )  y el cateto opuesto ( f ) a dicho angulo.</p>
<p>cotg a = ( x ) / ( f )</p>
</br></br></br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"> 
<h1>2. Circulo trigonometrico.</h1></br></br>
<p>La distancia del punto al origen de coordenadas, segun la propiedad anterior, puede ser cualquiera. Por comodidad tomaremos esta distancia, igual a 1.</p>
<p>Con este radio (r = 1) y con centro en O trazamos una circunferencia que se llama circulo trigonometrico.</p>
<p>La interseccion de este circulo con el eje de abscisas de las o nos da un punto A que se llama origen de arcos o angulos.</p><br/>
<img src="imagenes/imagenes/circtrigonometrico.jpg" alt="circulotrigonomÃƒÂ©trico" title="circulotrigonomÃƒÂ©trico" style="width: 100%; min-width: 40px; max-width: 540px;"/></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div class="form_caja"></br></br> 
<h1>3. Unidades angulares.</h1>
<p>Division sexagesimal:</p> 
<p>En este caso se divide la circunferencia en 360 partes iguales (grado); cada grado en 60 partes iguales (minuto); cada minuto en 60 partes iguales (segundos). 360&deg; = 359&deg; 59' 100''</p></br>
<p>Division centesimal:</p> 
<p>Se divide la circunferencia en 400 partes iguales (grado); cada grado en 100 partes iguales (minuto); cada minuto en 100 partes iguales (segundo). 400 g = 399 g 99 m 100 s</p>
<p>Radian:</p> 
<p>Es el angulo cuyo arco rectificado es igual al radio. El angulo que tenga esa apertura es el radian.</p></br></br>
<p><b>Equivalencia entre radian y las otras unidades angulares:</b></p></br></br>
<p>Como la longitud de la circunferencia es de</p> 
<p>(2 pi r) Contiene al radio o radian      2 pi r / r = 2 pi r</p></br>
<p>Es la longitud de la circunferencia en radianes.</p>
<p>360&deg; equivale a 400 g = 2 pi radianes</p>
<p>180&deg; equivale a 200 g = pi radianes</p>
<p>90&deg; equivale a 100 g = pi/2 radianes</p>
<br/><br/><a href="#ini" alt="arriba"><p>&#65;-&#90;</p></a></br></br>
</br></br>
</div>
<div style="clear: both"></div>
<div id="capapie">
<p><a href="http://api.hostinger.es/redir/5407974" target="_blank"> Hostinger Tecnology</a></p></br></br>
<p><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="CSS bueno!" /></p></br></br>
<p><a href="https://www.google.com/intx/es_ALL/work/apps/business/landing/partners/referral/trial.html?utm_source=sign-upyutm_medium=referralbutton1yutm_campaign=apps-referral-programyutm_content=KNYUYYG" target="_blank">
	<img src="https://www.google.com/work/apps/business/landing/partners/referral/email-assets/GfWAppsButtonES.png" title="google" alt="google"/></a></p>
</br></br>
</br><br><p>Linear está en linea por: @esmiguelalfonso Copyright&copy; 2015 - 2017</p>
</div>
<script>(function(e,t,n,s){var c,o,l;e.SMCX=e.SMCX||[],t.getElementById(s)||(c=t.getElementsByTagName(n),o=c[c.length-1],l=t.createElement(n),l.type="text/javascript",l.async=!0,l.id=s,l.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/z6CsjzwvKnFNgOg_2FcElAImPLeVd4Fi9MMztUlNSZQ1UaLeNUJsllFhXHAVyhnkaC.js"].join(""),o.parentNode.insertBefore(l,o))})(window,document,"script","smcx-sdk");</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-541179115f315b96"></script>
</body>
</html>