<?php

// require_once ("include/variables.php");
 $rucem = '0922200605001';

  header('Content-Type: text/html; charset=UTF-8');
  echo '<div style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16pt; color: #000000; margin-bottom: 10px;">';
  echo 'Facturación electrónica ECUADOR.<br>';
  echo '<span style="color: #000099; font-size: 15pt;">Crear archivo .XML SIN FIRMAR correspondiente a la factura electrónica.</span>';
  echo '<hr width="100%"></div>';



  $xml = new DomDocument('1.0', 'UTF-8');
//		$xml->standalone         = false;
	$xml->preserveWhiteSpace = false;

	$Factura = $xml->createElement('factura');
	$Factura = $xml->appendChild($Factura);

    //atributo id
    $id = $xml->createAttribute('id'); 
    $Factura->appendChild($id);   

    $valor = $xml->createTextNode('comprobante');
    $id->appendChild($valor);   

    //atributo version
    $version = $xml->createAttribute('version'); 
    $Factura->appendChild($version);   

    $valor = $xml->createTextNode('1.0.0');
    $version->appendChild($valor);   



// INFORMACION TRIBUTARIA.
	$infoTributaria = $xml->createElement('infoTributaria');
	$infoTributaria = $Factura->appendChild($infoTributaria);
	$cbc = $xml->createElement('ambiente','1');
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('tipoEmision', '1');
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('razonSocial', 'ARMANDO SILFREDO CALEÑO ASANZA');
	$cbc = $infoTributaria->appendChild($cbc);
	// $cbc = $xml->createElement('nombreComercial', 'ARMANDO SILFREDO CALEÑO ASANZA');
	// $cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('ruc', $rucem);
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('claveAcceso', '1503202201092220060500110010020000000131234567819');
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('codDoc', '01');
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('estab', '001');
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('ptoEmi', '002');
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('secuencial', '000000013');
	$cbc = $infoTributaria->appendChild($cbc);
	$cbc = $xml->createElement('dirMatriz', 'KM 7.5 VIA A DAULE COOP. GALLEGOS LARA MZ 1122 S. 31');
	$cbc = $infoTributaria->appendChild($cbc);

// INFORMACION DE FACTURA.
	$infoFactura = $xml->createElement('infoFactura');
	$infoFactura = $Factura->appendChild($infoFactura);
	$cbc = $xml->createElement('fechaEmision','15/03/2022');
	$cbc = $infoFactura->appendChild($cbc);
    $cbc = $xml->createElement('obligadoContabilidad', 'NO');
	$cbc = $infoFactura->appendChild($cbc);
    $cbc = $xml->createElement('tipoIdentificacionComprador', '04');
	$cbc = $infoFactura->appendChild($cbc);
	
	// $cbc = $xml->createElement('contribuyenteEspecial', '000');
	// $cbc = $infoFactura->appendChild($cbc);	
	
	$cbc = $xml->createElement('razonSocialComprador', 'JLG &amp; CO. CONSULTORES S.A.');
	$cbc = $infoFactura->appendChild($cbc);
	$cbc = $xml->createElement('identificacionComprador', '0992808859001');
	$cbc = $infoFactura->appendChild($cbc);
    $cbc = $xml->createElement('direccionComprador', 'ED. OLIVOS TOWER PISO 4 OF. 405');
	$cbc = $infoFactura->appendChild($cbc);
	$cbc = $xml->createElement('totalSinImpuestos', '160.00');
	$cbc = $infoFactura->appendChild($cbc);
	$cbc = $xml->createElement('totalDescuento', '0.00');
	$cbc = $infoFactura->appendChild($cbc);


	$totalConImpuestos = $xml->createElement('totalConImpuestos');
	$totalConImpuestos = $infoFactura->appendChild($totalConImpuestos);
	$totalImpuesto = $xml->createElement('totalImpuesto');
	$totalImpuesto = $totalConImpuestos->appendChild($totalImpuesto);
	$cbc = $xml->createElement('codigo', '2');
	$cbc = $totalImpuesto->appendChild($cbc);
	$cbc = $xml->createElement('codigoPorcentaje', '0');
	$cbc = $totalImpuesto->appendChild($cbc);	
	$cbc = $xml->createElement('baseImponible', '160.00');
	$cbc = $totalImpuesto->appendChild($cbc);
    $cbc = $xml->createElement('tarifa', '0');
	$cbc = $totalImpuesto->appendChild($cbc);
	$cbc = $xml->createElement('valor', '0.00');
	$cbc = $totalImpuesto->appendChild($cbc);

	$cbc = $xml->createElement('propina', '0.00');
	$cbc = $infoFactura->appendChild($cbc);
	$cbc = $xml->createElement('importeTotal', '160.00');
	$cbc = $infoFactura->appendChild($cbc);
	$cbc = $xml->createElement('moneda', 'DOLAR');
	$cbc = $infoFactura->appendChild($cbc);

    $pagos = $xml->createElement('pagos');
	$pagos = $infoFactura->appendChild($pagos);
	$pago = $xml->createElement('pago');
	$pago = $pagos->appendChild($pago);
    $cbc = $xml->createElement('formaPago', '20');
	$cbc = $pago->appendChild($cbc);
	$cbc = $xml->createElement('total', '160');
	$cbc = $pago->appendChild($cbc);	

//DETALLES DE LA FACTURA.
	$detalles = $xml->createElement('detalles');
	$detalles = $Factura->appendChild($detalles);

    //INFORMACIÓN ADICIONAL
    $infoAdicional = $xml->createElement('infoAdicional');
    $infoAdicional = $Factura->appendChild($infoAdicional);
	$descripcion = '';
	$i = 0;

// EMULANDO LA CONSULTA A LA BASE DE DATOS DE UN SELECT
$lineas = array(

"1" =>array
   (
        "codigoPrincipal"=>"006",
        "codigoAuxiliar"=>"B004",
        "descripcion"=>"SSD 480GB A400 SATA III 2.5INC",
        "precioUnitario"=>"80",
        "cantidad"=>"1",
        "descuento"=>"0",
        "precioTotalSinImpuesto"=>"80.00",
        "detallesAdicionales" => array(array(
                'nombre' => "Marca",
                'valor' => "Kingston"
            )            
        )
   ),
"2" =>array
   (
        "codigoPrincipal"=>"008",
        "codigoAuxiliar"=>"B005",
        "descripcion"=>"PALMREST LAPTOP HP",
        "precioUnitario"=>"80",
        "cantidad"=>"1",
        "descuento"=>"0",
        "precioTotalSinImpuesto"=>"80.00",
   )

);


foreach ($lineas as $d) {
$i++;
$numerolinea = $i;

	$detalle = $xml->createElement('detalle');
	$detalle = $detalles->appendChild($detalle);
	$cbc = $xml->createElement('codigoPrincipal', $d["codigoPrincipal"]);
	$cbc = $detalle->appendChild($cbc);
	$cbc = $xml->createElement('codigoAuxiliar', $d["codigoAuxiliar"]);
	$cbc = $detalle->appendChild($cbc);
	$cbc = $xml->createElement('descripcion', $d["descripcion"] );
	$cbc = $detalle->appendChild($cbc);
	$cbc = $xml->createElement('cantidad', $d["cantidad"]);
	$cbc = $detalle->appendChild($cbc);
	$cbc = $xml->createElement('precioUnitario', $d["precioUnitario"]);
	$cbc = $detalle->appendChild($cbc);
	$cbc = $xml->createElement('descuento', $d["descuento"]);
	$cbc = $detalle->appendChild($cbc);
	$cbc = $xml->createElement('precioTotalSinImpuesto', $d["precioTotalSinImpuesto"]);
	$cbc = $detalle->appendChild($cbc);

    // $detallesAdicionales = $xml->createElement('detallesAdicionales');
    // $detallesAdicionales = $detalle->appendChild($detallesAdicionales);

    // if (isset($d["detallesAdicionales"])) {
    //     foreach ($d["detallesAdicionales"] as $value) {
    //         $detAdicional = $xml->createElement('detAdicional');                        

    //         $atributo1 = $xml->createAttribute('nombre'); 
    //         $detAdicional->appendChild($atributo1);  

    //         $valor = $xml->createTextNode($value['nombre']);
    //         $atributo1->appendChild($valor); 

    //         $atributo2 = $xml->createAttribute('valor'); 
    //         $detAdicional->appendChild($atributo2); 

    //         $valor = $xml->createTextNode($value['valor']);
    //         $atributo2->appendChild($valor); 

    //         $detAdicional = $detallesAdicionales->appendChild($detAdicional);
    //     }
    // }
   
   

	$impuestos = $xml->createElement('impuestos');
	$impuestos = $detalle->appendChild($impuestos);
	$impuesto = $xml->createElement('impuesto');
	$impuesto = $impuestos->appendChild($impuesto);
	$cbc = $xml->createElement('codigo', '2');
	$cbc = $impuesto->appendChild($cbc);
	$cbc = $xml->createElement('codigoPorcentaje', '0');
	$cbc = $impuesto->appendChild($cbc);
	$cbc = $xml->createElement('tarifa', '0');
	$cbc = $impuesto->appendChild($cbc);
	$cbc = $xml->createElement('baseImponible', $d["precioUnitario"]);
	$cbc = $impuesto->appendChild($cbc);
	$cbc = $xml->createElement('valor', '0.00');
	$cbc = $impuesto->appendChild($cbc);
}

$adicional = array(

"1" =>array
   (
    "atributo" => array(
        'nombre' => "Email"
    ),
    "texto" => "gaby.lopez@jlgconsultores.net"
   ),
"2" =>array
   (
    "atributo" =>  array(
        'nombre' => "Contribuyente Negocios Populares"
    ),
    "texto" => "Regimen RIMPE"
   )

);

foreach ($adicional as $value) {
    $campoAdicional = $xml->createElement('campoAdicional', $value['texto']);
   
    foreach ($value['atributo'] as $key) {
        $atributo = $xml->createAttribute('nombre'); 
        $campoAdicional->appendChild($atributo);   

        $valor = $xml->createTextNode($key);
        $atributo->appendChild($valor);               
             
    }

	$campoAdicional = $infoAdicional->appendChild($campoAdicional);  
}

$xml->formatOutput = true;
$strings_xml       = $xml->saveXML();

$xml->save($rucem.'74902020320953.xml');
chmod($rucem.'74902020320953.xml', 0777);
echo '<span style="color: #015B01; font-size: 15pt;">XML de Factura creada:</span>&nbsp;';
echo '<span style="color: #B21919; font-size: 15pt;">'.$rucem.'74902020320953.xml</span><br>';
echo '<hr width="100%"></div>';   
