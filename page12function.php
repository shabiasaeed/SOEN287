<?php

function generateOrderNum(){
  return rand(100000,999999);
}

function getAccounts(){
  return json_decode(file_get_contents('OrdersDB.json'), true);
}

function getAccountByNum($accountnum){
  $accounts=getAccounts();

  foreach($accounts as $account){
    if($account["accountnumber"]==$accountnum){
      return $account;
    }
  }
  return null;
}

function getOrderbyNum($accountnum, $ordernum){
  $account=getAccountByNum($accountnum);

  foreach($account as $i=> $order){
    if($account[$i]=$ordernum){
      return ($account[$i]);
    }
  }
  return null;
}

function getItemByName($accountnum, $ordernum, $name)
{
    $order=getOrderbyNum($accountnum, $ordernum);
    
    foreach($order as $item)
    {
        if($order["name"]==$name)
        {
            return $item;
        }
    }
    return null;

}

function isOrderExist ($accountnum, $ordernum){
  $order=getOrderbyNum($accountnum, $ordernum);
  if($order==null) return false;
    else return true;
}

function isItemExist ($accountnum, $ordernum, $name)
{
    $item=getItemByName($accountnum, $ordernum, $name);
    if($item==null) return false;
    else return true;
}


function addItemInOrder($accountnum, $ordernum, $data ){
  //creating the new item
  $array=array(
    "name"=>$data["name"],
    "quantity"=>$data["quantity"],
    "price"=>$data["price"]
  );

  $order=getOrderbyNum($accountnum, $ordernum);
  array_push($order, $array);

  file_put_contents('OrdersDB.json', json_encode($order));
}




function addOrderInAccount($accountnum,$data){
  //creating the new order
  $array=array(
    "ordernumber"=>generateOrderNum(),
    "orderdate"=>$data["quantity"],
    "ordertotal"=>$data["ordertotal"]
  );

  $account=getAccountByNum($accountnum);
  array_push($account['orderdetail'], $array);

  file_put_contents('OrdersDB.json', json_encode($account));
}

function editOrder($accountnum, $ordernum, $data, $name){
        $order=getAccountByNum($accountnum,$ordernum);

        foreach($order as $i=>$item)
        {
            if($item['name']==$name)
            {
              $order[$i]['name']=$data['name'];
              $order[$i]['price']=$data['price'];
              $order[$i]['quantity']=$data['quantity'];
            }
        }
        file_put_contents('OrdersDB.json',json_encode($order));
}


function deleteItem($accountnum, $ordernum, $name)
{
    $order=getOrderByNum($accountnum, $ordernum);

      foreach($order as $i=>$item)
    {
        if($order["name"]==$name)
        {
          array_splice($items ,$i, 1);
        }
    }

    file_put_contents('OrdersDB.json',json_encode($order));
}

?>

