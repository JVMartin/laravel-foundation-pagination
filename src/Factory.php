<?php
/**
 * @copyright (c) 2016 Jacob Martin
 * @license MIT https://opensource.org/licenses/MIT
 */

namespace Foundation;

use Foundation\Pagination\FoundationSixPresenter;
use Foundation\Pagination\SimpleFoundationSixPresenter;

class Factory
{
	/**
	 * @param $records
	 * @return FoundationSixPresenter
	 */
	public function paginate($records)
	{
		return new FoundationSixPresenter($records);
	}
}