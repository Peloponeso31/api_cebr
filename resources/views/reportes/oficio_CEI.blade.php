<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
@page { margin: 100px 50px; }
    #header { 
        position: fixed; left: 0px; 
        top: -100px; 
        right: 0px; 
        height: 100px; 
        text-align: center; 
    }
    #footer { 
        position: fixed; 
        left: 0px; bottom: -100px; 
        right: 0px; height: 100px;  
        display: inline-block; 
    }
    #footer .page:after { content: counter(page, upper-roman); }
    p {
        text-align: justify;
    }
    h1 {
        text-align: center;
        font-size: 18px;
        font-weight: bolder;
    }

    .encabezado1{
        text-align: right;
    }

    .encabezado2{
        text-align: left;
    }

    .texto{
        text-align: justify;
    }

    .texto2{
        text-align: justify;
    }

    .texto3{
        text-align: justify;
    }

    table{
        margin: 0 auto;
        border-collapse:collapse;
            width: 75%;
            
    }

    td, th{
        border: 1px solid black;
            padding: 6px;
            text-align: left;
    }

    .bg-gray{
        background-color: #D9D9D9;
    }

    body{
        background-image: url("{{ public_path('reportes/indicaciones_C4/Logobackground-body.png') }}");
            background-repeat: no-repeat;
            background-position: center;
    }
</style>
<body>
    <div id="header">
        <img src="{{ public_path("reportes/oficio_CEI/Logos-header.png") }}" width="472">
    </div>

    <div id="footer">
        <p>
            Enríquez s/n, Zona Centro <br>
            C.P. 91000 Xalapa, Veracruz <br>
            Tel: 01 228 841 7400 ext. 3531 <br>
            <b>www.segobver.gob.mx</b>
        </p>
        
        <p> 
            <img src="{{ public_path("reportes/informe_de_inicio/footer_3.png") }}" alt="" width="30%">
        </p>
    </div>

    <p class="encabezado1">
        Oficio: SEGOB/CEB/<mark style="background-color: #FEF2CD;">00385</mark>/2024 <br>
        Asunto: solicitud de colaboración en acciones de búsqueda<br>
        Expediente de Búsqueda: <mark style="background-color: #FEF2CD;">24/CI 0016U-24ZS</mark><br>
        Xalapa-Enríquez, Veracruz,<mark style="background-color: #FEF2CD;"> a 12 de enero de 2024</mark>

    </p>
    <p class="encabezado2">
        <mark style="background-color: #FEF2CD;">L.I. Rafael Ochoa Campos </mark><br>
        Director del Centro Estatal de Información de la <br>
        Secretaría Ejecutiva del Sistema y del Consejo <br>
        Estatal de Seguridad Pública	<br>
        Presente.

    </p>
    <p class="texto">Por medio del presente, con fundamento en los artículos 1, 30, 31, 33 fracciones I, III, IX, XI, XIV, XXIII, XLIX y LII, 34 fracción I, 62, 63 y demás relativos y aplicables de la Ley Número 677 en Materia de Desaparición de Personas para el Estado de Veracruz, 3 fracción IV inciso g, 42 Bis, <b><mark style="background-color: yellow;">48</mark></b> del Reglamento Interior de la Secretaría de Gobierno del Estado de Veracruz de Ignacio de la Llave y Transitorio Tercero del Decreto por el que se Reforman y Adicionan diversas disposiciones del Reglamento Interior de la Secretaría de Gobierno del Estado de Veracruz de Ignacio de la Llave, publicado en la Gaceta Oficial, Órgano del Gobierno del Estado de Veracruz en fecha 12 de marzo de 2020, ; <b><mark style="background-color: yellow;">capítulo 1 numeral 6 inciso XIV del Protocolo de Atención, Reacción y Coordinación entre Autoridades Federales, Estatales y Municipales en Caso de Desaparición de Mujeres, Adolescentes y Niñas para el Estado de Veracruz de Ignacio de la Llave, (Protocolo Alba) publicado en la Gaceta Oficial Extraordinaria número 480 del 30 Nov. 2018  ,</mark></b> de su conocimiento que en esta Comisión Estatal de Búsqueda,<b><mark style="background-color: yellow;"> recibió  la carpeta de investigación número FEADPD/ZS/021/2021</mark></b>   se encuentra radicado el expediente  <mark style="background-color: #FEF2CD;">24/CI 0016U-24ZS</mark>, iniciado con motivo de la desaparición del <mark style="background-color: #FEF2CD;">C. Jorge Alfredo Clara Román</mark>, hechos que sucedieron en fecha <mark style="background-color: #FEF2CD;">10 de enero del 2024</mark>, en el municipio de <mark style="background-color: #FEF2CD;">Tierra Blanca, Veracruz.</mark> <br>
        Al respecto, con fundamento en los artículos 33 fracciones III, XIII y 47 fracción XLIX de la Ley Número 677 en Materia de Desaparición de Personas para el Estado de Veracruz de Ignacio de la Llave, solicito a usted de la manera más atenta y respetuosa, su invaluable apoyo a fin de girar sus apreciables instrucciones a quien corresponda a efecto de que se realicen las siguientes acciones: <br>
        ÚNICO: Se realice una búsqueda del <mark style="background-color: #FEF2CD;">C. Jorge Alfredo Clara Román</mark>, en sus bases de datos y remita a esta Comisión toda aquella información que obre en ellas, a fin de aportar elementos para la búsqueda y localización de la persona antes mencionada.  </p><br>
    <p class="texto2">
        <table>
            <tr class="bg-gray">
                <th>Nombre</th>
                <th>CURP</th>
                <th>Señas particulares</th>
            </tr>
            <tr>
                <td><mark style="background-color: #FEF2CD;">Jorge Alfredo Clara Román</mark></td>
                <td><mark style="background-color: #FEF2CD;">SIN DATO</mark></td>
                <td>
                    <ul>
                    <li><mark style="background-color: #FEF2CD;">Tatuajes en antebrazo izquierdo</mark></li>
                    </ul>
                </td>
            </tr>
        </table>
         </p> <br>
    <p class="texto3">Se anexa a la presente: <mark style="background-color: #FEF2CD;">ficha de media filiación</mark> elaborada por la Comisión Estatal de Búsqueda, el cual contiene los datos generales y fotografía de las personas desaparecidas y/o no localizadas. <br>
        Solicitándole que, de manera urgente, remita un informe a esta Comisión respecto de los avances de las acciones implementadas. <br>
        No omito mencionar que, dicha información deberá tratarse confidencialmente de acuerdo a lo dispuesto por los artículos 6º apartado A y 16, segundo párrafo, de la Constitución Política de los Estados Unidos Mexicanos, 68 fracción  <b><mark style="background-color: yellow;">VIII</mark></b>, 72 de la Ley Número 875 de Transparencia y Acceso a la Información Pública para el Estado de Veracruz de Ignacio de la Llave, 14 fracción III y 16 fracción IX de la Ley Número 316 de Protección de Datos Personales en Posesión de Sujetos Obligados para el Estado de Veracruz de Ignacio de la Llave; así como el 92 de la Ley Número 677 en Materia de Desaparición de Personas para el Estado de Veracruz, y lo dispuesto por el artículo 348 segundo párrafo del Código Penal para el Estado de Veracruz. <br>
        
        Aunado a lo anterior, no deben pasar desapercibidas las obligaciones generales en materia de derechos humanos respecto al cumplimiento de estos por parte de todas las autoridades, y que se encuentran establecidas en el artículo 1º de la Constitución Política de los Estados Unidos Mexicanos, como lo son la promoción, respeto, protección y garantía de los derechos humanos, incluidas las acciones en favor de las víctimas directas e indirectas de desaparición forzada de personas y la cometida por particulares. <br>
        
        Mucho agradeceré que, al dar respuesta a esta solicitud haga mención del número de expediente de búsqueda, así como del número de oficio señalado al rubro. <br>
        
        Sin otro particular, me permito enviarle un atento y cordial saludo. <br>
        
         <br>
        <b>Atentamente <br>
        <br>
        <br>
        <br>
        <mark style="background-color: #FEF2CD;">Mtra. Fernanda Isabel Figueroa Cruz <br></mark>
        Jefa del Departamento Especializado de Búsqueda <br> </b>
        <br>
        <br>
        <br>
        <br>
        C.c.p. Archivo. <br>
        <mark style="background-color: #FEF2CD;">FIFC/EMA/WVP/pdsr </mark>

    </p>


<body>
</body>
</html>