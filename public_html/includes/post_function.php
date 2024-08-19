<?php 

function getPostById($conn, $id) {
    $sql = "SELECT titre, texte, sommaire, likes, vue, date_publication, auteur, categorie, temps_lecture FROM post WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}


function getAllProjects($conn) {
    $sql = "SELECT id_projet, titre, description, lien_projet, techno1, techno2 FROM projet";
    $result = $conn->query($sql);

    if (!$result) {
        die("Erreur de requête SQL : " . $conn->error);
    }

    $projects = [];
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
    return $projects;
}

function getLastPostId($conn) {
    $sql = "SELECT id FROM post ORDER BY date_publication DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['id'];
    } else {
        return null;
    }
}

function getAllPostByDate($conn) {
    $sql = "SELECT id, titre, texte, sommaire, likes, vue, date_publication, auteur, categorie, temps_lecture FROM post ORDER BY date_publication ASC";
    
    $stmt = $conn->prepare($sql);
    
    if (!$stmt->execute()) {
        die("Erreur de requête SQL : " . $stmt->error);
    }
    
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        return [];
    }

    $posts = [];
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }

    return $posts;
}


function getAllPostByLikes($conn) {
    $sql = "SELECT id, titre, texte, sommaire, likes, vue, date_publication, auteur, categorie, temps_lecture 
            FROM post 
            ORDER BY likes DESC";

    $stmt = $conn->prepare($sql);
    
    if (!$stmt->execute()) {
        die("Erreur de requête SQL : " . $stmt->error);
    }
    
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        return [];
    }

    $posts = [];
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }

    return $posts;
}
?>