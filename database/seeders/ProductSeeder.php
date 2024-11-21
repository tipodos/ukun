<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void{

        $category1 = Category::where('nombre', 'camas')->first();
        $category2 = Category::where('nombre', 'lamparas')->first();
        $category3 = Category::where('nombre', 'sofas')->first();
        $category4 = Category::where('nombre', 'juegos de sala')->first();

        $product= new Product();
        $product->name="Cama Aroa de 2 plazas";
        $product->description="Te invitamos a explorar el juego de dormitorio Aroa, una colección de muebles cuidadosamente diseñados para ofrecerte una experiencia única de confort y estilo en tu dormitorio. Con el juego de dormitorio Aroa, podrás transformar tu espacio en un santuario de elegancia y relajación.";
        $product->price="3000";
        $product->image="1716471116.jpg";
        $product->category_id=$category1->id;
        $product->save();

        $product1= new Product();
        $product1->name="Luminaria Balzac";
        $product1->description="Base de madera maciza y cúpula acrílica.";
        $product1->price="200";
        $product1->image="1716471337.jpg";
        $product1->category_id=$category2->id;
        $product1->save();

        $product2= new Product();
        $product2->name="Cama Artis Queen Americano";
        $product2->description="Te invitamos a explorar la cama Artis Queen Americano, una pieza de mobiliario que combina el lujo y la comodidad en un solo lugar. Nuestra cama Artis Queen Americano está diseñada para realzar la estética de tu dormitorio mientras te brinda un lugar acogedor para disfrutar de un sueño reparador.";
        $product2->price="2600";
        $product2->image="1726931621.png";
        $product2->category_id=$category1->id;
        $product2->save();

        $product3= new Product();
        $product3->name="Cama Delia Queen";
        $product3->description="La cama tapizada Delia Queen combina elegancia y confort en un diseño moderno que realza cualquier dormitorio. Su estructura sólida está recubierta con un suave tapizado de tela premium que ofrece un toque sofisticado y acogedor. El cabecero alto y acolchado no solo añade estilo, sino también un respaldo cómodo para momentos de lectura o descanso. Con un tamaño Queen ideal para parejas, esta cama es perfecta para quienes buscan un equilibrio entre funcionalidad y diseño. Dale a tu espacio un aire contemporáneo con la cama Delia, fabricada con los más altos estándares de calidad.";
        $product3->price="4000";
        $product3->image="1727112587.png";
        $product3->category_id=$category1->id;
        $product3->save();

        $product4= new Product();
        $product4->name="Cama Mila Queen Colección Mila";
        $product4->description="Sumérgete en el lujo contemporáneo con la cama Queen de la exclusiva colección Mila. Diseñada para fusionar comodidad y estilo, esta cama es el punto focal de cualquier habitación. Con líneas elegantes y una construcción robusta, la cama Queen Mila ofrece un refugio de descanso excepcional. Su diseño moderno y calidad excepcional la convierten en el corazón estilístico de cualquier dormitorio contemporáneo.";
        $product4->price="2700";
        $product4->image="1727113368.png";
        $product4->category_id=$category1->id;
        $product4->save();

        $product5= new Product();
        $product5->name="Cama King Tafari";
        $product5->description="La cama King Tafari en madera destaca por su combinación de diseño rústico y elegancia clásica. Fabricada en madera maciza de alta calidad, esta cama ofrece durabilidad y un acabado artesanal que resalta la belleza natural del material. Su imponente tamaño King es perfecto para quienes valoran el espacio y el confort en su descanso. Con detalles cuidadosamente trabajados, la cama Tafari aporta calidez y un estilo atemporal que se adapta a cualquier decoración. Esta pieza como la opción ideal para quienes buscan un toque sofisticado y auténtico en su dormitorio.";
        $product5->price="4300";
        $product5->image="1727196484.png";
        $product5->category_id=$category1->id;
        $product5->save();

        $product6= new Product();
        $product6->name="Juego de Sala 3-2-1 Katy";
        $product6->description="Descubre la elegancia del juego de sala Katy, fabricado con pasión en Perú. Sumérgete en la modernidad y el confort de este sofá vintage en tonos pasteles. Sus patas de metal altas añaden firmeza y estilo sencillo a tu hogar. ¿Estás listo para transformar tu espacio con esta maravilla de diseño? ¡Explora ahora y enamórate de la belleza que solo Katy puede ofrecer!";
        $product6->price="3350";
        $product6->image="1727198218.png";
        $product6->category_id=$category4->id;
        $product6->save();

        $product7= new Product();
        $product7->name="Juego de sala Dilma - Marron";
        $product7->description="Añade a tu interior este conjunto de sala de estar de diseño retro. La superficie del asiento está tapizada con tela tipo piel,  suave al tacto. El reposacabezas ajustable en 6 posiciones y los asientos anchos ofrecen la máxima comodidad. Las patas de metal complementan el diseño de mediados de siglo. Combina bien con cualquier interior moderno, contemporáneo, retro o boho.";
        $product7->price="3299";
        $product7->image="1727198775.png";
        $product7->category_id=$category4->id;
        $product7->save();

        $product8= new Product();
        $product8->name="Juego de sala Lokka Azul";
        $product8->description="Este conjunto de sala de estar se adapta a cualquier interior de diseño elegante. Está constituido por un sofá de 3 plazas, uno de 2 y un sillón. Fabricado a partir de terciopelo suave al tacto. Los asientos profundos, los cojines gruesos y los reposabrazos anchos de cada componente proporcionan la máxima comodidad. Las patas de metal ofrecen estabilidad. Los cojines adicionales vienen con una funda extraíble.";
        $product8->price="2999";
        $product8->image="1727199605.png";
        $product8->category_id=$category4->id;
        $product8->save();

        $product9= new Product();
        $product9->name="Juego de sala Lokka Verde";
        $product9->description="Este conjunto de sala de estar se adapta a cualquier interior de diseño elegante. Está constituido por un sofá de 3 plazas, uno de 2 y un sillón. Fabricado a partir de terciopelo suave al tacto. Los asientos profundos, los cojines gruesos y los reposabrazos anchos de cada componente proporcionan la máxima comodidad. Las patas de metal ofrecen estabilidad. Los cojines adicionales vienen con una funda extraíble.";
        $product9->price="2999";
        $product9->image="1727449703.png";
        $product9->category_id=$category4->id;
        $product9->save();
        
        $product10= new Product();
        $product10->name="Juego de Sala Jartum Negro";
        $product10->description="Añade a tu interior este conjunto de sala de estar de diseño retro. Está constituido por 2 sofás. El asiento acolchado ofrece la máxima comodidad. El capitoné de botones y las patas de madera de caucho aportan un toque de distinción. Los sofás son fácilmente convertibles en cama.";
        $product10->price="2890";
        $product10->image="1727450012.png";
        $product10->category_id=$category4->id;
        $product10->save();

        $product11= new Product();
        $product11->name="Sofá Delia en Tela Bouclé";
        $product11->description="El Sofá Delia en tela bouclé tipo borrego es la combinación perfecta de elegancia y confort, diseñado para darle un toque moderno y acogedor a tu sala de estar. Con capacidad para hasta 4 personas, este sofá es ideal para reuniones familiares o momentos de relax.";
        $product11->price="2999";
        $product11->image="1727450565.png";
        $product11->category_id=$category3->id;
        $product11->save();

        $product12= new Product();
        $product12->name="Sofá Arlet de 3 Cuerpos";
        $product12->description="Descubre el sofá de 3 cuerpos Arlet, donde el estilo se encuentra con la comodidad. Con un diseño elegante y líneas modernas, este sofá ofrece una experiencia de asiento envolvente. La calidad superior y los detalles cuidados hacen que el sofá Arlet sea la opción perfecta para transformar tu espacio. Añade un toque de sofisticación a tu hogar con el sofá de 3 cuerpos Arlet.";
        $product12->price="1999";
        $product12->image="1727450833.png";
        $product12->category_id=$category3->id;
        $product12->save();

        $product13= new Product();
        $product13->name="Sofá de 3 Cuerpos Inveso";
        $product13->description="El Sofá de 3 Cuerpos Inveso es la personificación del diseño moderno y la elegancia. Con sus líneas rectas y patas de metal, este sofá ofrece un estilo contemporáneo que complementa cualquier decoración de hogar. Tapizado en tela de alta calidad, el Sofá Inveso no solo es visualmente atractivo, sino que también proporciona un confort excepcional. Su estructura robusta garantiza durabilidad, mientras que su diseño ergonómico asegura el máximo confort para todos los miembros de la familia. Perfecto para la sala de estar, el Sofá Inveso es ideal para relajarse, socializar o disfrutar de una noche de películas. Transforma tu espacio con este mueble moderno y sofisticado.";
        $product13->price="2699";
        $product13->image="1727451127.png";
        $product13->category_id=$category3->id;
        $product13->save();

        $product14= new Product();
        $product14->name="Sofá Nour - Estilo Moderno";
        $product14->description=" Sofá Nour es la combinación perfecta de elegancia y versatilidad, ideal para diversos ambientes. Con un diseño que fusiona lo moderno y lo vintage, este sofá se convierte en el centro de atención en cualquier habitación. Las robustas patas de metal proporcionan una resistencia duradera, mientras que el acolchado de alta calidad garantiza el máximo confort. Ya sea en la sala de estar, la oficina o el salón, el Sofá Nour aporta un toque de sofisticación y estilo. Su diseño atemporal y su funcionalidad lo hacen perfecto para cualquier espacio que desees realzar.";
        $product14->price="1899";
        $product14->image="1727451431.png";
        $product14->category_id=$category3->id;
        $product14->save();

        $product1= new Product();
        $product1->name="Luminaria Balzac";
        $product1->description="Base de madera maciza y cúpula acrílica.";
        $product1->price="1999";
        $product1->image="1716471337.jpg";
        $product1->category_id=$category2->id;
        $product1->save();
    }
        
}
