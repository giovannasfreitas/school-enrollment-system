# 🎓 School Enrollment System (PHP + MySQL)

<p align="center">
  <img alt="Status do Projeto" src="https://img.shields.io/badge/Status-Concluído-brightgreen">
  <img alt="Linguagem Principal" src="https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white">
  <img alt="Banco de Dados" src="https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white">
  <img alt="Licença" src="https://img.shields.io/badge/License-MIT-blue">
</p>

> Sistema de matrícula escolar desenvolvido em PHP puro com banco de dados MySQL, permitindo o gerenciamento completo de alunos, responsáveis e seus respectivos endereços.

<p align="center">
  <a href="#-sobre-o-projeto">Sobre</a> •
  <a href="#-demonstração-rápida">Demonstração</a> •
  <a href="#-funcionalidades-principais">Funcionalidades</a> •
  <a href="#-tecnologias-utilizadas">Tecnologias</a> •
  <a href="#-rodando-o-projeto-localmente">Como Rodar</a> •
  <a href="#-autor">Autor</a>
</p>

---

### 🎥 Demonstração Rápida

**DICA:** Grave sua tela usando uma ferramenta como [ScreenToGif](https://www.screentogif.com/) ou [Kap](https://getkap.co/) mostrando o fluxo principal: preenchendo o formulário de matrícula, vendo a página de sucesso e depois mostrando a listagem com o novo registro. Isso valoriza DEMAIS o projeto.

<p align="center">
  <img src="URL_DO_SEU_GIF_OU_IMAGEM_AQUI" alt="Demonstração do Sistema de Matrícula" width="800"/>
</p>

---

### ✨ Sobre o Projeto

Este sistema foi construído para simular o fluxo real de uma matrícula escolar. O foco foi criar uma aplicação robusta e funcional utilizando PHP "vanilla" (puro) para a lógica de backend e um banco de dados relacional MySQL para a persistência dos dados. O projeto permite cadastrar, listar, pesquisar, editar e excluir registros, implementando todas as operações de um CRUD completo.

O ambiente de desenvolvimento utilizado foi o **MAMP**, garantindo um servidor Apache, PHP e MySQL prontos para uso.

🌐 **Acesse a versão online do projeto:** **[http://escolasaber.ct.ws/](http://escolasaber.ct.ws/)**

---

### 🚀 Funcionalidades Principais

-   ✅ **Navegação Intuitiva:** Menus claros para `Início`, `Matrícula`, `Sobre`, `Contato` e `Listagens`.
-   📝 **Matrícula Completa:** Formulário que registra dados de forma relacional em três tabelas: `Alunos`, `Responsáveis` e `Endereços`.
-   🎉 **Confirmação de Sucesso:** Página de feedback para o usuário após a conclusão bem-sucedida da matrícula.
-   🛠️ **Gerenciamento (CRUD):**
    -   **Listagem:** Exibição organizada dos registros de cada tabela.
    -   **Pesquisa:** Ferramenta de busca para encontrar registros específicos.
    -   **Edição:** Funcionalidade para atualizar dados existentes.
    -   **Exclusão:** Opção para remover registros do banco de dados.

---

### 🛠️ Tecnologias Utilizadas

As seguintes ferramentas e tecnologias foram usadas na construção do projeto:

| Ferramenta/Tecnologia | Descrição                               |
| --------------------- | ----------------------------------------- |
| **PHP** | Linguagem de backend para toda a lógica.  |
| **MySQL** | Banco de dados relacional.                |
| **HTML5 & CSS3** | Estrutura e estilização das páginas.      |
| **MAMP** | Ambiente de servidor local (Apache, MySQL, PHP). |

---

### ⚙️ Rodando o Projeto Localmente

Siga os passos abaixo para executar o sistema em sua máquina.

#### **Pré-requisitos**

Antes de começar, você vai precisar ter instalado em sua máquina:
-   [Git](https://git-scm.com)
-   [MAMP](https://www.mamp.info/en/downloads/) (ou um ambiente similar como XAMPP/WAMP)

#### **Instalação**

1.  Clone este repositório para a pasta `htdocs` do seu MAMP:
    ```bash
    cd /Applications/MAMP/htdocs
    git clone [https://github.com/seu-usuario/school-enrollment-system.git](https://github.com/seu-usuario/school-enrollment-system.git)
    ```

2.  Importe o banco de dados:
    -   Inicie o MAMP e abra o **phpMyAdmin**.
    -   Crie um novo banco de dados chamado `matriculas_db`.
    -   Selecione o banco `matriculas_db`, vá para a aba "Importar" e envie o arquivo `db/matriculas.sql` que está neste projeto.

3.  Inicie o servidor Apache e o MySQL no MAMP.

4.  Acesse o projeto no seu navegador:
    [http://localhost/school-enrollment-system/](http://localhost/school-enrollment-system/)

---

### 📂 Estrutura de Pastas

/school-enrollment-system <br>
│ <br>
├── index.php           # Página inicial <br>
├── matricula.php       # Página de matrícula <br>
├── pos-matricula.php   # Confirmação de matrícula <br>
├── listagens.php       # Exibição e CRUD das tabelas <br>
├── sobre.php           # Página institucional <br>
├── contato.php         # Página de contato <br>
│ <br>
├── db/                 # Configuração e scripts SQL <br>
│   └── matriculas.sql <br>
│ <br> 
└── assets/             # CSS, imagens e arquivos estáticos <br>

---

### 👤 Autor

Feito por **Giovanna Freitas**. Entre em contato!

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/giovannfreitas/)
[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/giovannasfreitas/)

---

### 📜 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
