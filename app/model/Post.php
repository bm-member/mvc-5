<?php 

namespace App\Model;

use Core\Database;

class Post extends Database
{
    public function all()
    {
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($this->conn, $sql);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $posts;
    }

    public function find($id)
    {
        $sql = "SELECT * FROM posts WHERE id='$id'";
        $result = mysqli_query($this->conn, $sql);
        $post = mysqli_fetch_assoc($result);
        return $post;
    }

    public function  create($data)
    {
        list('title' => $title, 'content' => $content) = $data;
        $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function  update($id, $data)
    {
        list('title' => $title, 'content' => $content) = $data;
        $sql = "UPDATE posts SET title='$title', content='$content' WHERE id='$id'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function  delete($id)
    {
        $sql = "DELETE FROM posts WHERE id='$id'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}