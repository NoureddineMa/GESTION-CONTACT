<?php

 include_once "DbConnection.php";
 $crud = new CONTACT($db_conn);
// Class Contact -> CRUD :
 class CONTACT{
     private $db;

     public function __construct($db_conn){
         $this->db=$db_conn;
     }

     public function ADD($Name,$Email,$Phone,$Adresse, $id){
        try{
            $stmt = $this->db->prepare("INSERT INTO contact(id, Name,Email,Phone,Adresse) 
            VALUES(:id, :Name, :Email, :Phone, :Adresse)");
            $stmt->bindParam(":Name",$Name);
            $stmt->bindParam(":Email",$Email);
            $stmt->bindParam(":Phone",$Phone);
            $stmt->bindParam(":Adresse",$Adresse);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage(); 
            return false;
        }
     }
     public function getID($id_contact)
    {
            $stmt = $this->db->prepare("SELECT * FROM contact WHERE id_contact=:id_contact");
            $stmt->execute(array(":id_contact"=>$id_contact));
            $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
            return $editRow;
    }

    public function update($id_contact,$id,$Name,$Email,$Phone,$Adresse)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE contact SET Name=:Name,Email=:Email,Phone=:Phone,Adresse=:Adresse
                             WHERE id_contact= :id_contact AND id = :id");
   $stmt->bindParam(":Name",$Name);
   $stmt->bindParam(":Email",$Email);
   $stmt->bindParam(":Phone",$Phone);
   $stmt->bindParam(":Adresse",$Adresse);
   $stmt->bindParam(":id_contact",$id_contact);
   $stmt->bindParam(":id",$id);
   $stmt->execute();
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }

 public function delete($id_contact,$id)
 {
  $stmt = $this->db->prepare("DELETE FROM contact WHERE id_contact= :id_contact AND id = :id");
  $stmt->bindParam(":id_contact",$id_contact);
  $stmt->bindParam(":id",$id);
  $stmt->execute();
  return true;
 }
 
}
