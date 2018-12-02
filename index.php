<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use App\Models\Entity\Book;
use App\Models\Entity\Funcionario;
use App\Models\Entity\Linguagem;



require 'bootstrap.php';



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

 /**
 * Cadastra um novo <Livro></Livro>
 * @request curl -X POST http://localhost:8000/book -H "Content-type: application/json" -d '{"name":"O Oceano no Fim do Caminho", "author":"Neil Gaiman"}'
 */
$app->post('/funcionario', function (Request $request, Response $response) use ($app) {

   $params = (object) $request->getParams();

    $entityManager = $this->get('em');

    $funcionarioCarregado = (new Funcionario())
                 ->setname($request->getParam('name'))
                 ->setcpf($request->getParam('cpf'))
                 ->setrg($request->getParam('rg'))
                 ->setorgaoExpeditor($request->getParam('orgaoExpeditor'))
                 ->setDataNascimento($request->getParam('DataNascimento'))
                 ->setsexo($request->getParam('sexo'))
                 ->setnomeMae($request->getParam('nomeMae'))
                 ->setnomePai($request->getParam('nomePai'))
                 ->setendereco($request->getParam('endereco'))
                 ->setcep($request->getParam('cep'))
                 ->setestado($request->getParam('estado'))
                 ->setcidade($request->getParam('cidade'))
                 ->setbairro($request->getParam('bairro'))
                 ->setemail($request->getParam('email'))
                 ->settelefone($request->getParam('telefone'))
                 ->setcelular($request->getParam('celular'));
    
    $entityManager->persist($funcionarioCarregado);
    $entityManager->flush();


    $return = $response->withJson($funcionarioCarregado, 201)
        ->withHeader('Content-type', 'application/json');
    return $return;
});




$app->put('/funcionario/{id}', function (Request $request, Response $response) use ($app) {

    
    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $funcionariosRepository = $entityManager->getRepository('App\Models\Entity\Funcionario');
    $funcionarios = $funcionariosRepository->find($id);   

    $funcionarios->setName($request->getParam('name'))
                 ->setcpf($request->getParam('cpf'))
                 ->setrg($request->getParam('rg'))
                 ->setorgaoExpeditor($request->getParam('orgaoExpeditor'))
                 ->setDataNascimento($request->getParam('DataNascimento'))
                 ->setsexo($request->getParam('sexo'))
                 ->setnomeMae($request->getParam('nomeMae'))
                 ->setnomePai($request->getParam('nomePai'))
                 ->setendereco($request->getParam('endereco'))
                 ->setcep($request->getParam('cep'))
                 ->setestado($request->getParam('estado'))
                 ->setcidade($request->getParam('cidade'))
                 ->setbairro($request->getParam('bairro'))
                 ->setemail($request->getParam('email'))
                 ->settelefone($request->getParam('telefone'))
                 ->setcelular($request->getParam('celular'));

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















//                                                              CRUD LINGUAGEM


$app->get('/linguagem', function (Request $request, Response $response) use ($app) {

    $entityManager = $this->get('em');
    $linguagensRepository = $entityManager->getRepository('App\Models\Entity\Linguagem');
    $linguagens = $linguagensRepository->findAll();

    $return = $response->withJson($linguagens, 200)->withHeader('Content-type', 'application/json');
    return $return;
});

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

    $return = $response->withJson($linguagem, 201)
    ->withHeader('Content-type', 'application/json');
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

$app->delete('/linguagem/{id}', function (Request $request, Response $response) use ($app) {

    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $linguagensRepository = $entityManager->getRepository('App\Models\Entity\Linguagem');
    $linguagens = $linguagensRepository->find($id);   
    $entityManager->remove($linguagens);
    $entityManager->flush(); 

    $return = $response->withJson(['msg' => "Deletando o livro {$id}"], 204)->withHeader('Content-type', 'application/json');
    return $return;
});



$app->get('/book', function (Request $request, Response $response) use ($app) {

    $entityManager = $this->get('em');
    $booksRepository = $entityManager->getRepository('App\Models\Entity\Book');
    $books = $booksRepository->findAll();

    $return = $response->withJson($books, 200)
        ->withHeader('Content-type', 'application/json');
    return $return;
});

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

$app->post('/book', function (Request $request, Response $response) use ($app) {

    $params = (object) $request->getParams();

    $entityManager = $this->get('em');

    $book = (new Book())->setName($params->name)
        ->setAuthor($params->author);
    
    $entityManager->persist($book);
    $entityManager->flush();


    $return = $response->withJson($book, 201)
        ->withHeader('Content-type', 'application/json');
    return $return;
});

$app->put('/book/{id}', function (Request $request, Response $response) use ($app) {

    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $booksRepository = $entityManager->getRepository('App\Models\Entity\Book');
    $book = $booksRepository->find($id);   

    $book->setName($request->getParam('name'))
        ->setAuthor($request->getParam('author'));

    $entityManager->persist($book);
    $entityManager->flush();        

    
    $return = $response->withJson($book, 200)
        ->withHeader('Content-type', 'application/json');
    return $return;
});

$app->delete('/book/{id}', function (Request $request, Response $response) use ($app) {

    $route = $request->getAttribute('route');
    $id = $route->getArgument('id');

    $entityManager = $this->get('em');
    $booksRepository = $entityManager->getRepository('App\Models\Entity\Book');
    $book = $booksRepository->find($id);   
    $entityManager->remove($book);
    $entityManager->flush(); 

    $return = $response->withJson(['msg' => "Deletando o livro {$id}"], 204)
        ->withHeader('Content-type', 'application/json');
    return $return;
});






$app->run();