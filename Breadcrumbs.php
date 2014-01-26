<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Breadcrumbs;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.lt>
 *
 * @since 1/26/14 5:19 PM
 */
class Breadcrumbs
{
    /**
     * Breadcrumbs items.
     *
     * @var array
     */
    private $items = array();

    /**
     * @var bool
     */
    private $useHomePage = true;

    /**
     * Get parts.
     *
     * @return array
     */
    public function getParts()
    {
        return $this->items;
    }

    /**
     * Set parts.
     *
     * @param array $parts
     *
     * @return Breadcrumbs
     */
    public function setParts($parts)
    {
        $this->items[] = $parts;

        return $this;
    }

    /**
     * Add element to breadcrumb.

     * @param string $title
     * @param string $url
     * @param bool $truncate
     *
     * @return Breadcrumbs
     */
    public function add($title, $url = '', $truncate = true)
    {
        $this->items[] = array(
            'url' => $url,
            'title' => $truncate ? $this->truncate($title) : $title,
        );

        return $this;
    }

    /**
     * Truncate.
     *
     * @param string $value
     * @param int $length
     * @param string $separator
     *
     * @return string
     */
    private function truncate($value, $length = 30, $separator = '...')
    {
        if (mb_strlen($value) > $length) {

            return rtrim(mb_substr($value, 0, $length)) . $separator;
        }

        return $value;
    }

    /**
     * Set useHomePage.
     *
     * @param boolean $useHomePage
     *
     * @return Breadcrumbs
     */
    public function setUseHomePage($useHomePage)
    {
        $this->useHomePage = $useHomePage;

        return $this;
    }

    /**
     * Get useHomePage.
     *
     * @return boolean
     */
    public function getUseHomePage()
    {
        return $this->useHomePage;
    }
}
