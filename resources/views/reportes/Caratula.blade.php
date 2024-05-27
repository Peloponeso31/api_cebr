<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>

@page { margin: 100px 50px;}

#header {
    position: fixed; 
    left: 0px; 
    top: -100px; 
    right: 0px; 
    height: 100px; 
    text-align: center; 
}

#footer {
    position: fixed; 
    left: 0px;
     bottom: -100px; 
    right: 0px;
     height: 100px;  
    display: inline-block; 
  }


  #footer .page:after { content: counter(page, upper-roman); }
   


table {
            border-collapse:collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: center;
        }


</style>


<body>
<div id="header">
        <img src="{{ public_path('reportes/Caratula/Logos-header.png') }}" width="472">
    </div>


       <section id="Caratula">
        <div style="margin: 1px 1px; width: 80%;">
        <table>
        <tr>
            <th colspan="5">CARÁTULAS DE EXPEDIENTE DE REGISTRO QUE SE INGRESA A LA BASE DE DATOS DE LA COMISIÓN ESTATAL DE BUSQUEDA DE VERACRUZ</th>
        </tr>
        <tr>
            <th rowspan="2">NO. FOLIO ASIGANDO</th>
            <td rowspan="2" colspan="2">23/SB 0255U-23ZS</td>
            <th>ORIGEN DEL EXPEDINETE</th>
            <td>REPORTE</td>
        </tr>    
        <tr>        
                <th>¿DÓNDE RADICA LA CARATULA?<</th>
                <td >REPORTE</td>    
        </tr>
        <tr>
            <th rowspan="2">NOMBRE</th>
            <td rowspan="2" colspan="2" >ROXANA DE LA CRUZ</td>
            <th colspan="2">SEXO: MUJER</th>
        </tr>
                <tr>
                    <th colspan="2">GENERO: FEMENINO</th>
                </tr>
            
        
        <tr>
            <th>MUNICIPIO DE DESAPARICIÓN</th>
            <td colspan="2">TIERRA BLANCA VER</td>
            <th>ÁREA QUE ATENDERA</th>
            <td>CELULA SUR</td>
        </tr>
        <tr>
                <th colspan="2">FECHA DESAPARICIÓN</th>
                <th rowspan="2">EDAD</th>
                <td rowspan="2">22</td>
                <th>CURP O ALGÚN DATO DE IDENTIFICACIÓN</th>
                

                <tr>
                <td>08 DE FEBRERO</td>
                <td>2023</td>
                <td>CUOR00923MVZRRXA1</td>
                </tr>
        </tr>
            
        
        <tr>
            <th>¿ESTÁ RELACIONADO CON OTROS EXPEDIENTES?</th>
            <th>NO<table><th>X</th></table></th>
            <th>Si<table><th></th></table></th>
            <th>¿CON CUÁLES EXPEDIENTES?</th>
            <td></td>
        </tr>
        <tr>
       <th colspan="2">FECHA DE RECEPCIÓN</th>
       <th colspan="3">FECHA DE CAPTURA</th>
       <tr>
        <td>15 de FEBRERO</td>
        <td>2023</td>
        <td colspan="2">24 de FEBRERO</td>
        <td>2023</td>
       </tr>

        </tr>
        <tr>
            <th rowspan="2">CAMBIO DE ESTATUS</th>
            <th rowspan="2">LOCALIZADO C/V<table><th></th></table></th>
            <th rowspan="2">LOCALIZADO S/V<table><th></th></table></th>
            <th>FECHA DE LOCALIZACIÓN</th> 
            <td></td>
            <tr>
                <th>FECHA DE ACTIALIZACIÓN</th>
                <td></td>
                </tr>

        </tr>
        <tr>
            <th>HECHOS Y OBSERVACIONES</th>
            <td colspan="4">w</td>
        </tr>

        </table>
        </div>
       </section> 
 

        <div id="footer">
            <p>
                Enríquez s/n, Zona Centro <br>
                C.P. 91000 Xalapa, Veracruz <br>
                Tel: 01 228 841 7400 ext. 3531 <br>
                <b>www.segobver.gob.mx</b>
            </p> 
        </div>

</body>
</html>