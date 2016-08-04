<?php

namespace Foundation;

use Foundation\Pagination\FoundationSixPresenter;
use Foundation\Pagination\SimpleFoundationSixPresenter;

class Factory {

	/**
	 * @param $records
	 * @return FoundationSixPresenter
	 */
	public function paginate($records)
	{
		return new FoundationSixPresenter($records);
	}
}