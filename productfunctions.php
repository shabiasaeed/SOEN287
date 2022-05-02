<?php

function getProducts()
{
    return json_decode(file_get_contents('Item.json'),true);
}

function getNewId()
{
    $products=getProducts();
    return intval($products[count($products)-1]["id"]+1);
}

function getProductsById($id)
{
    $products=getProducts();
    
    foreach($products as $product)
    {
        if($product['id']==$id)
        {
            return $product;
        }
    }
    return null;


}

function createProduct($data)
{
  $products = getProducts();

  $array = array(
    "id" => getNewId(),

    "name" => $data['name'],
    "category" => $data['category'],
    "brand" => $data['brand'],
    "description" => $data['description'],
    "saleQuantity" => $data['saleQuantity'],
    "weight" => $data['weight'],
    "price" => $data['price'],
    "isOnSale" => $data['isOnSale'],
    "offerExpiry" => $data['offerExpiry'],
    "salePrice" => $data['salePrice'],
    "image" => $data['image'],
    "PricePerWeight" => $data['PricePerWeight'],
    "qInStock" => $data['qInStock'],


);

  array_push($products,$array);

  file_put_contents('Item.json',json_encode($products));
  
}

function editProduct($data,$id)
{
  $products = getProducts();

 

  foreach( $products as $i => $product)
  {
    if($product['id'] == $id)
      {
    
    
       $products[$i]['category']=$data['category'];
       $products[$i]['name']=$data['name'];
       $products[$i]['brand']=$data['brand'];
       $products[$i]['description']=$data['description'];
       $products[$i]['image']=$data['image'];
       $products[$i]['qInStock']=$data['qInStock'];
       $products[$i]['weight']=$data['weight'];
       $products[$i]['price']=$data['price'];
       $products[$i]['isOnSale']=$data['isOnSale'];
       $products[$i]['offerExpiry']=$data['offerExpiry'];
       $products[$i]['saleQuantity']=$data['saleQuantity'];
       $products[$i]['salePrice']=$data['salePrice'];
       $products[$i]['pricePerWeight']=$data['pricePerWeight'];
       

      }
  }

  
        file_put_contents('Item.json',json_encode($products));

}
function isDuplicateProduct($name)
{
    $products=getProducts();
    foreach ($products as $i=> $product) {
        if (strcmp($product['name'],$name)==0) 
        {
            return 1;
            break; 
        }
      }

    }

function deleteProduct($id)
{
  $products = getProducts();

  foreach( $products as $i => $product)
  {
    if($product['id'] == $id)
      {
          array_splice($products,$i,1);
       


      }
  }

  file_put_contents('Item.json',json_encode($products));
}




?>