<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> </title>
    <!-- Carregando o CSS do reveal.js da CDN -->
    <link rel="stylesheet" href="/node_modules/reveal.js/dist/reveal.css">
    <!-- Tema do reveal.js (pode mudar para outro tema) -->
    <link rel="stylesheet" href="/node_modules/reveal.js/dist/theme/white.css">
    
    <!-- Plugin de Markdown -->
    <link rel="stylesheet" href="/node_modules/reveal.js/plugin/highlight/monokai.css">
    
    <style>
/* Definindo o estilo para o título do slide */
.reveal h3 {
  background-color: #8BC34A; /* Cor de fundo verde claro */
  color: white; /* Cor do texto do título */
  padding: 10px 20px; /* Espaçamento ao redor do título */
  border-radius: 8px; /* Bordas arredondadas */
}

/* Estilo para os itens da lista */
.reveal ul {
  font-size: 1em; /* Aumentando o tamanho da fonte */
  margin-left: 20px; /* Indentação dos itens */
}

.reveal ul li {
  margin-bottom: 10px; /* Espaçamento entre os itens */
  color: #333; /* Cor do texto */
}

/* Estilo para o bloco de código */
.reveal pre {
  background-color: #E1F5FE; /* Cor de fundo azul claro para o código */
  padding: 15px; /* Espaçamento interno */
  border-radius: 8px; /* Bordas arredondadas */
  border: 1px solid #90CAF9; /* Borda fina azul clara */
  font-family: 'Courier New', Courier, monospace; /* Fonte de código */
  color: #0277BD; /* Cor do texto do código */
  overflow-x: auto; /* Permite rolagem horizontal para código longo */
  white-space: pre-wrap; /* Quebra de linha automática */
}
.hljs {
  background-color: #E1F5FE;
  color: black;
}
    </style>
  </head>
  <body>
