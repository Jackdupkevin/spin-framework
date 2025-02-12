<?php declare(strict_types=1);

/**
 * RouteInterface
 *
 * @package  Spin
 */

namespace Spin\Core;

interface RouteInterface
{
  /**
   * Return Method
   *
   * @return     string
   */
  public function getMethod();

  /**
   * Return Path
   *
   * @return     string
   */
  public function getPath();

  /**
   * Return Handler
   *
   * @return     string
   */
  public function getHandler();
}
