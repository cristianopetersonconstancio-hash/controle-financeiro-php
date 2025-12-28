// Lógica de Projeção Rolante: O saldo final de um mês torna-se o ponto de partida do próximo
for ($i = 0; $i < 3; $i++) {
    // ... consultas SQL parametrizadas ...
    $estimativa_fim_de_mes = $saldo_projetado_rolante + $total_receber_mes - $total_pagar_mes;
    
    // Acumula o saldo para a próxima iteração (M+1, M+2)
    $saldo_projetado_rolante = $estimativa_fim_de_mes;
}
