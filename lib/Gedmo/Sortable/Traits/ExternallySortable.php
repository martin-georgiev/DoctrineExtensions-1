<?php

namespace Gedmo\Sortable\Traits;

/**
 * ExternallySortable Trait, usable with PHP >= 5.4
 *
 * @author Martin Georgiev <martin.georgiev@gmail.com>
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
trait ExternallySortable
{
    /**
     * @return bool
     */
    private $sortedExternally = false;

    /**
     * @return bool
     */
    public function isSortedExternally()
    {
        return $this->sortedExternally;
    }

    /**
     * @param bool $sortedExternally
     *
     * @return self
     */
    public function setSortedExternally($sortedExternally)
    {
        if (!is_bool($sortedExternally)) {
            throw new \InvalidArgumentException(
                'Entity can only be marked as sorted or not sorted externally, argument must therefore be boolean, %s given',
                gettype($sortedExternally)
            );
        }

        $this->sortedExternally = $sortedExternally;

        return $this;
    }
}
