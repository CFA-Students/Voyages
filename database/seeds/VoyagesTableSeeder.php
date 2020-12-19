<?php

use Illuminate\Database\Seeder;

class VoyagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Malesie";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Malesie.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Thailande";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Thailande.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Chine";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Chine.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Inde";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Inde.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Japon";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Japon.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Maroc";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Maroc.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Suisse";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Suisse.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage a Taiwan";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Taiwan.jpg";
        $voyage->save();

        $voyage= new \App\Voyage();
        $voyage->nom = "Voyage en Vietnam";
        $voyage->prix_ht = 1000;
        $voyage->description = "Voyage tah les fou";
        $voyage->photo_principale = "Vietnam.jpg";
        $voyage->save();
    }
}
