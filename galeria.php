<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Galeria de Arte - Venda de Pinturas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9; }
        header { background-color: #FFC0CB; padding: 20px; text-align: center; }
        nav { background-color: #333; padding: 10px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { padding: 20px; max-width: 1000px; margin: auto; }
        footer { background-color: #FFC0CB; text-align: center; padding: 10px; margin-top: 40px; }
        .grid-pinturas { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 30px; }
        .cartao-pintura { background-color: white; border: 1px solid #ddd; border-radius: 8px; padding: 15px; text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .cartao-pintura img { width: 100%; height: 220px; object-fit: cover; border-radius: 4px; }
        .preco { color: #2ecc71; font-weight: bold; font-size: 1.2em; margin: 10px 0; }
        .botao-comprar { background-color: #333; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; font-weight: bold; width: 100%; }
        .botao-comprar:hover { background-color: #FFC0CB; color: #333; }
    </style>
</head>
<body>

    <header>
        <h1>Galeria de Arte & Pinturas</h1>
        <p>Encontre a obra de arte perfeita para o seu espaço</p>
    </header>

    <nav>
        <a href="index.html">Início</a>
        <a href="sobre.html">Sobre</a>
        <a href="servicos.html">Serviços</a>
        <a href="galeria.html">Galeria</a>
        <a href="contato.html">Contato</a>
    </nav>

    <main>
        <h2>Catálogo de Pinturas</h2>
        <p>Confira todas as nossas obras exclusivas disponíveis para venda:</p>

        <div class="grid-pinturas">
           
            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1579783900882-c0d3dad7b119?w=500" alt="Pintura Colorida Abstrata">
                <h3>Explosão Abstrata</h3>
                <p class="preco">R$ 450,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?w=500" alt="Arte Fluida Ondas">
                <h3>Ondas de Tinta</h3>
                <p class="preco">R$ 620,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1580136579312-94651dfd596d?w=500" alt="Pintura de Paisagem">
                <h3>Montanhas ao Entardecer</h3>
                <p class="preco">R$ 380,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=500" alt="Gato Colorido">
                <h3>Olhar Felino</h3>
                <p class="preco">R$ 290,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=500" alt="Cidade Futurista">
                <h3>Metrópole Cibernética</h3>
                <p class="preco">R$ 750,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=500" alt="Mistura de Cores Quentes">
                <h3>Sinfonia de Outono</h3>
                <p class="preco">R$ 420,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1543857778-c4a1a3e0b2eb?w=500" alt="Céu Estrelado no Campo">
                <h3>Noite no Vale</h3>
                <p class="preco">R$ 480,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1501472312651-726afe119ff1?w=500" alt="Flores em Aquarela">
                <h3>Jardim de Aquarela</h3>
                <p class="preco">R$ 310,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1536924940846-227afb31e2a5?w=500" alt="Pintor trabalhando">
                <h3>Traços da Alma</h3>
                <p class="preco">R$ 890,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1605721911519-3dfeb3be25e7?w=500" alt="Splash de tinta colorida">
                <h3>Energia Urbana</h3>
                <p class="preco">R$ 460,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?w=500" alt="Dunas do Deserto ao Por do Sol">
                <h3>Luz do Deserto</h3>
                <p class="preco">R$ 520,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="cartao-pintura">
                <img src="https://images.unsplash.com/photo-1578301978693-85fa9c0320b9?w=500" alt="Rosto Abstrato">
                <h3>Expressão Oculta</h3>
                <p class="preco">R$ 680,00</p>
                <button class="botao-comprar">Comprar</button>
            </div>

        </div>
    </main>

    <footer>
        <p>© 2026 Galeria de Arte. Todos os direitos reservados.</p>
    </footer>

</body>
</html>

