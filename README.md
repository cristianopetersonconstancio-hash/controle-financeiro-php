# Controle Financeiro Inteligente (PHP)

Este repositório contém trechos reais de um sistema de **controle financeiro pessoal**, desenvolvido em PHP, com foco em **previsibilidade, lógica de negócios e apoio à tomada de decisão** — indo além de um simples CRUD.

O sistema foi criado para atender necessidades práticas do dia a dia, incluindo controle de dívidas, projeção de saldo e análise de custos operacionais.

---

## 🚀 Principais Funcionalidades

### ✅ Giro Financeiro (Projeção Rolante)
O sistema calcula automaticamente o **saldo projetado para os próximos 3 meses**, acumulando déficits ou superávits futuros.  
Aplica o conceito de **Expectativa vs. Realidade** ao controle financeiro, permitindo visualizar impactos antes que eles aconteçam.

---

### ✅ Gestão de Contas a Pagar
- Cadastro de dívidas com datas e valores
- Estados automáticos:
  - **Aguardando**
  - **Reservar** (quando o saldo é suficiente)
  - **Atrasado**
- Simulação de impacto no caixa caso a dívida não seja paga

---

### ✅ Simulador de Reservas Inteligente
Ao reservar um valor para pagamento futuro:
- O saldo disponível é recalculado em tempo real
- O sistema impede comprometer dinheiro já reservado
- Gera uma **estimativa realista do caixa**

---

### ✅ Módulo de Gestão de Veículos
Desenvolvido para motoristas de aplicativo:
- Registro de quilometragem
- Controle de abastecimentos
- Valor pago por litro
- Ganhos por período

O sistema calcula automaticamente:
- **Consumo real (km/L)**
- **Custo por quilômetro**
- **Lucro líquido por tanque**

---

### ✅ Visualização de Dados
- Gráfico de barras: **Fluxo de Caixa (Entradas x Saídas)**
- Gráfico de linhas: **Projeção Acumulada do Saldo**
- Visualização clara dos próximos meses para apoio à decisão

---

## 🛠️ Stack Tecnológica

- **PHP (PDO)** — acesso seguro ao banco de dados
- **MySQL** — persistência e modelagem relacional
- **JavaScript (ES6+)** — cálculos em tempo real e interatividade
- **Tailwind CSS** — interface moderna e responsiva
- **Chart.js** — gráficos dinâmicos para análise financeira

---

## 🎯 Objetivo do Projeto

Este projeto foi um excelente exercício para aprofundar conhecimentos em:
- Lógica de negócios financeira
- Cálculos acumulativos e projeções
- Organização de regras complexas em sistemas web
- Desenvolvimento orientado a cenários reais

Os arquivos disponibilizados representam **lógica real de produção**, organizados em snippets para fins de estudo e portfólio.

---

📌 Projeto em evolução contínua.
