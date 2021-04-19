<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayProductos = [
            "producto1" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Adidas",
                "precio" => 89900,
                "descripcion" => "Tenis Blancos para hombre, talla 40",
                "disponibilidad" => 4,
                "puntuacion" => 1
            ),
            "producto2" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Running",
                "precio" => 120000,
                "descripcion" => "Tenis Negros para Mujer, talla 26",
                "disponibilidad" => 10,
                "puntuacion" => 2
            ),
            "producto3" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Led Usb",
                "precio" => 89000,
                "descripcion" => "Tenis Rojos para Mujer, talla 28",
                "disponibilidad" => 50,
                "puntuacion" => 5
            ),
            "producto4" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Running",
                "precio" => 120000,
                "descripcion" => "Tenis Negros para Mujer, talla 26",
                "disponibilidad" => 10,
                "puntuacion" => 2
            ),
            "producto5" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Running",
                "precio" => 150000,
                "descripcion" => "Tenis Negros para Mujer, talla 28",
                "disponibilidad" => 25,
                "puntuacion" => 3
            ),
            "producto6" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Running",
                "precio" => 105000,
                "descripcion" => "Tenis Negros para Hombre, talla 39",
                "disponibilidad" => 35,
                "puntuacion" => 2
            ),
            "producto7" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Brandy",
                "precio" => 220000,
                "descripcion" => "Zapato en cuero Negros para Hombre, talla 40",
                "disponibilidad" => 18,
                "puntuacion" => 2
            ),
            "producto8" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Lifestyle",
                "precio" => 159900,
                "descripcion" => "Tenis Negros para Hombre, talla 41",
                "disponibilidad" => 52,
                "puntuacion" => 1
            ),
            "producto9" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Lifestyle",
                "precio" => 125000,
                "descripcion" => "Tenis Blancos para Mujer, talla 37",
                "disponibilidad" => 25,
                "puntuacion" => 5
            ),
            "producto10" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "nombre" => "Tallency 250",
                "precio" => 89900,
                "descripcion" => "Tenis Azules para Hombre, talla 38",
                "disponibilidad" => 14,
                "puntuacion" => 5
            ),
        ];
        foreach ($arrayProductos as $producto){
            $productoJ = new producto();
            if (is_array($producto)) {
                foreach ($producto as $key => $value){
                    $productoJ -> $key = $value;
                }
                $productoJ -> save();
            }
        }
    }
}