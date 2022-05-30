## Modelagem física

### Criar banco de dados
```sql
CREATE DATABASE crud_escola_ignacio CHARACTER SET utf8mb4;
```
<!-- ____________________________________________________________________ -->
### Criar tabela cursos
```sql
CREATE TABLE alunos(
    id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    primeira_nota DECIMAL(3,1) NOT NULL,
    segunda_nota DECIMAL(3,1) NOT NULL,
    media DECIMAL(3,1) NOT NULL,
    situacao VARCHAR(15) NOT NULL
);
```