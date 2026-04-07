# 📚 Aprender PHP

## Visão geral
Este repositório foi criado para ajudar os meus alunos a iniciar a sua jornada com o **PHP**.

Com **exercícios simples** e passo-a-passo, exemplos comentados e alguns desafios, com os conceitos fundamentais desta linguagem.

> **Objetivo principal:** proporcionar um ambiente prático onde os alunos possam programar, testar e aprender PHP em Português.


## 📂 Estrutura do repositório
```
├─ docs/                # Material de apoio
├─ exercicios/          # Pastas com os exercícios
│   ├─ 01-bases/        # Olá Mundo!, variáveis, operadores
│   ├─ 02-controlo/     # Condicionais, ciclos
│   ├─ 03-funcoes/      # Declaração e chamada de funções
│   ├─ 04-formularios/  # Processamento de formulários HTML
│   └─ 05-basesdedados/ # Ligação PDO/MySQL, CRUD simples
├─ .gitignore
├─ README.md            # ← este ficheiro
└─ LICENSE              # Licença do projeto
```



# 🚀 Como começar

## 1. Instalar um ambiente PHP

**Windows / macOS / Linux**

Pode utilizar:

- **XAMPP**
- **MAMP**
- **Apache + MariaDB**

Alternativamente, pode usar **Docker**:

```bash
docker run -d -p 8080:80 -v $(pwd):/var/www/html php:8.2-apache
````

---

## 2. Clonar o repositório

```bash
cd <pasta na raíz do servidor>
git clone https://github.com/ricardobigote/aprender-php.git
cd aprender-php
```

Alternativamente, pode utilizar a aplicação [GitHub Desktop](https://desktop.github.com/download/ "GitHub Desktop"){:target="_blank"}. 

---

## 3. Abrir o browser

Aceda a:

```
http://localhost/<pasta-do-repositorio>/index.html
```

ou à porta configurada no Docker.

---

## 4. Editar o código

Abra os ficheiros no seu editor favorito:

* VS Code
* VSCodium

As alterações serão refletidas imediatamente ao **recarregar a página no browser**.

---

# 📖 Guia de estudo recomendado

| Ordem | Tema                          | Exercício associado                              |
| -------| -------------------------------| -----------------------------------------------|
| 1     | Olá Mundo e sintaxe básica    | `exercicios/01-bases/ex-01.php e ex-02.php`      |
| 2     | Variáveis, tipos e operadores | `exercicios/01-bases/ex-03.php a ex-05.php`      |
| 3     | Estruturas de controlo        | `exercicios/02-controlo/`    (em desenvolvimento)|
| 4     | Funções                       | `exercicios/03-funcoes/`     (em desenvolvimento)|
| 5     | Formulários e validação       | `exercicios/04-formularios/` (em desenvolvimento)|
| 6     | PDO + MySQL (CRUD)            | `exercicios/05-basededados/` (em desenvolvimento)|

---

# 🤝 Contribuições

Contribuições são **bem-vindas**, com um grande **Bem Haja**!

Se quiser adicionar novos exercícios, melhorar a documentação ou corrigir algum erro:

1. Faça **Fork** do repositório.
2. Crie um **branch descritivo** (`feature/novo-exercicio-array`).
3. Faça **commit** das alterações.
4. Abra um **Pull Request** explicando a mudança.

> **Nota:** siga o padrão de codificação **PSR-12** e inclua comentários claros nos seus exemplos.

---

# 📄 Licença

Este projeto está licenciado sob a **Licença GPL-3.0** – sinta-se livre para usar, modificar e distribuir o material, desde que mantenha a atribuição original.

---

# 📞 Contacto

Para dúvidas, sugestões ou feedback:

* Abra uma **issue** neste repositório
* ou contacte-me através do meu **perfil no GitHub**

---

🚀 **Boas aprendizagens!**
Que cada exercício seja um degrau a mais na proficiência em **PHP** dos seus alunos.

