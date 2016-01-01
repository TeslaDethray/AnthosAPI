<?php

/**
 * @author Sara McCutcheon
 */
namespace Cake\View\Helper;

use Cake\Core\App;
use Cake\Core\Exception\Exception;
use Cake\View\Helper;
use Cake\View\View;

/**
 * Binary helper library.
 *
 * Methods to translate numbers to and from various bases.
 */
class BinaryHelper extends Helper {
  /**
   * @var int Base to convert to or from.
   */
  protected $_base;

  /**
   * Default Constructor
   *
   * ### Settings:
   *
   * @param \Cake\View\View $View The View this helper is being attached to.
   * @param array $config Configuration settings for the helper
   * @throws \Cake\Core\Exception\Exception When the engine class could not be found.
   */
  public function __construct(View $View, array $config = []) {
    parent::__construct($View, $config);

    $this->_base = 2;
  }

  /**
   * Formats a decimal number to binary
   *
   * @param int $binary The given number in binary.
   * @param int $digits The precision of the returned number.
   *
   * @return string Binary number
  */
  public function toBinary($number, $digits = 4) {
    $binary = '';
    do {
      $binary = fmod($number, $this->_base) . $binary;
      $number = floor(($number / $this->_base));
    } while ($number > 1); 
    $binary = $number . $binary;
    while (strlen($binary) < $digits) {
      $binary = '0' . $binary;
    }
    return $binary;
  }

}
