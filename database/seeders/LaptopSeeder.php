<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    public function run()
    {
        Laptop::create([
            'name' => 'Laptop 1',
            'image' => 'Lenovo Yoga C740-15_6_ FHD Touch - 10th gen i5-10210U - 12gb - 256gb SSD - Gray.jpg',
            'description' => 'Laptop 1 adalah laptop dengan spesifikasi tinggi, cocok untuk gaming dan pekerjaan berat.',
        ]);

        Laptop::create([
            'name' => 'Laptop 2',
            'image' => 'Lenovo ThinkPad X1 Yoga Gen 5 i5-10310U 1_70GHz 16gb 256gb NVMe 14.jpg',
            'description' => 'Laptop 2 memiliki desain elegan, ideal untuk kebutuhan profesional dan multimedia.',
        ]);

        Laptop::create([
            'name' => 'Laptop 3',
            'image' => 'Lenovo ThinkPad X1 Carbon 14-inch (2019) - Core i5-8250U - 8 GB - SSD 256 GB.jpg',
            'description' => 'Laptop 3 dilengkapi dengan baterai tahan lama, cocok untuk mobilitas tinggi.',
        ]);
    }
}
