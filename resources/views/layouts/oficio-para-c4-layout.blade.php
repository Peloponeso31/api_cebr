@extends('layouts.page-layout')

@section('content')

<div style="text-align: right">
    Oficio: SEGOB/CEB/<mark>@yield('numero-oficio')</mark>/@yield('year')
    <br>Asunto: solicitud de colaboración en acciones de búsqueda
    <br>Expediente de Búsqueda:<mark>@yield('folio')</mark>
    <br>Xalapa-Enríquez, Veracruz, <mark>a @yield('fecha')</mark>
</div>
<div style="text-align: left">
    <br><mark>@yield('nombre-servidor-publico-seg')</mark>
    <br>Dirección del Centro Estatal de Control, Comando,
    <br>Comunicaciones y Cómputo C4, de la Secretaría de
    <br>Seguridad Pública del Estado de Veracruz
    <br>Presente.
</div>
<p>
    Por medio del presente, con fundamento en los artículos 1<mark>@yield('edad')</mark>30, 31, 33 fracciones I, III, IX,
    XI, XIV,XXIII, XLIX y LII, 34 fracción I, 62, 63 y demás relativos y aplicables de la Ley Número 677 en Materia de
    Desaparición de Personas para el Estado de Veracruz de Ignacio de la Llave, 3 fracción IV inciso g), 42 Bis, <mark>48</mark>
    del Reglamento Interior de la Secretaría de Gobierno del Estado de Veracruz de Ignacio de la Llave y Transitorio Tercero
    del Decreto por el que se Reforman y Adicionan diversas disposiciones del Reglamento Interior de la Secretaría de Gobierno
    del Estado de Veracruz de Ignacio de la Llave, publicado en la Gaceta Oficial, Órgano del Gobierno del Estado de Veracruz
    en fecha 12 de marzo de 2020;<marK>@yield('sexo')</marK> hago de su conocimiento que en esta Comisión Estatal de Búsqueda
    <mark>@yield('carpeta')</mark>se encuentra radicado el expediente con Folio Único de Búsqueda <mark>@yield('folio')</mark>,
    iniciados con motivo de la desaparición del <mark>@yield('nombre-completo-desaparecido')</mark>, hechos que sucedieron en
    fecha <mark>@yield('fecha-desaparicion')</mark>, en el municipio de <mark>@yield('lugar-desaparicion')</mark>.
</p>
<p>
    Al respecto, con fundamento en los artículos 33 fracciones III, XIII y XLIX 47 de la Ley Número 677 en Materia de
    Desaparición de Personas para el Estado de Veracruz de Ignacio de la Llave, solicito a usted de la manera más atenta
    y respetuosa, su invaluable apoyo a fin de girar sus apreciables instrucciones a quien corresponda a efecto de que
    se realicen las siguientes acciones:
</p>

<p style="padding-left: 20px;">
    PRIMERO: Informe a esta Comisión sí en su base de datos cuenta con llamadas de Auxilio a nombre del
    <mark>@yield('nombre-completo-desaparecido')</mark> <mark>o en su caso llamadas de auxilio del número
        @yield('numero-rastreo')</mark>, en la fecha de desaparición, siendo esta en fecha <mark>@yield('fecha-desaparicion')</mark>.
    <br>
    SEGUNDO: Sea difundida <mark>@yield('medioDifusion')</mark>, realizada por esta Comisión, en la red interna con el personal operativo,
    entre sus diversas plataformas digitales con la finalidad de intensificar las acciones de búsqueda y localización.
</p>

<p>
    Solicitándole que, de manera urgente, remita un informe a esta Comisión respecto de los avances de las acciones
    implementadas, así como de los datos que arrojen las mismas, y los nombres de los servidores públicos responsables
    de realizarlas, ello con fundamento en lo que disponen los artículos 5 fracciones I y II, 19 fracción IV, de la Ley
    Número 677 en Materia de Desaparición de Personas para el Estado de Veracruz de Ignacio de la Llave, de no cumplir
    con dicha disposición, se considerará como un grave incumplimiento negligente como lo establece el artículo 22 de
    lo dispuesto por la ley en materia antes mencionada.
</p>
<p>
    No omito mencionar que, dicha información deberá tratarse confidencialmente de acuerdo a lo dispuesto por los artículos
    6º apartado A y 16, segundo párrafo, de la Constitución Política de los Estados Unidos Mexicanos,  68 fracción VIII, 72
    de la Ley Número 875 de Transparencia y Acceso a la Información Pública para el Estado de Veracruz de Ignacio de la Llave,
    14 fracción III y 16 fracción IX de la Ley Número 316 de Protección de Datos Personales en Posesión de Sujetos Obligados
    para el Estado de Veracruz de Ignacio de la Llave; así como el 92 de la Ley Número 677 en Materia de Desaparición de
    para el Estado de Veracruz, y lo dispuesto por el artículo 348 segundo párrafo del Código Penal para el Estado de Veracruz.
</p>
<p>
    Aunado a lo anterior, no deben pasar desapercibidas las obligaciones generales en materia de derechos humanos respecto
    al cumplimiento de estos por parte de todas las autoridades, y que se encuentran establecidas en el artículo 1° de la
    Constitución Política de los Estados Unidos Mexicanos, como lo son la promoción, respeto, protección y garantía de los
    derechos humanos, incluidas las acciones en favor de las víctimas directas e indirectas de desaparición forzada de
    personas y la cometida por particulares.
</p>
<p>
    Mucho agradeceré que, al dar respuesta a esta solicitud haga mención del número de expediente de búsqueda, así como
    del número de oficio señalado al rubro.
</p>
<div>
    Sin otro particular, me permito enviarle un atento y cordial saludo. <br>
    <br>
    Atentamente
    <br><br><br>
<mark>@yield('nombre-servidor-publico')</mark>
    <br>
    Jefa del Departamento Especializado de Búsqueda
    <br><br><br><br>
    <p style="font-size: 11px;">C.c.p. Archivo <br>
        <mark>FIFC/@yield('iniciales')</mark></p>
</div>



@endsection
