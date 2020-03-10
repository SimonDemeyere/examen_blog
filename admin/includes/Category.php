<?php


class Category extends DbObject
{
    /*general variabelen*/
    protected static $db_table = "categories";
    protected static $db_fields = array('title');
    /**object variabelen**/
    public $id;
    public $title;

}