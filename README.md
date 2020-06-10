<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<br><br><br>

<h1 align="center">API Filmes</h1>
<h4 align="center">Uma API REST para gerenciamento de Filmes</h4>

## Sobre o projeto
Este projeto tem como finalidade atestar meus conhecimentos nos seguintes pontos:
- Desenvolvimento de aplicações LARAVEL
- Desenvolvimento de API's REST utilizando LARAVEL
- Roteamento com LARAVEL
- Eloquent ORM

## Por que este projeto?
- Este projeto faz parte do meu portfólio pessoal, uma maneira de comprovar meus conhecimentos em LARAVEL.
- A construção de API's faz parte da rotina de um desenvolvedor back-end, então esse projeto serviu como uma simulação da rotina real de um desenvolvedor back-end atuando com LARAVEL.

## Sobre a modelagem do Banco de Dados
- O desafio consistia na construção de uma API REST utilizando LARAVEL que permitisse o gerenciamento de filmes.
- Para o desafio foram criadas as seguintes tabelas:
	- genero
	- classificacao
	- ator
	- diretor
	- filme
	- filme_ator
	- filme_diretor
	- filme_genero

# Sobre as Rotas
## Gênero
```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/generos

- Para listar todos os gêneros
```

```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/generos/{id}

- Para listar um gênero em específico
```

```php
Method: POST
Url: http://127.0.0.1:8000/api/v1/generos

- Para Adicionar um novo gênero
- Parameters:
	-	ds_genero (string)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/generos/{id}

- Para Atualizar um gênero
- Parameters:
	-	ds_genero (string)
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/generos/{id}
```

## Classificacao
```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/classificacoes

- Para listar todos as classificações
```

```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/classificacoes/{id}

- Para listar uma classificação em específico
```

```php
Method: POST
Url: http://127.0.0.1:8000/api/v1/classificacoes

- Para Adicionar uma nova classificação
- Parameters:
	- ds_classificacao (string)
	- ds_observacao (text)
	- ds_violencia (text)
	- ds_sexo_nudez (text)
	- ds_drogas  (text)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/classificacoes/{id}

- Para Atualizar uma classificação
- Parameters:
	- ds_classificacao (string)
	- ds_observacao (text)
	- ds_violencia (text)
	- ds_sexo_nudez (text)
	- ds_drogas  (text)
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/classificacoes/{id}
```

## Ator
```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/atores

- Para listar todos os atores
```

```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/atores/{id}

- Para listar um ator em específico
```

```php
Method: POST
Url: http://127.0.0.1:8000/api/v1/atores

- Para Adicionar um novo ator
- Parameters:
	-	nm_ator (string)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/atores/{id}

- Para Atualizar um ator
- Parameters:
	-	nm_ator (string)
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/atores/{id}
```

## Diretor
```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/diretores

- Para listar todos os diretores
```

```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/diretores/{id}

- Para listar um diretor em específico
```

```php
Method: POST
Url: http://127.0.0.1:8000/api/v1/diretores

- Para Adicionar um novo diretor
- Parameters:
	-	nm_diretor (string)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/diretores/{id}

- Para Atualizar um diretor
- Parameters:
	-	nm_diretor (string)
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/diretores/{id}
```

## Filme
```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/filmes

- Para listar todos os filmes
```

```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/filmes/{id}

- Para listar um filme em específico
```

```php
Method: POST
Url: http://127.0.0.1:8000/api/v1/filmes

- Para Adicionar um novo filme
- Parameters:
	- titulo (string)
	- dt_lancamento (datetime)
	- duracao (string)
	- classificacao_id (int)(foreign key)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/filmes/{id}

- Para Atualizar um filme
- Parameters:
	- titulo (string)
	- dt_lancamento (datetime)
	- duracao (string)
	- classificacao_id (int)(foreign key)
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/filmes/{id}
```

## Filme Ator
```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/atores

- Para listar todos os atores de um filme em específico
```

```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/atores/{idAtor}

- Para listar um ator em específico de um determinado filme
```

```php
Method: POST
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/atores

- Para Adicionar um novo ator
- Parameters:
	- ator_id (int)(foreign key)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/atores/{idAtor}

- Não implementado, foi preferido a remoção do ator e a posterior adição do novo ator, realizando assim uma troca
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/atores/{idAtor}
```


## Filme Diretor
```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/diretores

- Para listar todos os diretores de um filme em específico
```

```php
Method: GET
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/diretores/{idDiretor}

- Para listar um diretor em específico de um determinado filme
```

```php
Method: POST
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/diretores

- Para Adicionar um novo diretor
- Parameters:
	- diretor_id (int)(foreign key)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/diretores/{idDiretor}

- Não implementado, foi preferido a remoção do diretor e a posterior adição do novo diretor, realizando assim uma troca
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/filmes/{id}/diretores/{idDiretor}
```

## Setup
1. Clone o repositório
2. Instale o [composer](https://getcomposer.org/download/)
3. Acesse a raiz do projeto
4. Com o console aberto, execute o comando: `composer install`
5. Após a instalação de todas as dependências necessárias, execute o comando: `cp .env.example .env` (para gerar o arquivo .env)
6. Execute o comando: `php artisan key:generate`
7. Com o seu ambiente de desenvolvimento rodando, crie uma nova base de dados com o nome: `api_filme`
8. Após toda a configuração necessária, execute o comando: `php artisan serve`
9. O projeto deve estar disponível no endereco: [localhost:8000/api/v1/](http://localhost:8000/api/v1/) 

## Observações importantes
- É aconselhável que você tenha em sua máquia o [postman](https://www.postman.com/) para que possa fazer os devidos testes sobre as rotas disponíveis nesta API.

## Dependências e suas versões
- PHP 7.4.3 +
- Extensão de PHP: mysqli | curl | mbstring
- LARAVEL 6x+
- Versão do servidor: 10.4.11-MariaDB

## Considerações finais
- API ainda passará por alterações, esta API não representa uma amostra real, devendo ser utilizada apenas para se ter uma noção sobre como funciona um API REST.
- Qualquer dúvida ou sugestão, entre em contato pelo e-mail: lucas.fullstack.dev@gmail.com
