<?php
class SongRepository
{
    public static function listOwnSongs($user_id)
    {
        $bd = Conectar::conexion();
        $q = "SELECT * FROM listascanciones.song WHERE user_id = $user_id";
        $result = $bd->query($q);
        if ($result) {
            $songs = array();
            while ($datos = $result->fetch_assoc()) {
                $songs[] = new Song($datos);
            }
            return $songs;
        }
        return NULL;
    }

    public static function uploadSong($title, $author, $duration, $img, $user_id, $file)
    {
        $bd = Conectar::conexion();
        $q = "INSERT INTO listascanciones.song VALUES (NULL, '$title', '$author', '$duration', '$img', $user_id, '$file')";
        $result = $bd->query($q);

        if ($result) {
            // La inserción fue exitosa
            return true;
        } else {
            // Error en la inserción
            return false;
        }
    }
    public static function getSongsByPlId($pl_id)
    {
        $bd = Conectar::conexion();
        $songs = [];
        //Arreglar query
        $q = "SELECT * FROM listascanciones.song WHERE id='" . $pl_id . "'";
        $result = $bd->query($q);
        while ($datos = $result->fetch_assoc()) {
            $songs[] = new Song($datos);
        }
        return $songs;
    }
}
