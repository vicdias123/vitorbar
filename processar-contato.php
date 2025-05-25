<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $area = $_POST['area'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $to = "seu-email@exemplo.com";
    $subject = "Nova mensagem do site - " . $area;
    
    $message = "Nome: " . $nome . "\n";
    $message .= "E-mail: " . $email . "\n";
    $message .= "Telefone: " . $telefone . "\n";
    $message .= "Área: " . $area . "\n\n";
    $message .= "Mensagem:\n" . $mensagem;
    
    $headers = "From: " . $email;

    if(mail($to, $subject, $message, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao enviar mensagem.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método não permitido.']);
}
