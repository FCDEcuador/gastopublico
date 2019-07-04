<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

use BlaudCMS\Catalogue;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$output = new ConsoleOutput();
        $bar = new ProgressBar($output, 24);

        $bar->start();
        
        /*************************************************************************

        		PROVINCIAS

        *************************************************************************/

        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '1';
        $oProvince->description = 'Azuay';
        $oProvince->string_value1 = '07';
        $oProvince->save();
        $bar->advance();

        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '2';
        $oProvince->description = 'Bolivar';
        $oProvince->string_value1 = '03';
        $oProvince->save();
        $bar->advance();

        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '3';
        $oProvince->description = 'Cañar';
        $oProvince->string_value1 = '07';
        $oProvince->save();
        $bar->advance();

        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '4';
        $oProvince->description = 'Carchi';
        $oProvince->string_value1 = '06';
        $oProvince->save();
        $bar->advance();

        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '6';
        $oProvince->description = 'Chimborazo';
        $oProvince->string_value1 = '03';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '5';
        $oProvince->description = 'Cotopaxi';
        $oProvince->string_value1 = '03';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '7';
        $oProvince->description = 'El Oro';
        $oProvince->string_value1 = '07';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '8';
        $oProvince->description = 'Esmeraldas';
        $oProvince->string_value1 = '06';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '20';
        $oProvince->description = 'Galapagos';
        $oProvince->string_value1 = '05';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '9';
        $oProvince->description = 'Guayas';
        $oProvince->string_value1 = '04';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '10';
        $oProvince->description = 'Imbabura';
        $oProvince->string_value1 = '06';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '11';
        $oProvince->description = 'Loja';
        $oProvince->string_value1 = '07';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '12';
        $oProvince->description = 'Los Rios';
        $oProvince->string_value1 = '05';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '13';
        $oProvince->description = 'Manabi';
        $oProvince->string_value1 = '05';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '14';
        $oProvince->description = 'Morona Santiago';
        $oProvince->string_value1 = '07';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '15';
        $oProvince->description = 'Napo';
        $oProvince->string_value1 = '06';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '22';
        $oProvince->description = 'Orellana';
        $oProvince->string_value1 = '06';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '16';
        $oProvince->description = 'Pastaza';
        $oProvince->string_value1 = '03';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '17';
        $oProvince->description = 'Pichincha';
        $oProvince->string_value1 = '02';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '24';
        $oProvince->description = 'Santa Elena';
        $oProvince->string_value1 = '04';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '23';
        $oProvince->description = 'Santo Domingo de los Tsáchilas';
        $oProvince->string_value1 = '02';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '21';
        $oProvince->description = 'Sucumbios';
        $oProvince->string_value1 = '06';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '18';
        $oProvince->description = 'Tungurahua';
        $oProvince->string_value1 = '03';
        $oProvince->save();
        $bar->advance();
        
        $oProvince = new Catalogue;
        $oProvince->context = 'Provincias';
        $oProvince->code = '19';
        $oProvince->description = 'Zamora Chinchipe';
        $oProvince->string_value1 = '07';
        $oProvince->save();
        $bar->advance();

        $bar->finish();
    }
}
