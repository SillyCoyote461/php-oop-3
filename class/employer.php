<?php
class employer{
    public $name;
    public $lastname;
    public $role;
    public $level;

    public function __construct(
        String $name,
        String $lastname,
        String $role, 
        Int $level
    ){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->role = $role;
        $this->level = $level;
    }
}
?>