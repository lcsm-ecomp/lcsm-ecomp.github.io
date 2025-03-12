<?php 
   $title = 'Apresentação Disciplina Compiladores';
   require('../cabecalho.php');
?>

<div>
	<a href="?print-pdf">Versão Impressão</a>
</div>

<div class="reveal">
	<div class="slides">
<section data-markdown><script type="text/template">
### Front End 
<div class="mermaid">
	flowchart LR
	  A((.)) -- Fonte --> FrontEnd[Front End] --Tree--> F((.))
</div>

- Primeira fase de um compilador
- Reconhece o código fonte de um Programa
- Gera uma estrutura de dados
---
### Problema de Reconhecimento
- Alfabeto: Conjunto de Simbolos:
  - &Sigma; = {0,1}
- Palavras: Sequencia de caracteres do Alfabeto
  - &Sigma;* = {0, 1, 00, 01, 11, 10, ...}
- Linguagem: Conjunto de Palavras válidas
  - Pares = {0, 10, 110, 100, ... }
---
### Problema de Reconhecimento
- Conjuntos de Palavras Válidas pode ser Infinito
- É necessário usar uma notação finita para descrever
  - Pares = sequencia terminadas em 0
- Reconhecedor:
  - "010" &in; Pares?
---
### Problema de Reconhecimento
- Linguagens de Programação são complexas. Dificeis de programar reconhecedores
- Processo dividido em sub-etapas:
  - Análise Léxica
  - Análise Sintática
  - Análise Semântica

---
### Fases de um Compilador: Análise Léxica

- Definições
- Expressões Regulares
- Descrições Léxicas
- Exemplos
---

### Análise Léxica

- Funções:
  - Quebrar o código fonte em Tokens (Palavras)
  - Remover elementos que não afetam o significado do programa (espaços e comentários)
- Vantagens:
  - Simplificar o código processado pelo compilador.
---
### Análise Léxica
- Exemplos
<table class="lexica" style="">
<tr>
<th > Código Fonte
<th >
<th > Tokens
</tr>
<tr>
<td>
10 + 5 * 3
<td> &rArr;
<td> NUM SUM <br> NUM MULT NUM
</tr>
<tr>
<td>
repeat 10 [<br>...forward 10 <br>...left 90 <br>]
<td> &rArr;
<td> REP NUM ACOL <br> FD NUM LT NUM FCOL
</tr> 
</table>
</script></section>
<section data-markdown><script  type="text/template">
### Expressões Regulares
- Formalismo utilizado para descrever padrões de caracteres
- Baseado em operadores que combinam linguagens (operadores regulares)
- <a href="ExpressaoRegular.html">Laboratório de Expressões</a>
---
### Operadores Regulares
- Expressões Fundamentais:
	- Toda string é uma expressão regular que reconhece a própria string;
	  - L("casa") = {"casa"}
    - Parênteses Podem ser opcionais:
	  - L(mundo) = {"mundo"} 
	- &epsilon;: Reconhece a string vazia;
	  - L(&epsilon;) = {""}
---
### Combinador Escolha:
- Escolha ( A | B ): Reconhece uma string reconhecida para expressão A ou pela expressão B
  - L("a" | "b") = {"a", "b"}
  - L(a | b | c) = {"a", "b", "c"}
---
### Combinador Concatenação:
- Concatenação (A . B): Reconhece uma cadeia formada pela concatenação de uma string reconhecida por A e uma string reconhecida por B
  - L("a" . "b") = {"ab"}
  - L((a|b).(0|1)) = {"a0", "a1", "b0", "b1"}
- O Operador "." é geralmente omitido:
  - L((a|b) (0|1)) = {"a0", "a1", "b0", "b1"}
---

### Combinador Repetição (estrela de Kleene):
- 
- Repetição ( A * ): Reconhece uma cadeida formada pela concatenação de uma ou mais palavras reconhecidas pela expressão A.
  - L(0+) = {"", "0", "00", "000","0000",...}
---
### Outros combinadores
- Opcional (A ?)
- Repetição (A +)
- Escolha de um caracteres ([abc])
- Escolha de uma Faixa ([a-z])
- Inicio da palavra (^)
- Fim da palavra ($)
---
### Mais informações
- Wikipedia (https://en.wikipedia.org/wiki/Regular_expression)
---
### Implementações de Expressões
- Expressões regulares são implementadas na maioria das linguagens como forma de buscar padrões em strings
- HTML
```HTML
<style>
	.Exemplo:valid { background-color: green; }
	.Exemplo:invalid { background-color: red; }
</style>
Digite algo: <input class="Exemplo" pattern="[a-z]+">
```
---
### Implementações de Expressões
- Expressões regulares são implementadas na maioria das linguagens como forma de buscar padrões em strings
- HTML
<div>
<style>
	.Exemplo:valid { background-color: green; }
	.Exemplo:invalid { background-color: red; }
</style>
Digite algo: <input class="Exemplo" pattern="[a-z]+">
</div>
---
### Implementações de Expressões
- Expressões regulares são implementadas na maioria das linguagens como forma de buscar padrões em strings
- Java
```Java
	void teste() {
		String num = "1245a";
		System.out.println(num.match("[0-9]+"));
	}
```
---
### Descrições Léxicas

- Analisadores Léxicos são descritos usando expressões regulares.
- Formato de uma descrição léxica:
```text
Exp1    --> Token1
Exp2    --> Token2
ESPAÇO  --> 
```
---

</script></section>

</div>
</div>

<?php
   require('../rodape.php');
?>