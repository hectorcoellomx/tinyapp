<?php 

namespace App\Models;

use Core\Databases\DB;

class User {

    public function login($email, $password){
        return ($email=="admin@gmail.com" && $password == "123");
    }

    public function single($id){
        $db = DB::init();
        return $db->db_select_row("SELECT * FROM users WHERE id=?", [ $id ]);
    }

    public function list(){
        $db = DB::init();
        return $db->db_select("SELECT * FROM users", null);
    }

    public function insert($name){
        $db = DB::init();
        return $db->db_insert("INSERT INTO users (fullname) VALUES (?)", [ $name ]);
    }

    public function update($id, $name){
        $db = DB::init();
        return $db->db_update("UPDATE users SET fullname = ? WHERE id = ?", [ $name, $id ]);
    }

    public function delete($id){
        $db = DB::init();
        return $db->db_delete("DELETE from users WHERE id = ?", [ $id ]);
    }

}