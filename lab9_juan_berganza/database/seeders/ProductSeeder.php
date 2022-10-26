<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "name" => "Fresa",
                "description" => "Son cultivadas por su fruto comestible (eterio) llamado de la misma manera, fresa o frutilla. Las variedades cultivadas comercialmente son por lo general híbridos, en especial Fragaria × ananassa, que ha reemplazado casi universalmente a las especies silvestres locales, como la eurasiática Fragaria vesca, por el superior tamaño de sus frutos.",
                "unit" => "lb",
                "pricePerUnit" => 18,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…s-y-beneficios-de-la-fresa_8e0ffc75_1200x1200.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Banano",
                "description" => "Este grupo de vegetales conforma la fruta intertropical más consumida del mundo. Se trata de una falsa baya, de forma falcada o elongada, que crece en racimos de hasta 400 unidades y 50 kg de peso",
                "unit" => "lb",
                "pricePerUnit" => 3.5,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…t%2Fth%3Fid%3DOIP.Xk73XPNck4cxqmAfg07E5AHaE9%26pid%3DApi&f=1",
            ],
            [
                "name" => "Piña",
                "description" => "Ananas comosus (ananá, ananás, matzatli o piña) es una especie de la familia de las bromeliáceas, nativa de América del Sur. Planta de escaso porte y con hojas duras y lanceoladas de hasta 1 m de largo, fructifica una vez al año produciendo un único fruto fragante y dulce, muy apreciado en gastronomía.",
                "unit" => "unidad",
                "pricePerUnit" => 14.65,
                "image" => "https://mistrettasproduce.com/wp-content/uploads/2020/06/pineapples.jpg",
            ],
            [
                "name" => "Manzana Fuji",
                "description" => "La manzana es el fruto comestible de la especie Malus domestica, el manzano común. Es una fruta pomácea de forma redonda y sabor muy dulce, dependiendo de la variedad. Esta es la variedad Fuji.",
                "unit" => "lb",
                "pricePerUnit" => 9.9,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…t%2Fth%3Fid%3DOIP.6OQQ6X0NPveqwRO3x97VwQHaHa%26pid%3DApi&f=1",
            ],
            [
                "name" => "Manzana Gala",
                "description" => "La manzana es el fruto comestible de la especie Malus domestica, el manzano común. Es una fruta pomácea de forma redonda y sabor muy dulce, dependiendo de la variedad. Esta es la variedad Gala.",
                "unit" => "lb",
                "pricePerUnit" => 12.2,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F….com%2F251-large_default%2Fmanzana-royal-gala.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Pera",
                "description" => "Se denomina pera al fruto de distintas especies del género Pyrus, integrado por árboles caducifolios conocidos comúnmente como perales. Sin embargo, cuando se trata del fruto comestible, se hace referencia mayormente al producido por el llamado peral común (Pyrus communis). La pera es una fruta jugosa, carnosa y una de las más importantes producidas en las regiones templadas.",
                "unit" => "lb",
                "pricePerUnit" => 14.9,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…t%2Fth%3Fid%3DOIP.0iMXXbPNS3UInsZ5YnkgzgHaE8%26pid%3DApi&f=1",
            ],
            [
                "name" => "Uvas Verdes",
                "description" => "La uva es la común denominación que reciben los frutos formados en los racimos de la vid. Es usada mundialmente para su fermentación, ya que ésta da lugar al vino. Esta es la variedad verde.",
                "unit" => "lb",
                "pricePerUnit" => 21.7,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…t%2Fth%3Fid%3DOIP.rVBpozL6gvJKMzBdhA67iAHaF-%26pid%3DApi&f=1",
            ],
            [
                "name" => "Uvas Rojas",
                "description" => "La uva es la común denominación que reciben los frutos formados en los racimos de la vid. Es usada mundialmente para su fermentación, ya que ésta da lugar al vino. Esta es la variedad roja.",
                "unit" => "lb",
                "pricePerUnit" => 21.75,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpapercave.com%2Fwp%2Fwp3997770.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Tomate Manzano",
                "description" => "El tomate o jitomate (en México) es el fruto de la planta Solanum lycopersicum, el cual tiene importancia culinaria y es utilizado como verdura. Siendo el tomate un fruto botánicamente clasificado como una baya, es comúnmente usado en arte culinario como un ingrediente vegetal o guarnición. Esta es la variedad Manzano.",
                "unit" => "lb",
                "pricePerUnit" => 7.9,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…ontent%2Fuploads%2F2020%2F04%2FTomate-Manzano.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Tomate de Cocina",
                "description" => "El tomate o jitomate (en México) es el fruto de la planta Solanum lycopersicum, el cual tiene importancia culinaria y es utilizado como verdura. Siendo el tomate un fruto botánicamente clasificado como una baya, es comúnmente usado en arte culinario como un ingrediente vegetal o guarnición. Esta es la variedad de Cocina.",
                "unit" => "lb",
                "pricePerUnit" => 5.8,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…ntent%2Fuploads%2F2020%2F05%2Ftomateportada-1.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Pepino",
                "description" => "El pepino es una planta anual, monoica, o sea, que hay flores femeninas y masculinas en el mismo individuo. El tallo es postrado/rastrero, ramificado, anguloso, hirsuto y con zarcillos.",
                "unit" => "unidad",
                "pricePerUnit" => 4.3,
                "image" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F3…FAAAAAAAACzI%2FcOye8HC5ygU%2Fs1600%2FCucumber.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Berenjena",
                "description" => "Solanum melongena es una planta de fruto comestible, generalmente anual, del género Solanum dentro de la familia de las solanáceas.",
                "unit" => "unidad",
                "pricePerUnit" => 8.25,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fusercontent2.hubstatic.com%2F6361711_f520.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Granada",
                "description" => "La fruta se come fresca, grano a grano, apartando la corteza y las laminillas amargas (tastanas) que separan las celdas (lóculos) donde se encuentran. Es muy apreciada por los niños.",
                "unit" => "lb",
                "pricePerUnit" => 42.5,
                "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F…Fuploads%2F2015%2F06%2FRipe-pomegranate-fruit.jpg&f=1&nofb=1",
            ],
            [
                "name" => "Kiwi",
                "description" => "El kiwi es la baya de la enredadera Actinidia deliciosa. Es originaria de una gran área de China, sobre todo de los bosques del valle del río Yangtsé.",
                "unit" => "lb",
                "pricePerUnit" => 25.5,
                "image" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fw…nt%2Fuploads%2F2013%2F01%2Ffruit-3253464_1920.jpg&f=1&nofb=1",
            ]
        ];


        foreach ($products as $prodData) {
            $product = new Product($prodData);
            $product->save();
        }
    }
}
