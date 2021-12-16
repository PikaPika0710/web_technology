
<?php
#Entity class, mo ta cac bang trong CSDL
class Entity_Student{
    public $id;
    public $name;
    public $age;
    public $university;
    public function __construct($pId, $pName, $pAge, $pUniversity)
    {
        $this->id = $pId;
        $this->name = $pName;
        $this->age = $pAge;
        $this->university = $pUniversity;
    }
}