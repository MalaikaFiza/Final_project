<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'db.php';
$input = json_decode(file_get_contents('php://input'), true);
$id = isset($input['id']) ? (int)$input['id'] : 0;
if ($id <= 0) { echo json_encode(['success' => false, 'error' => 'Invalid id']); exit; }
$stmt = $conn->prepare("DELETE FROM items WHERE id = ?");
$stmt->bind_param('i', $id);
$ok = $stmt->execute();
$stmt->close();
if ($ok) echo json_encode(['success' => true]); else echo json_encode(['success' => false, 'error' => $conn->error]);
