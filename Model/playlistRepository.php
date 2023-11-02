<?php
class PlaylistRepository
{
    public static function listUserPlaylists($user_id)
    {
        $bd = Conectar::conexion();
        $q = "SELECT * FROM listascanciones.playlist WHERE id_user = $user_id";
        $result = $bd->query($q);

        $playlists = array();
        if ($result) {
            while ($datos = $result->fetch_assoc()) {
                $playlists[] = new Playlist($datos);
            }
        }
        return $playlists;
    }
    public static function listAllSongs($playlist_id)
    {
        $bd = Conectar::conexion();
        $q = "SELECT * 
          FROM listascanciones.song
          JOIN listascanciones.playlist_song ON song.id = playlist_song.id_song
          WHERE playlist_song.id_playlist = $playlist_id";
        $result = $bd->query($q);
        $songs = array();
        if ($result) {
            while ($datos = $result->fetch_assoc()) {
                $songs[] = new Song($datos);
            }
        } else {
            echo "Error en la consulta SQL: " . $bd->error;
        }
        var_dump($songs); // Agregar un var_dump para verificar el contenido de $songs
        return $songs;
    }
}
