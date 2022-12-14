<?php
/*
 * This file is part of the Yii Boot package.
 *
 * (c) niqingyang <niqy@qq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yiiboot\Attributed\Tests\TestModel;

use Yiiboot\Attributed\Tests\TestModel\Attribute\ClassAttribute;
use Yiiboot\Attributed\Tests\TestModel\Attribute\MethodAttribute;
use Yiiboot\Attributed\Tests\TestModel\Attribute\PropertyAttribute;

#[ClassAttribute('Book class')]
class Book
{
    #[PropertyAttribute('name property')]
    public string $name = '';

    #[MethodAttribute('setName method')]
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
