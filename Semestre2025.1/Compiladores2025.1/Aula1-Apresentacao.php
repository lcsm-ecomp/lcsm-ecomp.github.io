<?php 
   $title = 'Apresentação Disciplina Compiladores';
   require('../cabecalho.php');
?>


    <div class="reveal">
      <div class="slides">
	<section data-markdown><script type="text/template">
	### Compiladores
	#### Turma 2025.1
	#### Prof. Luis Carlos
	#### Classroom: gflhe4b
	---
	### Apresentação
	
	 - Motivação
	 - Estrutura de um Compilador
	 - Tópicos da Disciplina
	 - Bibliografia e Avaliação
	 - Projeto da Disciplina
	</script></section>
	<section>
	<section data-markdown><script type="text/template">
	### Motivação 1
	- Escrever um programa que mostre um gráfico de uma função do 2o grau:
	```C
	float f(float x) { return x*x + 10*x + 4; }
	void main() {
	   for (float x=-10.0;x<10.0;x+=0.2f) {
	      printf("x = %f f(x) = %f\n", x, f(x));
	   }
	}
	```
	- Este programa é pouco util pois calcula sempre a mesma função
	- Para calcular outra função é preciso recompilar o programa.
	---
	### Motivação 1
	- Melhorando:
	```C
	float a,b,c;
	float f(float x) { return a*x*x + b*x + c; }
	void main() {
	   printf("Digite os parametros: ");
	   scanf("%f %f %f",&a, &b, &c);
	   for (float x=-10.0;x<10.0;x+=0.2f) {
	      printf("x = %f f(x) = %f\n", x, f(x));
	   }
	}
	```
	- Melhorou um pouco mas ainda está limitado.
	- Para calcular outra função é preciso recompilar o programa.
	---
	### Motivação 1
	- A versão ideal:
	```C
	float a,b,c;
	Funcao f;
	void main() {
	   printf("Digite a função: ");
	   scanf("%fun",&f);
	   for (float x=-10.0;x<10.0;x+=0.2f) {
	      printf("x = %f f(x) = %f\n", x, f(x));
	   }
	}
	```
	- Problema: scanf não é capaz de lêr funções.
	---
	### Motivação 2: 
	- Escrever programas complexos:
	```Java
	class Pessoa {
	    private String nome;
	    String nome() { return nome; }
	    void nome(String n) { nome = n; }
	    Pessoa(String n) { nome = n; }
	    String toString() { return "Pessoa(\""+nome+"\")"); }
	    ...
	}
	```
	- Código muito Repetitivo
	---
	### Motivação 2: 
	- Solução: Melhorar a linguagem (JDK 14)
	```Java
	public record Pessoa(String nome);
	```
	- Uma linguagem como Java nunca vai ter tudo o que o programador precisa.
	---
        ### Motivação 3:
        - Programa "Ola Mundo" em Java:
        ```Java
        public class Main() {
           public static void main(String args[]) {
               System.out.println("Ola Mundo");
           }
        }
        ```
        - O programador tem de criar uma classe, com um método estático, que recebe um array de strings e depois acessar no objeto System uma variável out...
        - Muito complicado para iniciantes entenderem.
	---
        ### Motivação 3:
        - Programa "Ola Mundo" em Basic:
        ```
        10 print "Ola Mundo"
        ```
        - Uma linguagem deve fazer com que tarefas simples tenham código simples.
        - Linguagens "profissionais" são projetadas para ter estruturas poderosas e não fáceis de usar.
	---
        ### Resumo
        - Desenvolvimento em Linguagens "tradicionais":
           - Gera programas pouco flexíveis
           - Gera programas com muita redundância de código
           - Não é uma opção para programadores iniciantes ou "hobistas"
	---
        ### Solução
        - Linguagens de Domínios Específicos:
           - Linguagens Projetadas para um tipo específico de problema
           - Podem ser inseridas em aplicações
           - Tem uma sintaxe mais "enxuta" e "suscinta"
           - Evita a repetição de código
           - Podem ser usadas por programadores menos experientes.
	---
        ### Solução
        - Exemplos:
           - SQL:
           
           ```
           select nome from Estudantes where curso="Computação"
           
           ```
	---
        ### Solução
        - Exemplos:
           - LOGO: <a href="https://turtleacademy.com/playground"> Playground </a>
           
           ```
           repeat 10 [
              foward 10
              left 10
           ]
           
           ```
	</script></section>
	
	</section>
	<section data-markdown><script type="text/template">
        ### Compiladores
        
        - Técnicas para construir programas que:
           - Lêem entradas (programas) complexas
           - Representam programas como estruturas de dados
           - Realizam análises / interpretam ou geram códigos a partir destes programas.
        - Maioria das linguagens não possuem funções para isso.
	</script></section>

        <section>
      	<section>
      	<h3>Estrutura de um Compilador</h3>
      	<div class="mermaid">
        <pre>
          flowchart LR
            A((Fonte)) --> Front[Front End] -- Tree --> Back[Back End] --> Res((Resultado));
        </pre>
      	</div>
        <ol>
	<li> O código fonte é fornecido ao compilador
	<li> O front-end reconhece/valida o código fonte e produz uma estrutura de dados que representa o progama
       	<li> O Back-End: Analisa a estrutura de dados produzindo o resultado esperado
	</ol>
      	</section>
	
	<section data-markdown><script type="text/template">
	### Front-End
	<div class="mermaid">
	  flowchart LR
	    A((Fonte)) --> Lex[Analisador Lexico] -- Tokens --> Sint[Analisador Sintático] 
		-- Tree --> Sem[Analisador Semantico] --> Res((Tree));
	</div>
 	* O Analisador Léxico lê o código fonte e quebra-o em palavras (tokens)
	* O analisador Sintático organiza os tokens em estruturas sintáticas
	* O analisador Semântico verifica erros de "concordância" nas estruturas sintáticas
      	
	</script></section>
	<section data-markdown><script type="text/template">
        ### Back-End
        <div class="mermaid">
	  flowchart LR
	    A((Tree)) --> Gera[Gerador Código Interm.] -- codigo --> Oti[Otimizador] -- codigo Otimizado --> asm[Gerador Código Final] --> Com((Código Compilado));
	    A --> Int[Interpretador] --> Res((Resultado Execução));
	    A --> an[Analisador] --> Rel((Relatorio Problemas))
	</div>
	O BackEnd pode realizar várias atividades a partir da árvore:
	- Compilar o código e traduzir para uma linguagem de baixo nível
	- Interpretar o código e produzir o resultado da execução
	- Analisar o código e produzir um relatório de possiveis falhas no programa        
	</script></section>
        </section>
        <section>
	<section data-markdown><script type="text/template">
        ### Tópicos
        
        - Analisar Cada Etapa de um compilador
           - Análise Léxica, Análise Sintática, Análise Semântica, Geração de Código, Otimização
        - Tecnologias que facilitam a implementação
           - Ferramentas de Geração de compiladores
           - Técnicas de Implementação
        - Linguagens de Exemplo:
           - Exp
           - MiniLogo
           - MiniC
                
	</script></section>

	<section data-markdown><script type="text/template">
        ### Bibliografia
        
        - AHO, A. V. et al. Compiladores: princípios, técnicas e ferramentas. 2. ed. São Paulo: Pearson, 2008. E-book. Disponível em: https://plataforma.bvirtual.com.br. Acesso em: 26 fev. 2025.
        - Appel, Andrew W. Modern Compiler Implementation in Java: Basic Techniques. 1997
        - Ferramenta ANTLR. http://www.antlr.org                
	</script></section>

	<section data-markdown><script type="text/template">
        ### Avaliação
        
        - 2 avaliações escritas
        - Projeto da Disciplina
          - Desenvolver uma linguagem de domínio específico
	</script></section>


        </section>
        
      </div>
    </div>

<?php
   require('../rodape.php');
?>