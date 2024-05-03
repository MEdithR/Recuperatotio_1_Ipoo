2- public function __construct($codBarra,$color,$marca,$talle,$descrip,$stock){

$this->codBarra=$codBarra;

$this->color=$color;

$this->marca=$marca;

$this->talle=$talle;

$this->descrip=$descrip;

$this->stock=$stock;

}
4-public function __toString(){

$cadena="informacion del producto \n"
$cadena=$cadena. "Codigo de barra: ".$this->getCodBarra."\n";
$cadena=$cadena."color: ".$this->getColor."\n";
$cadena=$cadena."Marca: " . $this->getMarca."\n";
$cadena=$cadena."Talle: ".$this->getTalle. "\n";
$cadena=$cadena."Descripcion: ".$this->getDescrip."\n";
$cadena=$cadena."Stock: ".$this->getStock,"\n";

return $cadena;
}

6-public function actualizarStock($stock){

if($stock>0){

  $stock=$this->getStock()+$stock;

 }else{

  $stock=$this->getStock()-$stock;

}

$this->setStock($stock);

}
7-  public function __construct($cantidadVen,$objProducto){
        $this->cantidadVen=$cantidadVen;
        $this->objProducto=$objProducto;
    }
13-public function incorporarProducto($objProducto,$catAVender){

if($objProducto->getStock()>=$catAVender){

$unItem=new Item($catAVender,$objProducto);

$arrayItem=$this->getColItems();

array_push($arrayItem,$unItem);

$this->setColItems($arraItem);

$objProducto->actualizarStock($catAVender*-1);

}else{

$objProducto=null;

}

return $objProducto;

}

15-Public function __construct($nombre,$direccion,$telefono,$colProductos,$colVentas){

$this->nombre=$nombre
$this->direccion=$direccion;
$this->telefono=$telefono;
$this->colProductos=$colProductos;
$this->colVentas=$colVentas;

19-public function getNombre(){
        return $this->nombre;
    }
 public function getDireccion(){
        return $this->direccion;
    }
 public function getTelefono(){
        return $this->telefono;
    }
 public function getColProductos(){
        return $this->colProductos;
    }
 public function getColVentas(){
        return $this->colVentas;
    }
    public function retornaStringArray($array){
    $cadena= "";
    foreach($array as $elemento){
        $cadena = $cadena . " " . $elemento . "\n";
    }
    return $cadena;
}
19-public function __toString(){

        $cadena="Nombre: ".$this->getNombre()."\n";
        $cadena=$cadena. "Direccion: " .$this->getDireccion()."\n";
       $cadena=$cadena. "Telefono: ".$this->getTelefono()."\n";
      $cadena=$cadena. "Coleccion de Ventas".$this->retornaStringArray($colVentas)."\n";
      $cadena=$cadena. "Coleccion de productos". $this->retornaStringArray($colProductos)."\n";

       return $cadena;
    }
    20-public function buscarProducto($codBarra){

$arrayProduc=$this->getColProductos;

$i=0;

$m=count($arrayProduc);

$existe=false;

$indiceObj=-1;

while($i<$m && $existe=false){

if($arrayProduc[$i]->getCodBarra()==$codBarra){

$existe=true;

$indiceObj=$i;

}

$i++;

}

return $indiceObj;

}
22-public function realizarVenta($colInfoVenta){

$unaVenta=null;

$arrayProds=$this->getColProductos();

$arrayVenta=[];

foreach($colInfoVenta as $unItem){

$indiceProducto=$this->buscarProducto($unItem['codigoBarra']);

if($indiceproducto>=0){

$otroObj=$this->incorporarProducto($arrayProd[$indiceProducto],$unItem['cantidadAVender']){

array_push($arrayVenta,$otroObj);

$unaVenta=new Venta($date->format('Y-m-d H:i:s'), "Consumidor Final",count($this->getColVentas()),"b",$arrayVenta);

}

}

return $unaVenta;

}




