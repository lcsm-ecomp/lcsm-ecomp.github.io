    <!-- Carregando o reveal.js e dependências da CDN -->
    <script src="/node_modules/reveal.js/dist/reveal.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.5.0/plugin/markdown/markdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.5.0/plugin/highlight/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/reveal.js-mermaid-plugin@11.4.1/plugin/mermaid/mermaid.js"></script>

    <script>
      // Inicialização do reveal.js
      Reveal.initialize({
        plugins: [RevealMarkdown, RevealHighlight, RevealMermaid],
        hash: true, // Ativa navegação por hash
        transition: 'slide', // Transição entre slides
        // mermaid initialize config
        mermaid: {
          // flowchart: {
          //   curve: 'linear',
          // },
    },
      });
      mermaid.initialize({ startOnLoad: true });
    </script>
  </body>
</html>
