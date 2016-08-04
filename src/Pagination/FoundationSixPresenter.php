<?php namespace Foundation\Pagination;

use Illuminate\Pagination\BootstrapThreePresenter;

class FoundationSixPresenter extends BootstrapThreePresenter
{
	use FoundationSixNextPreviousButtonRendererTrait;

	/**
	 * Get HTML wrapper for active text.
	 *
	 * @param  string  $text
	 * @return string
	 */
	protected function getActivePageWrapper($text)
	{
		return '<li class="current">'.$text.'</li>';
	}

	/**
	 * Convert the URL window into Bootstrap HTML.
	 *
	 * @return string
	 */
	public function render()
	{
		if ($this->hasPages())
		{
			return sprintf(
				'<ul class="pagination" aria-label="Pagination">%s %s %s</ul>',
				$this->getPreviousButton(),
				$this->getLinks(),
				$this->getNextButton()
			);
		}

		return '';
	}
}