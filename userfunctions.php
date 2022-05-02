
<?php

function getUsers()
{
    return json_decode(file_get_contents('UsersDB.json'), true);
}


function getNewId()
{
    $users=getUsers();
    return intval($users[count($users)-1]["Id"]+1);
}

function getUserById($Id)
{
    $users=getUsers();
    
    foreach($users as $user)
    {
        if($user['Id']==$Id)
        {
            return $user;
        }
    }
    return null;

}

function getUserNameByEmail($emailaddress)
{
  $users = getUsers();

  foreach ($users as $user) {
    if ($user['emailaddress'] == $emailaddress)
      return $user['firstname'];
  }

  return null;
}


function isDuplicateEmail($emailaddress)
{
    $users=getUsers();
    foreach ($users as $i=> $user) {
        if (strcmp($user['emailaddress'],$emailaddress)==0) //if 0, they are identical
        {
            return 1;
            break; //break out of th eloop when a match is found
        }
      }
}



function createUser($data)
{
    $users=getUsers();

    $array=array(
        "Id"=> getNewId(),
        "firstname"=>$data['firstname'],
        "lastname"=>$data['lastname'],
        "emailaddress"=>$data['emailaddress'],
        "pwd"=>$data['pwd'],

        "addressline"=>$data['addressline'],
        "apptnum"=>$data['apptnum'],
        "city"=>$data['city'],
        "province"=>$data['province'],
        "country"=>$data['country'],
        "postalcode"=>$data['postalcode'],
        "phonenumber"=>$data['phonenumber'],
    ); 
    array_push($users,$array);

    file_put_contents('UsersDB.json', json_encode($users));
}



function editUser($data,$Id)
{
        $users=getUsers();

        foreach($users as $i=>$user)
        {
            if($user['Id']==$Id)
            {
                $users[$i]['firstname']=$data['firstname'];
                $users[$i]['lastname']=$data['lastname'];
                $users[$i]['emailaddress']=$data['emailaddress'];
                $users[$i]['pwd']=$data['pwd'];
                $users[$i]['addressline']=$data['addressline'];
                $users[$i]['apptnum']=$data['apptnum'];
                $users[$i]['city']=$data['city'];
                $users[$i]['province']=$data['province'];
                $users[$i]['country']=$data['country'];
                $users[$i]['postalcode']=$data['postalcode'];
                $users[$i]['phonenumber']=$data['phonenumber'];
            }
        }
        file_put_contents('UsersDB.json',json_encode($users));
}

function deleteUser($Id)
{
    $users=getUsers();

    foreach( $users as $i => $user)
    {
        if($user['Id']==$Id)
        {
            array_splice($users,$i,1);
        }
    }

    file_put_contents('UsersDB.json',json_encode($users));
}

?>