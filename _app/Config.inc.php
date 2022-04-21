<?php
require_once __DIR__ . '/ENV.php';
//require_once '_app/ENV.example.php';


function MyAutoLoad($Class) {
    $cDir = ['Conn', 'Helpers', 'Model'];
    $iDir = null;
    foreach($cDir as $dirName) {
        $File = __DIR__ . '/' . $dirName . '/' . $Class. '.class.php'; // Nome.class.php
        if(!$iDir && file_exists($File) && !is_dir($File)) {
            include_once($File); 
            $iDir = true;                                        
        }
    }
}


spl_autoload_register('MyAutoLoad'); // chamando as classes do meu projeto;

/** Personaliza o gatilho do PHP e salva no banco de dados para ser enviado ao desenvolvedor futuramente
 * @param string $ErrNo
 * @param string $ErrMsg
 * @param string $ErrFile
 * @param string $ErrLine
 */
function error_handler($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    echo "<div class='alert alert-danger'> {$ErrMsg} - {$ErrFile}: {$ErrLine}</div>";
}

/** Personaliza o gatilho do PHP e salva no banco de dados para ser enviado ao desenvolvedor futuramente
 * @param array $exception - Contendo os dados do erro
 */
function exception_handler($exception) {
    echo "<div class='alert alert-danger alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>{$exception->getCode()} - {$exception->getMessage()} - {$exception->getFile()}:{$exception->getLine()}</div>";
}

function Error ($Error, $type = 'success') {
    echo "<div class='alert alert-{$type}'>{$Error}</div>";
}

set_error_handler('error_handler');
set_exception_handler('exception_handler');