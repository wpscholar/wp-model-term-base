<?php

namespace wpscholar\WordPress;

/**
 * Class TermModelBase
 *
 * @package wpscholar\WordPress
 */
abstract class TermModelBase {

	const TAXONOMY = null;

	/**
	 * @var \WP_Term
	 */
	public $term;

	/**
	 * TermModelBase constructor.
	 *
	 * @param \WP_Term $term
	 */
	public function __construct( \WP_Term $term ) {
		if ( $term->taxonomy !== static::TAXONOMY ) {
			throw new \InvalidArgumentException( 'Invalid taxonomy!' );
		}
		$this->term = $term;
	}

}