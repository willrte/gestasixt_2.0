<?php


namespace Models;


class Users
{
    public function getNbUsers()
    {
        $json = file_get_contents('http://172.21.5.246/gestapi/user/count');

        $dataUser = json_decode($json, true);

        $resultatUsers = $dataUser['user'][0];

        $nbUsers = $resultatUsers['nbUsers'];

        return $nbUsers;

    }


    //inutilisée
//    public function addUser($idType,$name,$firstname,$email,$password,$adrRoad,$adrCity,$adrPC,$numTel)
//    {
//
//        $json = file_get_contents('http://localhost/gestapi/user/add/'.$idType.'/'.$name.'/'.$firstname.'/'.$email.'/'.
//        $password.'/'.$adrRoad.'/'.$adrCity.'/'.$adrPC.'/'.$numTel);
//
//        $dataUser = json_decode($json, true);
//
//        $resultatUser = $dataUser['user'];
//
//        return $resultatUser;
//    }


}
