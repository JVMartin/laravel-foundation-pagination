<?php
/**
 * @copyright (c) 2016 Jacob Martin
 * @license MIT https://opensource.org/licenses/MIT
 */

namespace Foundation\Pagination;

use Illuminate\Pagination\BootstrapThreePresenter;

class FoundationSixPresenter extends BootstrapThreePresenter
{
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

	/**
	 * Get the previous page pagination element.
	 *
	 * @param  string  $text
	 * @return string
	 */
	public function getPreviousButton($text = 'Previous')
	{
		// If the current page is less than or equal to one, it means we can't go any
		// further back in the pages, so we will render a disabled previous button
		// when that is the case. Otherwise, we will give it an active "status".
		if ($this->paginator->currentPage() <= 1) {
			return '<li class="pagination-previous disabled">' . $text . '</li>';
		}

		$url = $this->paginator->url(
			$this->paginator->currentPage() - 1
		);

		return '<li class="pagination-previous"><a href="' . $url . '">' . $text . '</a></li>';
	}

	/**
	 * Get the next page pagination element.
	 *
	 * @param  string  $text
	 * @return string
	 */
	public function getNextButton($text = 'Next')
	{
		// If the current page is greater than or equal to the last page, it means we
		// can't go any further into the pages, as we're already on this last page
		// that is available, so we will make it the "next" link style disabled.
		if (! $this->paginator->hasMorePages()) {
			return '<li class="pagination-next disabled">' . $text . '</li>';
		}

		$url = $this->paginator->url($this->paginator->currentPage() + 1);

		return '<li class="pagination-next"><a href="' . $url . '">' . $text . '</a></li>';
	}

	/**
	 * Get a pagination "dot" element.
	 *
	 * @return string
	 */
	protected function getDots()
	{
		return '<li class="ellipsis"></li>';
	}
}