<?php 

namespace Whitecube\NovaPage\Exceptions;

use Exception;

class TemplateNotFoundException extends Exception
{

    /**
     * Define the Exception
     *
     * @param string $template
     * @param string $name
     * @param int $code
     * @param Exception $previous
     */
    public function __construct($template, $name = null, $code = 0, Exception $previous = null) {
        $message = 'Unable to use unregistered NovaPage Template "' . $template . '"';

        if($name) {
            $message .= ' for "' . $name . '"';
        }

        $message .= '.';

        parent::__construct($message, $code, $previous);
    }

}