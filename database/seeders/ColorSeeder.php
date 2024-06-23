<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::insert([
            ["nombre" => "NO ESPECIFICA", "hexadecimal" => "CCCCCC"],
            ["nombre" => "ROJO", "hexadecimal" => "FF0000"],
            ["nombre" => "VERDE", "hexadecimal" => "00FF00"],
            ["nombre" => "BLANCO", "hexadecimal" => "FFFFFF"],
            ["nombre" => "AZUL", "hexadecimal" => "0000FF"],
            ["nombre" => "AMARILLO", "hexadecimal" => "FFFF00"],
            ["nombre" => "CAFE", "hexadecimal" => "A52A2A"],
            ["nombre" => "NEGRO", "hexadecimal" => "000000"],
            ["nombre" => "CEREZA", "hexadecimal" => "DE3163"],
            ["nombre" => "CHAMPAGNE", "hexadecimal" => "F7E7CE"],
            ["nombre" => "BEIGE", "hexadecimal" => "F5F5DC"],
            ["nombre" => "COBRE", "hexadecimal" => "B87333"],
            ["nombre" => "ORO", "hexadecimal" => "FFD700"],
            ["nombre" => "GRIS", "hexadecimal" => "808080"],
            ["nombre" => "MORADO", "hexadecimal" => "800080"],
            ["nombre" => "NARANJA", "hexadecimal" => "FFA500"],
            ["nombre" => "ROSA", "hexadecimal" => "FFC0CB"],
            ["nombre" => "PLATA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "PRIMER", "hexadecimal" => "E5E5E5"],
            ["nombre" => "VINO", "hexadecimal" => "800000"],
            ["nombre" => "VIOLETA", "hexadecimal" => "EE82EE"],
            ["nombre" => "SALMON", "hexadecimal" => "FA8072"],
            ["nombre" => "GUINDA", "hexadecimal" => "B22222"],
            ["nombre" => "MARRON", "hexadecimal" => "8B4513"],
            ["nombre" => "CREMA", "hexadecimal" => "FFF8DC"],
            ["nombre" => "PURPURA", "hexadecimal" => "800080"],
            ["nombre" => "ARENA", "hexadecimal" => "DAA520"],
            ["nombre" => "ONIX", "hexadecimal" => "353839"],
            ["nombre" => "PISTACHE", "hexadecimal" => "93C572"],
            ["nombre" => "AGUACATE", "hexadecimal" => "568203"],
            ["nombre" => "ALUMINIO", "hexadecimal" => "848789"],
            ["nombre" => "AMARILLO/AZUL", "hexadecimal" => "FFFF00"],
            ["nombre" => "AMARILLO/BLANCO", "hexadecimal" => "FFFF01"],
            ["nombre" => "AMARILLO/CAFE", "hexadecimal" => "DAA520"],
            ["nombre" => "AZUL-GIRS", "hexadecimal" => "778899"],
            ["nombre" => "AZUL ACERO", "hexadecimal" => "4682B4"],
            ["nombre" => "AZUL CIELO", "hexadecimal" => "87CEEB"],
            ["nombre" => "AZUL MARINO", "hexadecimal" => "000080"],
            ["nombre" => "AZUL METALICO", "hexadecimal" => "4169E1"],
            ["nombre" => "AZUL REAL", "hexadecimal" => "0000FF"],
            ["nombre" => "AZUL REY", "hexadecimal" => "0000FF"],
            ["nombre" => "AZUL TURQUESA", "hexadecimal" => "00CED1"],
            ["nombre" => "AZUL/BLANCO", "hexadecimal" => "ADD8E6"],
            ["nombre" => "AZUL/GRIS", "hexadecimal" => "778899"],
            ["nombre" => "AZUL/ORO", "hexadecimal" => "6495ED"],
            ["nombre" => "AZUL/PERLA", "hexadecimal" => "00BFFF"],
            ["nombre" => "AZUL/PLATEADO", "hexadecimal" => "B0C4DE"],
            ["nombre" => "BEIGE/CAFE", "hexadecimal" => "D2B48C"],
            ["nombre" => "BLANCO/AZUL", "hexadecimal" => "ADD8E6"],
            ["nombre" => "BLANCO/CREMA", "hexadecimal" => "FFFACD"],
            ["nombre" => "BLANCO/GRIS", "hexadecimal" => "D3D3D3"],
            ["nombre" => "BLANCO/NEGRO", "hexadecimal" => "FFFFFF"],
            ["nombre" => "BLANCO/ROJO", "hexadecimal" => "FF0000"],
            ["nombre" => "BLANCO/VINO", "hexadecimal" => "A52A2A"],
            ["nombre" => "CORAL", "hexadecimal" => "FF7F50"],
            ["nombre" => "CREMA/CAFE", "hexadecimal" => "FFF8DC"],
            ["nombre" => "DORADO", "hexadecimal" => "FFD700"],
            ["nombre" => "GRAFITO", "hexadecimal" => "2F4F4F"],
            ["nombre" => "GRIS ACERO", "hexadecimal" => "8A9597"],
            ["nombre" => "GRIS CLARO", "hexadecimal" => "D3D3D3"],
            ["nombre" => "GRIS METALICO", "hexadecimal" => "C0C0C0"],
            ["nombre" => "GRIS OXFORD", "hexadecimal" => "708090"],
            ["nombre" => "GRIS PERLA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "GRIS PLATA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "GRIS/AZUL", "hexadecimal" => "778899"],
            ["nombre" => "GRIS/ROJO", "hexadecimal" => "A52A2A"],
            ["nombre" => "GUINDA/BLANCO", "hexadecimal" => "FF0000"],
            ["nombre" => "GUINDA/NARANJA", "hexadecimal" => "FFA500"],
            ["nombre" => "GUINDA/ROJO", "hexadecimal" => "FF0000"],
            ["nombre" => "LILA", "hexadecimal" => "DAA0DD"],
            ["nombre" => "MALVA METALICO", "hexadecimal" => "BA55D3"],
            ["nombre" => "MAPLE", "hexadecimal" => "C9B59A"],
            ["nombre" => "MARFIL", "hexadecimal" => "FFFFF0"],
            ["nombre" => "MIEL", "hexadecimal" => "D2691E"],
            ["nombre" => "MOCA", "hexadecimal" => "493D26"],
            ["nombre" => "MORA", "hexadecimal" => "7B3F00"],
            ["nombre" => "NEGRO/AMARILLO", "hexadecimal" => "000000"],
            ["nombre" => "NEGRO/GRIS", "hexadecimal" => "2F4F4F"],
            ["nombre" => "NEGRO/MORADO", "hexadecimal" => "800080"],
            ["nombre" => "NEGRO/NARANJA", "hexadecimal" => "FFA500"],
            ["nombre" => "NEGRO/VERDE", "hexadecimal" => "008000"],
            ["nombre" => "OBSCURO", "hexadecimal" => "333333"],
            ["nombre" => "OCRE", "hexadecimal" => "CC7722"],
            ["nombre" => "PLATINO", "hexadecimal" => "E6E8FA"],
            ["nombre" => "PLOMO", "hexadecimal" => "737373"],
            ["nombre" => "ROJO CEREZA", "hexadecimal" => "DE3163"],
            ["nombre" => "ROJO FLAMA", "hexadecimal" => "FF4500"],
            ["nombre" => "ROJO GRANATE", "hexadecimal" => "B80F0A"],
            ["nombre" => "ROJO INDIO", "hexadecimal" => "CD5C5C"],
            ["nombre" => "ROJO METALICO", "hexadecimal" => "8B0000"],
            ["nombre" => "ROJO/AZUL", "hexadecimal" => "FF0000"],
            ["nombre" => "ROJO/GRIS", "hexadecimal" => "A52A2A"],
            ["nombre" => "ROJO/NEGRO", "hexadecimal" => "000000"],
            ["nombre" => "ROJO/VINO", "hexadecimal" => "A52A2A"],
            ["nombre" => "ROSA/NEGRO", "hexadecimal" => "FFC0CB"],
            ["nombre" => "RUBI", "hexadecimal" => "DAA0DD"],
            ["nombre" => "RUBI/OBSCURO", "hexadecimal" => "DAA0DD"],
            ["nombre" => "SATIN", "hexadecimal" => "6F4E37"],
            ["nombre" => "TABACO", "hexadecimal" => "9400D3"],
            ["nombre" => "UVA", "hexadecimal" => "00FFFE"],
            ["nombre" => "VERDE AGUA", "hexadecimal" => "008007"],
            ["nombre" => "VERDE BOTELLA", "hexadecimal" => "008008"],
            ["nombre" => "VERDE ESMERALDA", "hexadecimal" => "008009"],
            ["nombre" => "VERDE METALICO", "hexadecimal" => "00800A"],
            ["nombre" => "VERDE OBSCURO", "hexadecimal" => "80800B"],
            ["nombre" => "VERDE OLIVO", "hexadecimal" => "40E0DC"],
            ["nombre" => "VERDE TURQUESA", "hexadecimal" => "008000"],
            ["nombre" => "VERDE/AZUL", "hexadecimal" => "008001"],
            ["nombre" => "VERDE/BEIGE", "hexadecimal" => "008002"],
            ["nombre" => "VERDE/BLANCO", "hexadecimal" => "008003"],
            ["nombre" => "VERDE/GRIS/ECOLOGICO", "hexadecimal" => "800001"],
            ["nombre" => "VINO/GRIS", "hexadecimal" => "A52A2A"],
            ["nombre" => "CAFE/BEIGE", "hexadecimal" => "FFF8E1"],
            ["nombre" => "ROJO/BLANCO", "hexadecimal" => "FF0000"],
            ["nombre" => "VERDE/AMARILLO", "hexadecimal" => "808001"],
            ["nombre" => "AZUL/AMARILLO", "hexadecimal" => "FFFF01"],
            ["nombre" => "MAMEY", "hexadecimal" => "E37E5F"],
            ["nombre" => "ROJO/AMARILLO", "hexadecimal" => "FF0001"],
            ["nombre" => "VERDE/PLATA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "AMARILLO/VERDE", "hexadecimal" => "DAA520"],
            ["nombre" => "NEGRO/ROJO", "hexadecimal" => "000000"],
            ["nombre" => "BLANCO/VERDE", "hexadecimal" => "FFFFFF"],
            ["nombre" => "AZUL/ROJO", "hexadecimal" => "0000FF"],
            ["nombre" => "AMARILLO/CAFE", "hexadecimal" => "808001"],
            ["nombre" => "BLANCO/MORADO", "hexadecimal" => "FFFFFF"],
            ["nombre" => "AZUL/NEGRO", "hexadecimal" => "000100"],
            ["nombre" => "VERDE/CREMA", "hexadecimal" => "008006"],
            ["nombre" => "GRIS/AMARILLO", "hexadecimal" => "A52A2A"],
            ["nombre" => "CREMA/NARANJA", "hexadecimal" => "FFDB59"],
            ["nombre" => "GRIS/GUINDA", "hexadecimal" => "FFD702"],
            ["nombre" => "NEGRO/BEIGE", "hexadecimal" => "000001"],
            ["nombre" => "MOSTAZA", "hexadecimal" => "DAA520"],
            ["nombre" => "TITANIO", "hexadecimal" => "C0C0C0"],
            ["nombre" => "OSTION", "hexadecimal" => "D9D6CF"],
            ["nombre" => "BLANCO/NARANJA", "hexadecimal" => "FFFF02"],
            ["nombre" => "NARANJA/AZUL", "hexadecimal" => "FFA500"],
            ["nombre" => "CAFE/VERDE", "hexadecimal" => "A52A2C"],
            ["nombre" => "ORO METALICO", "hexadecimal" => "FFD701"],
            ["nombre" => "NEGRO/BLANCO", "hexadecimal" => "000002"],
            ["nombre" => "VERDE/ROJO", "hexadecimal" => "008007"],
            ["nombre" => "BEIGE/AZUL", "hexadecimal" => "F5F5DD"],
            ["nombre" => "CREMA/VERDE OBSCURO", "hexadecimal" => "FFF8DF"],
            ["nombre" => "AZUL MARINO/NEGRO", "hexadecimal" => "000003"],
            ["nombre" => "MORADO/AMARILLO", "hexadecimal" => "800081"],
            ["nombre" => "GRIS/BLANCO", "hexadecimal" => "808003"],
            ["nombre" => "GRIS/VERDE", "hexadecimal" => "808004"],
            ["nombre" => "CREMA/ROJO", "hexadecimal" => "FFF8E0"],
            ["nombre" => "CAFE/BLANCO", "hexadecimal" => "A52A2D"],
            ["nombre" => "CREMA/VINO", "hexadecimal" => "FFF8E1"],
            ["nombre" => "PAJA", "hexadecimal" => "FFDB59"],
            ["nombre" => "ROJO/DORADO", "hexadecimal" => "FFD702"],
            ["nombre" => "HUESO", "hexadecimal" => "E6D2A9"],
            ["nombre" => "TERRACOTA", "hexadecimal" => "E2725B"],
            ["nombre" => "AZUL/VERDE", "hexadecimal" => "008009"],
            ["nombre" => "NEGRO/BLANCO", "hexadecimal" => "000004"],
            ["nombre" => "BLANCO/AMARILLO", "hexadecimal" => "FFFF03"],
            ["nombre" => "OPALO", "hexadecimal" => "COCOC1"],
            ["nombre" => "ROJO PERLADO", "hexadecimal" => "FF0002"],
            ["nombre" => "ESTAMPADO", "hexadecimal" => "FFFFF"],
            ["nombre" => "CLARO", "hexadecimal" => "FFFFFF"]
        ]);
    }
}