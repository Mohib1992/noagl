<?php namespace noagl\Storage\menu;

use Translation;

class MenuEloquentRepository implements  MenuRepository{

    /**
     * @param array $column
     * @return mixed
     */
    public function all($column = array('*'))
    {
        // TODO: Implement all() method.
        return Translation::get($column);
    }

    /**
     * @param $type
     * @return mixed
     */
    public function findByType($type)
    {
        // TODO: Implement findByType() method.
        return Translation::where('type',$type)->get();
    }

    public function insert(array $data)
    {
        // TODO: Implement insert() method.
        return Translation::create($data);

    }

    public function findBy($attribute, $value, $column = array('*'))
    {
        // TODO: Implement findBy() method.
        return Translation::where($attribute,'=',$value)->first($column);
    }

    public function update(array $data, $id, $attribute = "id")
    {
        // TODO: Implement update() method.
        return Translation::where($attribute,'=',$id)->update($data);
    }
}
