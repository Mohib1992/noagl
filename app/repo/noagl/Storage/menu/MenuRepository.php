<?php namespace noagl\Storage\menu;

interface MenuRepository{

    public function all($column = array('*'));

    public function findBy($attribute,$value,$column = array('*'));

    public function findByType($type);

    public function insert(array $data);

    public function update(array $data,$id,$attribute = "id");
}
