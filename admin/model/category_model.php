<?php
function getAllCategories($conn) {
    $stmt = $conn->prepare("SELECT * FROM category");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoryById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM category WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addCategory($conn, $name) {
    $stmt = $conn->prepare("INSERT INTO category (name) VALUES (?)");
    return $stmt->execute([$name]);
}

function updateCategory($conn, $id, $name) {
    $stmt = $conn->prepare("UPDATE category SET name = ? WHERE id = ?");
    return $stmt->execute([$name, $id]);
}

function deleteCategory($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM category WHERE id = ?");
    return $stmt->execute([$id]);
}
