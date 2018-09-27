<?php

namespace Gedmo\Sortable;

/**
 * This interface is necessary for Entities which in some cases need to be
 * marked as externally sorted so their positions don't get auto-altered by
 * SortableListener
 *
 * @author Martin Georgiev <martin.georgiev@gmail.com>
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
interface ExternallySortable extends Sortable
{
    /**
     * @return bool
     */
    public function isSortedExternally();
}
