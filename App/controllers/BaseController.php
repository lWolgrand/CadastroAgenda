<?php

namespace App\controllers;

/**
 * Class BaseController
 * @package App\Http\Controller
 */
class BaseController
{
  /**
   * @return array    
   */
  protected function getParams(): array
  {
    return $_GET;
  }
  /**
   * @param string $key
   * 
   * @return mixed|null
   */
  protected function getParam(string $key)
  {
    return $_GET[$key] ?? null;
  }

  /**
   * @return array
   */
  protected function getPost(): array
  {
    return $_POST;
  }

  /**
   * @param string $key 
   * 
   * @return mixed|null
   */
  protected function getInput(string $key)
  {
    return $_POST[$key] ?? null;
  }

  protected function redirect(String $url)
  {
    header('Location: '.$url);  
    exit;
      
  }
}