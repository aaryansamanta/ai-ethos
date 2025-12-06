<?php

class Model
{
    public $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new PDO('sqlite:' . __DIR__ . '/We2yG3hE7a.db');
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function queryTable()
    {
        $stmt = $this->dbh->query('SELECT * FROM sqlite_master WHERE type="table";');
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    // about
    public function aboutInit()
    {
        $this->dbh->exec('CREATE TABLE about(
        `id` INTEGER PRIMARY KEY AUTOINCREMENT,
        `photo` VARCHAR(100),
        `name` VARCHAR(100),
        `title` VARCHAR(100),
        `content` TEXT
        )');
    }

    public function aboutAdd($photo, $name, $title, $content)
    {
        $stmt = $this->dbh->prepare('INSERT INTO about(`photo`, `name`, `title`, `content`) VALUES (?, ?, ?, ?)');
        $stmt->execute([$photo, $name, $title, $content]);
        return $stmt->rowCount();
    }

    public function aboutUpdate($id, $photo, $name, $title, $content)
    {
        $stmt = $this->dbh->prepare('UPDATE `about` SET `photo`=?, `name`=?, `title`=?, `content`=? WHERE `id`=?');
        $stmt->execute([$photo, $name, $title, $content, $id]);
        return $stmt->rowCount();
    }

    public function aboutGetAll()
    {
        $stmt = $this->dbh->query('SELECT * FROM `about`');
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function aboutGet($id)
    {
        $stmt = $this->dbh->query('SELECT * FROM `about` WHERE `id`=' . $id);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    // setting
    public function settingInit()
    {
        $this->dbh->exec('CREATE TABLE setting(
        `id` INTEGER PRIMARY KEY AUTOINCREMENT,
        `name` VARCHAR(50),
        `content` TEXT
        )');
    }

    public function settingAdd($name, $content)
    {
        $stmt = $this->dbh->prepare('INSERT INTO setting(`name`, `content`) VALUES (?, ?)');
        $stmt->execute([$name, $content]);
        return $stmt->rowCount();
    }

    public function settingUpdate($id, $name, $content)
    {
        $stmt = $this->dbh->prepare('UPDATE `setting` SET `name`=?, `content`=? WHERE `id`=?');
        $stmt->execute([$name, $content, $id]);
        return $stmt->rowCount();
    }

    public function settingGetAll()
    {
        $stmt = $this->dbh->query('SELECT * FROM `setting`');
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function settingGet($name)
    {
        $stmt = $this->dbh->query('SELECT * FROM `setting` WHERE `name`="' . $name . '"');
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}
