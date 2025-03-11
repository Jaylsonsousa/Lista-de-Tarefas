# 🚀 Sistema de Gerenciamento de Tarefas e Usuários

<div align="center">

[![Status do Projeto](https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow)](/)
[![Licença](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/PHP-7.4+-purple.svg)](/)
[![Bootstrap Version](https://img.shields.io/badge/Bootstrap-5.3.3-blueviolet.svg)](/)

</div>

## 📑 Índice
- [Sobre o Projeto](#-sobre-o-projeto)
- [Funcionalidades](#-funcionalidades)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Estrutura do Projeto](#-estrutura-do-projeto)
- [Instalação](#-instalação)
- [Como Usar](#-como-usar)

## 💡 Sobre o Projeto

Sistema web desenvolvido em PHP para gerenciamento de tarefas e usuários, com interface moderna e responsiva utilizando Bootstrap 5. O sistema permite o controle completo de tarefas e usuários através de operações CRUD (Create, Read, Update, Delete).

## ⚙️ Funcionalidades

### Módulo de Tarefas
- Listagem de todas as tarefas
- Criação de novas tarefas
- Visualização detalhada de cada tarefa
- Edição de tarefas existentes
- Exclusão de tarefas
- Marcação de tarefas como concluídas
- Sistema de confirmação para exclusão

### Módulo de Usuários
- Cadastro completo de usuários
- Visualização dos dados do usuário
- Edição de informações pessoais
- Gerenciamento de data de nascimento
- Sistema de validação de dados

### Recursos Gerais
- Interface responsiva
- Mensagens de feedback para o usuário
- Navegação intuitiva
- Sistema de alertas
- Confirmação de ações importantes

## 🛠️ Tecnologias Utilizadas

- **PHP 7.4+**: Linguagem backend
- **MySQL/PDO**: Banco de dados e conexão
- **Bootstrap 5.3.3**: Framework CSS
- **Bootstrap Icons**: Ícones do sistema
- **JavaScript**: Interações do cliente
- **HTML5/CSS3**: Estrutura e estilização

## 📁 Estrutura do Projeto

### Arquivos Principais
- `index.php`: Página principal com listagem de tarefas
- `conexao.php`: Configuração da conexão com o banco de dados
- `acoes.php`: Controlador de ações do sistema

### Componentes
- `navbar.php`: Menu de navegação reutilizável
- `mensagem.php`: Sistema de feedback para o usuário

### Módulo de Tarefas
- `tarefa-create.php`: Formulário de criação de tarefas
- `tarefa-edit.php`: Edição de tarefas existentes
- `tarefa-view.php`: Visualização detalhada de tarefas

### Módulo de Usuários
- `usuario-edit.php`: Edição de dados do usuário
- `usuario-view.php`: Visualização de perfil
- `usuarios.php`: Listagem de usuários

## 🔧 Instalação

1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
```

2. Configure o banco de dados
```sql
CREATE DATABASE nome_do_banco;
USE nome_do_banco;

CREATE TABLE tarefas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    descricao TEXT NOT NULL,
    concluida BOOLEAN DEFAULT FALSE
);

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    date_nascimento DATE NOT NULL
);
```

3. Configure a conexão
Edite o arquivo `conexao.php` com suas credenciais:
```php
$host = "localhost";
$dbname = "seu_banco";
$usuario = "seu_usuario";
$senha = "sua_senha";
```

## 📌 Como Usar

1. **Gerenciando Tarefas**
   - Acesse a página inicial para ver todas as tarefas
   - Use o botão "Adicionar Tarefa" para criar novas tarefas
   - Utilize os botões de ação para editar, visualizar ou excluir

2. **Gerenciando Usuários**
   - Acesse a seção de usuários pelo menu
   - Cadastre novos usuários com nome, email e data de nascimento
   - Gerencie usuários existentes através das opções disponíveis

## 🔒 Segurança
- Utilização de PDO para prevenção de SQL Injection
- Validação de dados em formulários
- Confirmação em ações críticas
- Sessões PHP para controle de estado

## 🤝 Contribuição
1. Faça um Fork do projeto
2. Crie sua Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a Branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença
Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
