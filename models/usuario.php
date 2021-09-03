<?php

class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $celular;
    private $contrasena;
    private $rol;
    private $imagen;
    private $direccion;
    private $ciudad_id;
    private $db;

    public function __construct(){
        $this->db=Database::connect();
    }
    
        
    
    
    public function getId()
    {
        return $this->id;
    }

  
    public function setId($id)
    {
        $this->id = $id;

        
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

   
    public function setApellidos($apellidos)
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);

        
    }

    public function getCelular()
    {
        return $this->celular;
    }

   
    public function setCelular($celular)
    {
        $this->celular = $this->db->real_escape_string($celular);

        
    }

    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);

        
    }

    
    public function getContrasena()
    {
        
        return $this->contrasena;
    }

   
    public function setContrasena($contrasena)
    {
        $this->contrasena = password_hash($this->db->real_escape_string($contrasena), PASSWORD_BCRYPT,['cost'=>4]);

        
    }

    
    public function getRol()
    {
        return $this->rol;
    }

    
    public function setRol($rol)
    {
        $this->rol = $rol;

        
    }

   
    public function getImagen()
    {
        return $this->imagen;
    }

  
    public function setImagen($imagen)
    {
        $this->imagen = $this->db->real_escape_string($imagen);

        
    }

    
    public function getDireccion()
    {
        return $this->direccion;
    }

   
    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);

        
    }

    
    public function getCiudad_id()
    {
        return $this->ciudad_id;
    }

    
    public function setCiudad_id($ciudad_id)
    {
        $this->ciudad_id = $this->db->real_escape_string($ciudad_id);

        
    }

    public function save(){
        $sql="INSERT INTO usuarios VALUES (null,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getCelular()}','{$this->getEmail()}','{$this->getContrasena()}','user',null,'{$this->getDireccion()}',{$this->getCiudad_id()});";
        $save=$this->db->query($sql);

        $result=false;
        
        if($save){
            $result=true;
        }
        return $result;
    }

    public function verCiudadId($nombre){
        $sql="SELECT * FROM ciudad WHERE nombre='$nombre'";
        $idCiudad=$this->db->query($sql);
        $fila=$idCiudad->fetch_row();
        return $fila[0];
    }
}
?>