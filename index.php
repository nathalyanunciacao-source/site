<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Galeria de Arte - Início</title>
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
        .hero { text-align: center; padding: 40px 20px; background: #fff; border-radius: 8px; margin-bottom: 30px; }
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
        <section class="hero">
            <h2>Bem-vindo à nossa Galeria de Arte</h2>
            <p>Conectamos colecionadores e amantes de arte a quadros e obras exclusivas.</p>
        </section>

        <h2>Destaques da Semana</h2>
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
        </div>
    </main>

    <footer>
        <p>© 2026 Galeria de Arte. Todos os direitos reservados.</p>
    </footer>

</body>
</html>

