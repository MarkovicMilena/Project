<?php

const ORDER_BY_PRICE_ASC ='price-asc';   
const ORDER_BY_PRICE_DESC ='price-desc'; 

//Function return all products.

function getAllProducts() {
    $products = [
        [
            'id' => 123,
            'title' => "Birch LED Light Trees",
            'description' => "Create an elegant holiday look with our Lighted Birch Tree accents. Simply beautiful, these trees are eye-catching day or night, indoors or out. Each faux tree is studded with hundreds of warm white micro lights on bendable branches that will look gorgeous in your home or as part of your landscape.",
            'img' => "./public/theme/img/slika1.webp",
            'price'=> 60.20,
            'category'=> 1,
            'available'=> true
        ],
        [
            'id' => 124,
            'title' => "Gold Aspen Leaf Nightlight",
            'description' => "One of the most unique nightlights we've seen,  Aspen Leaf Nightlight is made from a real leaf preserved and finished. A very delicate process done by our trained artisans to protect their natural shape and color by coating them with lacquer or dipping them in copper to keep their natural veins visible.",
            'img' => "./public/theme/img/slika10.webp",
            'price'=> 45.30,
            'category'=> 1,
            'available'=> true
        ],
        [
            'id' => 125,
            'title' => "Lighted Art Glass Decorative",
            'description' => "Add color, light and intrigue to your landscape with these Lighted Art Glass Decorative Glowing Garden Rocks. These colorful 'rocks' are crafted from a mercury-style glass that sparkles during the day. After dark, they light up with a unique infinity effect that is simply mesmerizing. ",
            'img' => "./public/theme/img/slika11.webp",
            'price'=> 35.40,
            'category'=> 1,
            'available'=> true
        ],
        [
            'id' => 126,
            'title' => "Hand made decorative table Lamp",
            'description' => "Truly unparalleled,  table lamps are an expressive and distinctive lighting option combining laser-cut Tyvek® and efficient LED lighting. As durable as they are elegant, table lamps are equipped with a porcelain-colored Tyvek® shade, a powder-coated matte black steel base, a white cord with dimmer switch, and stainless steel hardware. When lit, the Solace lamps glow warm from within and cast captivating light patterns that will bring any room to life!",
            'img' => "./public/theme/img/slika12.webp",
            'price'=> 70.50,
            'category'=> 1,
            'available'=> true
        ],
        [
            'id' => 127,
            'title' => "Bamboo Hanging Pendant Light ",
            'description' => "Hand-woven of natural bamboo with an eye-catching shape, this modern pendant has an open design that shines warm ambient light into the room through its translucent liner. This unique hanging pendant in natural hues is a space-saving lighting solution that's perfect for placing in matching pairs. A glowing beacon that will illuminate any room, this bamboo pendant is easy to set up by simply plugging into the wall.",
            'img' => "./public/theme/img/slika13.webp",
            'price'=> 64.20,
            'category'=> 1,
            'available'=> true
        ],
        [
            'id' => 128,
            'title' => "Clay Lighted Globes",
            'description' => "Polymer clay is molded over glass to form this uniquely shaped and patterned light in our Clay Lighted Globes. Invite a bright and floral spring feel into your home, plus a bit of ambiance. After dark, internal LED lights come alive to give the globe a lovely glow. ",
            'img' => "./public/theme/img/slika2.webp",
            'price'=> 45.60,
            'category'=> 2,
            'available'=> true
        ],
        [
            'id' => 129,
            'title' => "Solar Pendant Lamp Collection",
            'description' => "This all-weather Faux Wicker Solar Pendant Lamp uses the sun's power to cast an illuminating glow. When it gets dark, gently diffusing light shines through the wicker slats and open bottom. This lightweight hanging shade comes with a solar Edison bulb, a unique feature for an outdoor lamp. The lamp can easily hang from an overhead hook or stand.",
            'img' => "./public/theme/img/slika3.webp",
            'price'=> 89.70,
            'category'=> 2,
            'available'=> true
        ],
        [
            'id' => 130,
            'title' => "Faux Stone Marble Floor Lamp",
            'description' => "These translucent, fiberglass, accent Faux Stone Marble Floor Lamps feature mineral veining to resemble marbled stones. Take in the magical beauty of the earth every night with these serene stone lamps made with an amazingly detailed 3-D texture that adds a unique and modern touch to your home. Let the warm glow of the light aid in your daily meditation. ",
            'img' => "./public/theme/img/slika4.webp",
            'price'=> 105.10,
            'category'=> 2,
            'available'=> true
        ],
        [
            'id' => 131,
            'title' => "Jute Rope Light Spheres",
            'description' => "Our illuminating glass spheres instantly transform a mantel or table into a boho-chic nook. Once the rope lights are turned on, they'll fill your room with an ultra-warm glow. Battery operated, indoor use. ",
            'img' => "./public/theme/img/slika5.webp",
            'price'=> 29.30,
            'category'=> 2,
            'available'=> true
        ],
        [
            'id' => 132,
            'title' => "Geo Luminary Nightlight",
            'description' => "The desert does not only inspire these beautifully formed Pressed Geo Luminary Nightlights, but they are also made from it! Using a sand-resin mix, artisans mold these delicate-looking forms into geo-organic lights. The sturdy results are illuminated with LED lights, giving off a soft warm glow. ",
            'img' => "./public/theme/img/slika6.webp",
            'price'=> 19.70,
            'category'=> 1,
            'available'=> true
        ],
        [
            'id' => 133,
            'title' => "Lighted Olive Branches",
            'description' => "Our Lighted Olive Branches go indoors our out to add substance, style and sparkle anywhere. With its lifelike foliage and LED lights, it's easy to add a subtle glow to your décor any time of year.
                              The green leaves, crafted of fabric, have realistic veining and detail, bringing the look of nature to your home. It couldn't be easier: the battery-operated branches has an on/off switch and timer for no-fuss enjoyment. Posable branches with 50 warm white LED lights help you create any display. ",
            'img' => "./public/theme/img/slika7.webp",
            'price'=> 42.50,
            'category'=> 2,
            'available'=> true
        ],
		[
            'id' => 134,
            'title' => "Boho Indoor/Outdoor Lamp ",
            'description' => "Created from Tyvek and punched with our favorite Boho floral pattern, this 18″ globe-shaped pendant lamp glows from within casting gorgeous light patterns when the ambient light is low.
                              Boho indoor/outdoor lamp is unlike anything else on the market. Now, you can enjoy the elegance of this lamp in all your favorite spaces year-round.",
            'img' => "./public/theme/img/slika8.webp",
            'price'=> 79.80,
            'category'=> 2,
            'available'=> true
        ],
    ];
    return $products;
}
// // Funkcija vraca jedan proizvod po ID


// function getOneProductById($id) {
//     $allProducts = getAllProducts();
//     foreach ($allProducts as $singleProduct) {
//         if($singleProduct['id'] == $id) {
//             return $singleProduct;
//         }
//     }
//     return false;
// }

// //next product

// function getNextProduct($id) {
//     $allProducts = getAllProducts();
//     for ($i=0; $i < count($allProducts); $i++) { 
//         if($allProducts[$i]['id'] == $id) {
//             return $allProducts[$i + 1];
//         }else {
//             return $allProducts[$i - 1];
//         }
//     }
// }
// //proizvodi iste kategorije

// function getRelatedProducs($mainProduct) {
//     $related = [];
//     $products = getAllProducts();
//     foreach ($products as  $product) {
//         if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
//             $related[] = $product;
//             if(count($related) >= 3) {
//                 break;
//             }
//         }
//     }
//     return $related;
// }

// //filtered product
// function filteredProducts($products, $term) {
//     $filteredProducts = [];
//     foreach ($products as $product) {
//         if(str_contains($product['title'], $term)) {
//             $filteredProducts[] = $product;
//         }
//     }

//     return $filteredProducts;
// }

function getAvailableProducts() {
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            $availabaleProducts[] = $product;
        }
    }
    return $availabaleProducts;
}

function filteredProducts($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains($product['title'], $term)) {
            $filteredProducts[] = $product;
        }
    }
    return $filteredProducts;
}

function getOneProductById($id) {
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}


function sortProductBy($products, $sortBy) {
    switch ($sortBy) {
        case ORDER_BY_PRICE_ASC:
            usort($products, function ($item1, $item2) {
                return $item1['price'] <=> $item2['price'];
            });
            break;
        case ORDER_BY_PRICE_DESC:
            array_multisort(array_column($products, 'price'), SORT_DESC, $products);
            break;
        default:
            break;
    }
    return $products;
}

function getPrevProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == 0) {
                return $products[count($products) - 1]['id'];
            } else {
                return $products[$key-1]['id'];
            }
        }
    }
}

function getNextProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == (count($products) -1)) {
                return $products[0]['id'];
            } else {
                return $products[$key+1]['id'];
            }
        }
    }
}




?>