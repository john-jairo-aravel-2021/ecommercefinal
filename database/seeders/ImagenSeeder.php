<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;
use App\Models\Producto;
use PhpParser\Node\Stmt\Switch_;
use Illuminate\Support\Facades\DB;
class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $id1 = Producto::where('id', '1')->first();
        $id2 = Producto::where('id', '2')->first();
        $id3 = Producto::where('id', '3')->first();
        $id4 = Producto::where('id', '4')->first();
        $id5 = Producto::where('id', '5')->first();
        $id6 = Producto::where('id', '6')->first();
        $id7 = Producto::where('id', '7')->first();
        $id8 = Producto::where('id', '8')->first();
        $id9 = Producto::where('id', '9')->first();
        $id0 = Producto::where('id', '10')->first();

        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "A1",
            "url" => "https://images.app.goo.gl/iEsQCpkiPyoPvRjt9",
            "producto_id" => $id1->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "A2",
            "url" => "https://images.app.goo.gl/41JSE62NhVnaaH6V6",
            "producto_id" => $id1->id
        ]); 
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "A3",
            "url" => "https://images.app.goo.gl/GXssyXh7bSXCq8sh7",
            "producto_id" => $id1->id
        ]); 
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "A4",
            "url" => "https://images.app.goo.gl/oC1HH9NatmcRSnYZ6",
            "producto_id" => $id1->id
        ]); 
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "A5",
            "url" => "https://images.app.goo.gl/kbSumsYCF8gSAUR89",
            "producto_id" => $id1->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "B1",
            "url" => "https://images.app.goo.gl/6oUCi3Q9CHXaD1nGA",
            "producto_id" => $id2->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "B2",
            "url" => "https://images.app.goo.gl/2iZxL3Drmr2xu3mZ9",
            "producto_id" => $id2->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "B3",
            "url" => "https://images.app.goo.gl/HrETVEV7Jo5qtf5o6",
            "producto_id" => $id2->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "B4",
            "url" => "https://images.app.goo.gl/pLTCvpC4QWk2HWAVA",
            "producto_id" => $id2->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "B5",
            "url" => "https://images.app.goo.gl/pSzo5EmTnd4AV9jx8",
            "producto_id" => $id2->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "C1",
            "url" => "https://images.app.goo.gl/ZdBt9DPhtwzunkQS8",
            "producto_id" => $id3->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "C2",
            "url" => "https://images.app.goo.gl/va49NZNYrvEuL31j7",
            "producto_id" => $id3->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "C3",
            "url" => "https://images.app.goo.gl/CZJTCL8QyFgCGMLA9",
            "producto_id" => $id3->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "C4",
            "url" => "https://images.app.goo.gl/EEuVsD9bNAk93H7p8",
            "producto_id" => $id3->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "C5",
            "url" => "https://images.app.goo.gl/nh7ZE4vejfRpXspi6",
            "producto_id" => $id3->id
        ]);

        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "D1",
            "url" => "https://images.app.goo.gl/9JyDMkpTx4Z7rAGR6",
            "producto_id" => $id4->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "D2",
            "url" => "https://images.app.goo.gl/yQJiyiNYXR5UA5UF6",
            "producto_id" => $id4->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "D3",
            "url" => "https://images.app.goo.gl/qZSJUocz5XBASKyC9",
            "producto_id" => $id4->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "D4",
            "url" => "https://images.app.goo.gl/ayCxwzqCTYaqKUr76",
            "producto_id" => $id4->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "D5",
            "url" => "https://images.app.goo.gl/Jsk9LH8jk8g5ztWB9",
            "producto_id" => $id4->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "E1",
            "url" => "https://images.app.goo.gl/fta8381f4Fepsvqk6",
            "producto_id" => $id5->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "E2",
            "url" => "https://images.app.goo.gl/tzzofCw7v73gqS7U8",
            "producto_id" => $id5->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "E3",
            "url" => "https://images.app.goo.gl/hQt95Af9eXN6k2e88",
            "producto_id" => $id5->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "E4",
            "url" => "https://images.app.goo.gl/4uZE4hnzgcKn3umk9",
            "producto_id" => $id5->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "E5",
            "url" => "https://images.app.goo.gl/yNL3ittVhdsHguq59",
            "producto_id" => $id5->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "F1",
            "url" => "https://images.app.goo.gl/6xnGsRwCn9nKFsQB9",
            "producto_id" => $id6->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "F2",
            "url" => "https://images.app.goo.gl/mqy8xAZtA3sgpxoK6",
            "producto_id" => $id6->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "F3",
            "url" => "https://images.app.goo.gl/brkHsqmUfKrHtZz68",
            "producto_id" => $id6->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "F4",
            "url" => "https://images.app.goo.gl/cfZYboV4KNtCbnrs7",
            "producto_id" => $id6->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "F5",
            "url" => "https://images.app.goo.gl/3g8DVjC6B7NecwnSA",
            "producto_id" => $id6->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "G1",
            "url" => "https://images.app.goo.gl/Zo5EmTLyA9X2vyAP6",
            "producto_id" => $id7->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "G2",
            "url" => "https://images.app.goo.gl/UpSTku7xR43CAZD59",
            "producto_id" => $id7->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "G3",
            "url" => "https://images.app.goo.gl/LodXsB4ymcAZLwvA8",
            "producto_id" => $id7->id
        ]);

        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "G4",
            "url" => "https://images.app.goo.gl/euxjxTj3HaBfgVKN8",
            "producto_id" => $id7->id
        ]);

        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "G5",
            "url" => "https://images.app.goo.gl/Y354bv9ZvuQ9eJdu7",
            "producto_id" => $id7->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "H1",
            "url" => "https://images.app.goo.gl/d3A7gUWzjE4YkiBk7",
            "producto_id" => $id8->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "H2",
            "url" => "https://images.app.goo.gl/nsphwY66pcJbt88t5",
            "producto_id" => $id8->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "H3",
            "url" => "https://images.app.goo.gl/HfaEqsTatwf38sBF8",
            "producto_id" => $id8->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "H4",
            "url" => "https://images.app.goo.gl/w27BnZ7mjpZFEvhL8",
            "producto_id" => $id8->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "H5",
            "url" => "https://images.app.goo.gl/5stixA4gqeaFv3SZ9",
            "producto_id" => $id8->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "I1",
            "url" => "https://images.app.goo.gl/tsmZ2sqh3EnDGSUp8",
            "producto_id" => $id9->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "I2",
            "url" => "https://images.app.goo.gl/7UyGUBFgTDuVXQAS7",
            "producto_id" => $id9->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "I3",
            "url" => "https://images.app.goo.gl/TdeBi4XxTXKUXytE6",
            "producto_id" => $id9->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "I4",
            "url" => "https://images.app.goo.gl/LfUDNTRkbFN1UEPq7",
            "producto_id" => $id9->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "I5",
            "url" => "https://images.app.goo.gl/95rMkRZPms8pc6139",
            "producto_id" => $id9->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "J1",
            "url" => "https://images.app.goo.gl/1kPFeLsBjvgXCMHp7",
            "producto_id" => $id0->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "J2",
            "url" => "https://images.app.goo.gl/ZgEmiU8qgZJmN1MV6",
            "producto_id" => $id0->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "J3",
            "url" => "https://images.app.goo.gl/L788wyMpRbotfSv98",
            "producto_id" => $id0->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "J4",
            "url" => "https://images.app.goo.gl/CJiLuwjo7yUdz9Jw7",
            "producto_id" => $id0->id
        ]);
        imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre"=> "J5",
            "url" => "https://images.app.goo.gl/PJtJTNnffzxPoxZb8",
            "producto_id" => $id0->id
        ]);
    }
}
