<?php namespace jtk\simplePhpCache;

class ArrayCache extends Cache
{
  /** @var array */
  private $array;


  /**
   * @param array $array
   */
  public function __construct(&$array)
  {
    $this->array = &$array;
  }

  /**
   * @param string $identifier
   * @return mixed
   */
  public function get($identifier)
  {
    return $this->array[$identifier];
  }

  /**
   * @param string $identifier
   * @return boolean
   */
  public function has($identifier)
  {
    return isset($this->array[$identifier]);
  }

  /**
   * @param string $identifier
   * @param mixed $data
   * @return mixed
   */
  public function set($identifier, $data)
  {
    return $this->array[$identifier] = $data;
  }

  public function clear()
  {
    $this->array = [];
  }
}