<?php
if (PHP_SAPI==='cli') {
    class AppError extends ErrorHandler {
    }

} else {
    App::import('Vendor', 'FirePHP');
    App::import('Vendor', 'fb');

    if (Configure::read('debug')>0)
        FB::info('FirePHP PHP Engine Version ' . phpversion() . ' Cakephp Version ' . Configure::version());
    class AppError {
        public static function handleError($code, $description, $file = null, $line = null, $context = null) {
            $ErrorString = "$description en la l�nea $line en el archivo $file";
            switch ($code) {
                case E_ERROR :
                    FB::error($ErrorString, 'ERROR');
                    FB::error($context, 'ERROR');
                    break;
                case E_WARNING :
                    //FB::info(debug_backtrace());
                    FB::warn($ErrorString, 'WARNING');
                    break;
                case E_PARSE :
                    FB::error($ErrorString, 'PARSING ERROR');
                    FB::error($context, 'PARSING ERROR');
                    break;
                case E_NOTICE :
                    FB::info($ErrorString, 'NOTICE');
                    break;
                case E_CORE_ERROR :
                    FB::error($ErrorString, 'CORE ERROR');
                    FB::error($context, 'CORE ERROR');
                    break;
                case E_CORE_WARNING :
                    FB::warn($ErrorString, 'CORE WARNING');
                    break;
                case E_COMPILE_ERROR :
                    FB::error($ErrorString, 'ERROR');
                    FB::error($context, 'ERROR');
                    break;
                case E_COMPILE_WARNING :
                    FB::warn($ErrorString, 'COMPILE WARNING');
                    break;
                case E_USER_ERROR :
                    FB::error($ErrorString, 'USER ERROR');
                    FB::error($context, 'USER ERROR');
                    break;
                case E_USER_WARNING :
                    FB::warn($ErrorString, 'USER WARNING');
                    break;
                case E_USER_NOTICE :
                    FB::info($ErrorString, 'USER NOTICE');
                    break;
                case E_STRICT :
                    FB::info($ErrorString, 'STRICT NOTICE');
                    break;
                case E_RECOVERABLE_ERROR :
                    FB::error($ErrorString, 'RECOVERABLE ERROR');
                    FB::error($context, 'RECOVERABLE ERROR');
                    break;
                default :
                    FB::error("Tipo de error desconocido: [$errno] $errstr", 'UNKNOWN ERROR');
                    break;
            }
        }

    }

}
