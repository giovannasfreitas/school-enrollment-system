# Sistema de Matricula Escolar

> Sistema de matrícula escolar com CRUD completo, desenvolvido em PHP puro e MySQL.

<div align="center">

[![Status: Concluído](https://img.shields.io/badge/Status-Concluído-brightgreen?style=flat-square)](https://github.com/giovannasfreitas/school-enrollment-system)
[![Linguagem](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Banco de Dados](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Licença](https://img.shields.io/badge/License-MIT-blue?style=flat-square)](LICENSE)

</div>


<div align="center">
  <h3>
    <a href="http://escolasaber.ct.ws/">
      ✨ Ver Deploy Online
    </a>
  </h3>
</div>

---

## Sobre o Projeto

Este projeto simula o fluxo real de uma matrícula escolar, com foco em uma arquitetura funcional usando **PHP puro** ("vanilla") e **MySQL**. A aplicação foi desenvolvida para ser uma demonstração prática e completa das operações de **CRUD** (Create, Read, Update, Delete) em um cenário do mundo real, gerenciando de forma relacional os dados de alunos, responsáveis e endereços.

##  Recursos

* **Gerenciamento Completo (CRUD):** Funcionalidades para Criar, Ler, Atualizar e Excluir registros.
* **Cadastro Relacional:** Formulário único que popula as tabelas interligadas do sistema.
* **Busca Inteligente:** Ferramenta de pesquisa para filtrar e encontrar registros com facilidade.
* **Interface Limpa:** Navegação simples e focada na experiência do usuário.

## Tecnologias

-   **Backend:** PHP
-   **Banco de Dados:** MySQL
-   **Frontend:** HTML5 & CSS3
-   **Ambiente Local:** MAMP (Apache + PHP + MySQL)


##  Descrição das Pastas e Arquivos

- **index.html** → Página inicial do sistema.  
- **assets/** → Arquivos estáticos (imagens, logos, ícones).  
- **php/** → Arquivos PHP responsáveis pela lógica do sistema e CRUD:  
  - `config.php` → Configuração de conexão com o banco.  
  - `matricula.php` → Cadastro de matrículas.  
  - `listar_*.php` → Listagem de alunos, endereços e responsáveis.  
  - `editar*.php` / `saveEditar*.php` → Edição e salvamento de alterações.  
  - `delete.php` → Exclusão de registros.  
- **db/** → Scripts do banco de dados.  
  - `matricula_aluno.sql` → Estrutura e dados do banco.  
- **css/** → Estilos visuais de cada página do sistema.  
- **pages/** → Páginas HTML do sistema (cadastro, login, listagem, sobre, etc.).  

---

##  Como Rodar Localmente

1.  **Pré-requisitos:** Tenha [Git](https://git-scm.com) e [MAMP](https://www.mamp.info/en/downloads/) (ou similar) instalados.

2.  **Clone o repositório** na pasta `htdocs` do seu MAMP:
    ```sh
    git clone [https://github.com/seu-usuario/school-enrollment-system.git](https://github.com/seu-usuario/school-enrollment-system.git)
    ```

3.  **Crie e importe o banco de dados** usando o phpMyAdmin:
    -   Crie um banco chamado `matriculas_db`.
    -   Importe o arquivo `db/matriculas.sql`.

4.  **Acesse** `http://localhost/school-enrollment-system/` no seu navegador.
---

<p align="center">
  Feito por <strong>Giovanna Freitas</strong>
</p>

<p align="center">
  <a href="https://www.linkedin.com/in/giovannfreitas/">
    <img alt="LinkedIn" src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white">
  </a>
  <a href="https://github.com/giovannasfreitas/">
    <img alt="GitHub" src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white">
  </a>
</p>
