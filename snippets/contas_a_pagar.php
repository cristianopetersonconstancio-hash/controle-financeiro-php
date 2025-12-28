function atualizarProjecao() {
    const saldoInicial = parseFloat(cardEstimativa.dataset.rawValor);
    
    // Cálculo dinâmico subtraindo reservas do DOM
    let saldoDisponivel = saldoInicial;
    linhas.forEach(linha => {
        if (estaReservado(linha)) saldoDisponivel -= valorDaLinha;
    });

    // Feedback visual imediato ao usuário (UX)
    atualizarStatusBotoes(saldoDisponivel);
}
