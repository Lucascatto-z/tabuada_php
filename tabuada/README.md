<div align="center">

# 🧮 Tabuada

**Uma calculadora de tabuada moderna com design glassmorphism, gradientes animados e auroras flutuantes.**

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

</div>

---

## 📖 Sobre o projeto

Este projeto é uma **aplicação web simples e elegante** que gera a tabuada de multiplicação de qualquer número informado pelo usuário.

O usuário digita um número em um formulário HTML, que envia os dados via **POST** para um script **PHP** responsável por calcular e exibir a tabuada de 0 a 10 em uma tabela estilizada.

O grande diferencial é o **design premium**: interface com efeito de vidro (glassmorphism), gradientes animados, auroras coloridas ao fundo e microinterações em cada elemento — tudo isso sem usar nenhuma biblioteca ou framework externo, apenas **CSS puro**.

---

## ✨ Funcionalidades

- 🔢 Entrada de qualquer número inteiro
- ⚡ Cálculo automático da tabuada de **0 a 10**
- 🎨 Interface com efeito **glassmorphism** (vidro fosco)
- 🌈 Gradientes animados no título e nos botões
- 🌌 Fundo com **auroras coloridas flutuantes**
- 💫 Microinterações em hover (botões, tabela, cards)
- 📱 Layout **totalmente responsivo** (mobile-first)
- ♿ Respeita `prefers-reduced-motion` para acessibilidade

---

## 🖼️ Preview

> 💡 Substitua os links abaixo por prints reais do seu projeto.

| Tela inicial | Resultado |
|:---:|:---:|
| ![Tela inicial](preview-inicial.png) | ![Resultado](preview-resultado.png) |

---

## 🚀 Tecnologias utilizadas

| Tecnologia | Uso |
|------------|-----|
| **HTML5** | Estrutura da página e formulário |
| **CSS3** | Estilização, animações, glassmorphism, responsividade |
| **PHP** | Processamento do formulário e geração da tabuada |

Nenhuma biblioteca externa, nenhum framework — só o essencial. 💎

---

## 📁 Estrutura do projeto

```
📁 tabuada/
├── index.html      → Formulário para inserir o número
├── tabuada.php     → Processa o POST e exibe a tabuada
├── style.css       → Estilos (glassmorphism, animações, responsividade)
└── README.md       → Este arquivo
```

---

## 🛠️ Como executar o projeto

### 🔧 Pré-requisitos

Você precisa de um servidor com suporte a **PHP** (versão 7.0 ou superior). Algumas opções:

- **XAMPP** (Windows / Linux / macOS)
- **WAMP** (Windows)
- **MAMP** (macOS)
- **Laragon** (Windows)
- **PHP built-in server** (via terminal)

### 📥 Passo a passo

1. **Clone o repositório** ou baixe os arquivos:

   ```bash
   git clone https://github.com/seu-usuario/tabuada.git
   ```

2. **Coloque a pasta no diretório do seu servidor**:

   - XAMPP: `C:\xampp\htdocs\tabuada`
   - MAMP: `/Applications/MAMP/htdocs/tabuada`
   - Laragon: `C:\laragon\www\tabuada`

3. **Inicie o servidor** (Apache no XAMPP, por exemplo).

4. **Acesse no navegador**:

   ```
   http://localhost/tabuada/index.html
   ```

### 🐘 Alternativa: PHP built-in server

Se você tem o PHP instalado, basta rodar na pasta do projeto:

```bash
php -S localhost:8000
```

E acessar: [http://localhost:8000/index.html](http://localhost:8000/index.html)

> ⚠️ **Importante:** o arquivo `tabuada.php` **precisa** ser executado por um servidor PHP. Abrir diretamente com duplo clique **não funcionará**.

---

## 🧠 Como funciona

### 1️⃣ O formulário (`index.html`)

O usuário informa um número e envia via **POST**:

```html
<form action="tabuada.php" method="post">
    <label for="numero">Informe um número</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Calcular">
    <input type="reset" value="Limpar">
</form>
```

### 2️⃣ O processamento (`tabuada.php`)

O PHP recebe o número, converte para inteiro e gera a tabuada com um laço `while`:

```php
$numero = (int) $_POST['numero'];

$contador = 0;
while ($contador <= 10) {
    $r = $numero * $contador;
    echo "<tr>";
    echo "<td>$numero × $contador</td>";
    echo "<td>$r</td>";
    echo "</tr>";
    $contador++;
}
```

> 💡 Existe também uma versão com `for` no arquivo, mantida comentada para fins de estudo.

### 3️⃣ A estilização (`style.css`)

Todo o visual é feito com CSS puro, incluindo:

- **Glassmorphism**: `backdrop-filter: blur()` + transparência
- **Auroras flutuantes**: pseudo-elementos `::before` e `::after` com animação
- **Gradiente animado**: `background-size: 300%` + `@keyframes`
- **Responsividade**: `@media (max-width: 520px)`

---

## 🎨 Personalização

### Trocar as cores principais

No topo do `style.css`, edite as variáveis:

```css
:root {
    --roxo-1: #667eea;
    --roxo-2: #764ba2;
    --rosa:   #f093fb;
    --azul:   #4facfe;
    --ciano:  #00f2fe;
}
```

### Trocar o intervalo da tabuada

No `tabuada.php`, altere o `while`:

```php
$contador = 1;              // começar do 1
while ($contador <= 20) {   // ir até o 20
    // ...
}
```

---

## 🤝 Contribuições

Contribuições são muito bem-vindas! Sinta-se à vontade para:

1. Fazer um **fork** do projeto
2. Criar uma branch: `git checkout -b minha-feature`
3. Commitar as mudanças: `git commit -m "feat: minha nova feature"`
4. Fazer o push: `git push origin minha-feature`
5. Abrir um **Pull Request**

---

## 📄 Licença

Este projeto está sob a licença **MIT**. Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## 👨‍💻 Autor

Feito com 💜 e muito CSS.

**Seu Nome**
- GitHub: [@seu-usuario](https://github.com/seu-usuario)
- LinkedIn: [seu-perfil](https://linkedin.com/in/seu-perfil)

---

<div align="center">

⭐ Se este projeto te ajudou, deixe uma estrela no repositório! ⭐

</div>