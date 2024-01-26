<?php
/**
 * @author arcangel <jsh24.rcngl@gmail.com>
 * @package ArcangelWeb
 * @version 1.0.0
 * @link https://www.example.com
 */

namespace Arcangel\Interfaces;

interface CallbackHandlerInterface
{
    /**
    * -----------------------------------
    * Execute the callback handler
    * Returns the result of the executed callback
    * -----------------------------------
    */
    public function execute($params);

    /**
    * -----------------------------------
    * Check if the callback handler has parameters
    * Returns true if the callback handler has parameters, otherwise false
    * -----------------------------------
    */
    public function hasParameter() : bool;

    /**
    * -----------------------------------
    * Get the callback handler parameters
    * Returns the callback handler parameters
    * -----------------------------------
    */
    public function getCallbackParameters();

    public function isCallable() : bool;

    public function reIntantiateUsingMethod($method);

    public function getMethod();

}
