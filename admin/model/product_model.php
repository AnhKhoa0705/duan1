<?php
function getAllProducts($conn) {
    $stmt = $conn->prepare("SELECT product.*, category.name as category_name FROM product JOIN category ON product.category_id = category.id");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addProduct($conn, $data) {
    $stmt = $conn->prepare("INSERT INTO product (Name, Category_ID, Discount, Description, Status) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([
        $data['Name'],
        $data['Category_ID'],
        $data['Discount'],
        $data['Description'],
        $data['Status']
    ]);
}

function getProductById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM product WHERE ID = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function updateProduct($conn, $data) {
    $stmt = $conn->prepare("UPDATE product SET Name = ?, Category_ID = ?, Discount = ?, Description = ?, Status = ? WHERE ID = ?");
    return $stmt->execute([
        $data['Name'],
        $data['Category_ID'],
        $data['Discount'],
        $data['Description'],
        $data['Status'],
        $data['ID']
    ]);
}

function deleteProduct($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM product WHERE ID = ?");
    return $stmt->execute([$id]);
}

