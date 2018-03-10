<?php
declare (strict_types =1);

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
  {
    private $CI;
    private $Task;
    public function setUp()
    {
      // Load CI instance normally
      $this->CI = &get_instance();
      $this->CI->load->model('task_entity');
      $this->Task = new Task_entity();
    }
    public function testAgeSetter()
    {
                $expected = 27;
                $this->Task->age = 27;
                $this->assertEquals(27,$this->Task->age);
    }
  }