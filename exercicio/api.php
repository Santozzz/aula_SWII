<?php
    header('Content-Type: application/json');
    include 'conect.php';

    $method = $_SERVER['REQUEST_METHOD'];

    // echo json_encode ($method);
    $url = $_SERVER['REQUEST_URI'];
    
    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');
    
    $path_parts = explode('/', $path);
    
    $firstpart = isset($path_parts[0]) ? $path_parts[0] : '';
    $secondpart = isset($path_parts[1]) ? $path_parts[1] : '';
    $thirdpart = isset($path_parts[2]) ? $path_parts[2] : '';
    $fourthpart = isset($path_parts[3]) ? $path_parts[3] : '';
    
    $resp = [
        'method' => $method,
        'firstpart' => $firstpart,
        'secondpart' => $secondpart,
        'thirdpart' => $thirdpart,
        'fourthpart' => $fourthpart,
    ];

    // echo json_encode($resp);
    
    switch($method){
        case 'GET':
            if($thirdpart == 'alunos' && $fourthpart == ''){
                echo json_encode([
                    'mensagem'=>'LISTA DE TODOS OS ALUNOS'
                ]);
            }
            elseif ($thirdpart == 'alunos' && $fourthpart !== '') {
                echo json_encode([
                    'mensagem'=>'LISTA DE UM ALUNO',
                    'id_aluno'=>$fourthpart,
                ]);
            }
            elseif($thirdpart == 'cursos' && $fourthpart == ''){
                echo json_encode([
                    'mensagem'=>'LISTA DE TODOS OS CURSOS'
                ]);
            }
            elseif($thirdpart == 'cursos' && $fourthpart !== ''){
                echo json_encode([
                    'mensagem'=>'LISTA DE UM CURSOS',
                    'id_curso'=>$fourthpart,
                ]);
            }
            break;;
        case 'POST':
            break;
        case 'PUT':
            break;
        case 'DELETE':
            break;
        default:
            echo json_encode([
                'mensagem'=>'Método não permitido!'
            ]);
            break;
    }
?>