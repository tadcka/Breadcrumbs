<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Breadcrumbs\Tests;

use Tadcka\Component\Breadcrumbs\Breadcrumb;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 10/30/14 11:29 PM
 */
class BreadcrumbTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Breadcrumb
     */
    private $breadcrumb;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->breadcrumb = new Breadcrumb();
    }

    /**
     * Test empty breadcrumb.
     */
    public function testEmpty()
    {
        $count = 0;
        foreach ($this->breadcrumb as $item) {
            $count++;
        }

        $this->assertEquals(0, $count);
    }

    /**
     * Test breadcrumb add method.
     */
    public function testAdd()
    {
        $this->breadcrumb->add('title_0', 'url_0');
        $this->breadcrumb->add('title_1', 'url_1');
        $this->breadcrumb->add('title_2', 'url_2');

        $count = 0;
        foreach ($this->breadcrumb as $key => $item) {
            $count++;

            $this->assertEquals('title_' . $key, $item['title']);
            $this->assertEquals('url_' . $key, $item['url']);
        }

        $this->assertEquals(3, $count);
    }
}
