<?php

/**
 * DframeFramework
 * Copyright (c) Sławomir Kaleta.
 *
 * @license https://github.com/dframe/dframe/blob/master/LICENCE (MIT)
 */

namespace Dframe\Router\Exceptions;

use Exception;

/**
 * RouterException Class.
 *
 * @author Sławomir Kaleta <slaszka@gmail.com>
 */
class RouterException extends Exception
{
   /**
   * RouterException constructor.
   *
   * @param string      $message
   * @param int       $code
   * @param Exception|null $previous
   */
   public function __construct($message = "", $code = 0, Exception $previous = null)
   {
     parent::__construct($message, $code, $previous);
   }
}
