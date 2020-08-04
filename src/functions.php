<?php
/**
 * OriginPHP Framework
 * Copyright 2018 - 2020 Jamiel Sharief.
 *
 * Licensed under The MIT License
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * @copyright   Copyright (c) Jamiel Sharief
 * @link        https://www.originphp.com
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */
use Origin\Collection\Collection;

/**
 * Returns a Collection object using the array (can be any array or array of objects)
 *
 * @param array $items
 * @return \Origin\Collection\Collection
 */
function collection($items): Collection
{
    return new Collection($items);
}
