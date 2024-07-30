<?php

namespace Microthunder\Laragen\Tests;

use Orchestra\Testbench\Concerns\CreatesApplication;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
  use CreatesApplication;
}
