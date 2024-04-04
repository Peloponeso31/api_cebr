<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * System seeders
         */
        $this->call([
            PermisoSeeder::class, // TODO: Remove this line before deploying to production
            UserSeeder::class, // TODO: Remove this line before deploying to production
        ]);

        /**
         * Catalogs seeders
         */
        $this->call([
            AreaSeeder::class,
            EstatusPersonaSeeder::class,
            InstitucionSeeder::class,
            MedioSeeder::class,
            ParentescoSeeder::class,
            CatalogosSeeder::class,
            SitioSeeder::class,
            TipoHipotesisSeeder::class,
            TipoReporteSeeder::class,
            UbicacionSeeder::class,
            ZonaEstadoSeeder::class,
            NacionalidadSeeder::class,
            Companias_Telefonicas_seeder::class,
            ContextoFamiliarSeeder::class,
            ContextoEconomicoSeeder::class,
            ContextoSocialSeeder::class,     
        ]);

        /**
         * Test seeders
         */
        $this->call([
            PersonaSeeder::class,
            ReporteSeeder::class,
            Telefonos_seeder::class,
            ContactoSeeder::class,
            
        ]);
    }
}
