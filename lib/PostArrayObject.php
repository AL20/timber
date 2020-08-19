<?php

namespace Timber;

/**
 * PostArrayObject class for dealing with arbitrary collections of Posts
 * (typically not wrapping a `WP_Query` directly, which is what `Timber\PostQuery` does).
 *
 * @api
 */
class PostArrayObject extends \ArrayObject implements PostCollectionInterface {
	/**
	 * @inheritdoc
	 */
	public function pagination(array $options = []) {
		return null;
	}

	/**
	 * @inheritdoc
	 */
	public function to_array() : array {
		return $this->getArrayCopy();
	}
}