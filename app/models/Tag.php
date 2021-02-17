<?php


class Tag
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPostTags($id)
    {
        $this->db->query('SELECT * FROM tags INNER JOIN post_tags ON post_tags.tag_id=tags.id WHERE ');
        $result = $this->db->getAll();
        return $result;
    }
}