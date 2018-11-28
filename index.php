<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use App\Models\Entity\Book;

require 'bootstrap.php';

/**
 * Lista de todos os livros
 * @request curl -X GET http://localhost:8000/book
 */
$app->get('/book', function (Request $request, Response $response) use ($app) {

    $entityManager = $this->get('em');
    $booksRepository = $entityManager->getRepository('App\Models\Entity\Book');
    $books = $booksRepository->findAll();

    $return = $response->withJson($books, 200)
        ->withHeader('Content-type', 'application/json');
    return $return;
});

/**
 * Retornando mais informações do livro informado pelo id
 * @request curl -X GET http://localhost:8000/book/1
 */
$app->get('/book/{id}', function (Request $request, Response $response) use ($app) {
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $booksRepository = $entityManager->getRepository('App\Models\Entity\Book');
    $book = $booksRepository->find($id);        

    $return = $response->withJson($book, 200)
        ->withHeader('Content-type', 'application/json');
    return $return;
});

/**
 * Cadastra um novo <Livro></Livro>
 * @request curl -X POST http://localhost:8000/book -H "Content-type: application/json" -d '{"name":"O Oceano no Fim do Caminho", "author":"Neil Gaiman"}'
 */
$app->post('/book', function (Request $request, Response $response) use ($app) {

    $params = (object) $request->getParams();

    /**
     * Pega o Entity Manager do nosso Container
     */
    $entityManager = $this->get('em');

    /**
     * Instância da nossa Entidade preenchida com nossos parametros do post
     */
    $book = (new Book())->setName($params->name)
        ->setAuthor($params->author);
    
    /**
     * Persiste a entidade no banco de dados
     */
    $entityManager->persist($book);
    $entityManager->flush();


    $return = $response->withJson($book, 201)
        ->withHeader('Content-type', 'application/json');
    return $return;
});

/**
 * Atualiza os dados de um livro
 * @request curl -X PUT http://localhost:8000/book/14 -H "Content-type: application/json" -d '{"name":"Deuses Americanos", "author":"Neil Gaiman"}'
 */
$app->put('/book/{id}', function (Request $request, Response $response) use ($app) {

    /**
     * Pega o ID do livro informado na URL
     */
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    /**
     * Encontra o Livro no Banco
     */ 
    $entityManager = $this->get('em');
    $booksRepository = $entityManager->getRepository('App\Models\Entity\Book');
    $book = $booksRepository->find($id);   

    /**
     * Atualiza e Persiste o Livro com os parâmetros recebidos no request
     */
    $book->setName($request->getParam('name'))
        ->setAuthor($request->getParam('author'));

    /**
     * Persiste a entidade no banco de dados
     */
    $entityManager->persist($book);
    $entityManager->flush();        

    
    $return = $response->withJson($book, 200)
        ->withHeader('Content-type', 'application/json');
    return $return;
});

/**
 * Deleta o livro informado pelo ID
 * @request curl -X DELETE http://localhost:8000/book/3
 */
$app->delete('/book/{id}', function (Request $request, Response $response) use ($app) {
    /**
     * Pega o ID do livro informado na URL
     */
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    /**
     * Encontra o Livro no Banco
     */ 
    $entityManager = $this->get('em');
    $booksRepository = $entityManager->getRepository('App\Models\Entity\Book');
    $book = $booksRepository->find($id);   

    /**
     * Remove a entidade
     */
    $entityManager->remove($book);
    $entityManager->flush(); 

    $return = $response->withJson(['msg' => "Deletando o livro {$id}"], 204)
        ->withHeader('Content-type', 'application/json');
    return $return;
});





//                                                              CRUD LINGUAGEM


$app->get('/linguagem', function (Request $request, Response $response) use ($app) {

    $entityManager = $this->get('em');
    $linguagensRepository = $entityManager->getRepository('App\Models\Entity\Linguagem');
    $linguagens = $linguagensRepository->findAll();

    $return = $response->withJson($linguagens, 200)->withHeader('Content-type', 'application/json');
    return $return;
});

/**
 * Retornando mais informações do livro informado pelo id
 * @request curl -X GET http://localhost:8000/book/1
 */
$app->get('/linguagem/{id}', function (Request $request, Response $response) use ($app) {
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $linguagensRepository = $entityManager->getRepository('App\Models\Entity\Linguagem');
    $linguagens = $linguagensRepository->find($id);        

    $return = $response->withJson($linguagens, 200)->withHeader('Content-type', 'application/json');
    return $return;
});

$app->post('/linguagem', function (Request $request, Response $response) use ($app) {

    $params = (object) $request->getParams();
    $entityManager = $this->get('em');
    $linguagem = (new Linguagem())->setName($params->name)
        ->setAuthor($params->author);
    
    $entityManager->persist($linguagem);
    $entityManager->flush();

    $return = $response->withJson($linguagem, 201)->withHeader('Content-type', 'application/json');
    return $return;
});

$app->put('/linguagem/{id}', function (Request $request, Response $response) use ($app) {

    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $linguagensRepository = $entityManager->getRepository('App\Models\Entity\Linguagem');
    $linguagens = $linguagensRepository->find($id);   

    $linguagens->setName($request->getParam('name'))
        ->setAuthor($request->getParam('author'));

    $entityManager->persist($linguagens);
    $entityManager->flush();        

    $return = $response->withJson($linguagens, 200)->withHeader('Content-type', 'application/json');
    return $return;
});

/**
 * Deleta o livro informado pelo ID
 * @request curl -X DELETE http://localhost:8000/book/3
 */
$app->delete('/linguagem/{id}', function (Request $request, Response $response) use ($app) {
    /**
     * Pega o ID do livro informado na URL
     */
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $linguagensRepository = $entityManager->getRepository('App\Models\Entity\Linguagem');
    $linguagens = $linguagensRepository->find($id);   

    /**
     * Remove a entidade
     */
    $entityManager->remove($linguagens);
    $entityManager->flush(); 

    $return = $response->withJson(['msg' => "Deletando o livro {$id}"], 204)->withHeader('Content-type', 'application/json');
    return $return;
});






//                                                              CRUD LINGUAGEM


$app->get('/funcionario', function (Request $request, Response $response) use ($app) {

    $entityManager = $this->get('em');
    $funcionariosRepository = $entityManager->getRepository('App\Models\Entity\Funcionario');
    $funcionarios = $funcionariosRepository->findAll();

    $return = $response->withJson($funcionarios, 200)->withHeader('Content-type', 'application/json');
    return $return;
});

$app->get('/funcionario/{id}', function (Request $request, Response $response) use ($app) {
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $funcionariosRepository = $entityManager->getRepository('App\Models\Entity\Funcionario');
    $funcionarios = $funcionariosRepository->find($id);        

    $return = $response->withJson($funcionarios, 200)->withHeader('Content-type', 'application/json');
    return $return;
});

$app->post('/funcionario', function (Request $request, Response $response) use ($app) {

    $params = (object) $request->getParams();

    $entityManager = $this->get('em');
  
    $funcionarios = (new Funcionario())->setName($params->name)->setAuthor($params->author);
    
    $entityManager->persist($funcionarios);
    $entityManager->flush();

    $return = $response->withJson($funcionarios, 201)->withHeader('Content-type', 'application/json');
    return $return;
});


$app->put('/funcionario/{id}', function (Request $request, Response $response) use ($app) {

    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $funcionariosRepository = $entityManager->getRepository('App\Models\Entity\Funcionario');
    $funcionarios = $funcionariosRepository->find($id);   

    $funcionarios->setName($request->getParam('name'))->setAuthor($request->getParam('author'));

    $entityManager->persist($funcionarios);
    $entityManager->flush();        

    $return = $response->withJson($funcionarios, 200)->withHeader('Content-type', 'application/json');
    return $return;
});


$app->delete('/funcionario/{id}', function (Request $request, Response $response) use ($app) {
    
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $funcionariosRepository = $entityManager->getRepository('App\Models\Entity\Funcionario');
    $funcionarios = $funcionariosRepository->find($id);   

    $entityManager->remove($funcionarios);
    $entityManager->flush(); 

    $return = $response->withJson(['msg' => "Deletando o livro {$id}"], 204)->withHeader('Content-type', 'application/json');
    return $return;
});




$app->run();