<?php
class NoteModel
{
    public static function getAllNotes()
    {
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT note_id,note_text FROM notes";
        $query = $database->prepare($sql);
        $query->execute(array());
        return $query->fetchAll();
    }
    public static function getNote($note_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "SELECT note_id,note_text FROM notes WHERE note_id = :note_id";
        $query = $database->prepare($sql);
        $query->execute(array(':note_id' => $note_id));
        return $query->fetch();
    }
    public static function createNote($note_text)
    {
        if (!$note_text || strlen($note_text) == 0) {
            return false;
        }
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "INSERT INTO notes (note_text) VALUES (:note_text)";
        $query = $database->prepare($sql);
        $query->execute(array(':note_text' => $note_text));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }
    public static function updateNote($note_id, $note_text)
    {
        if (!$note_id || !$note_text) {
            return false;
        }
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "UPDATE notes SET note_text = :note_text WHERE note_id = :note_id";
        $query = $database->prepare($sql);
        $query->execute(array(':note_id' => $note_id, ':note_text' => $note_text));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }
    public static function deleteNote($note_id)
    {
        if (!$note_id) {
            return false;
        }
        $database = DatabaseFactory::getFactory()->getConnection();
        $sql = "DELETE FROM notes WHERE note_id = :note_id";
        $query = $database->prepare($sql);
        $query->execute(array(':note_id' => $note_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }
}
