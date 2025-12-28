try {
    $pdo->beginTransaction(); // Garante consistência entre tabelas
    
    $stmt_update->execute([':status' => 'pago', ':id' => $id]);
    $stmt_insert_saldo->execute([':valor' => $valor]);
    
    $pdo->commit(); // Salva se ambos funcionarem
} catch (Exception $e) {
    $pdo->rollBack(); // Reverte tudo em caso de erro
}
