<?php namespace Things;

/**
 * Things - a html schema generator for semantic markup (based on Schema.org)
 *
 * @category    Bundle
 * @package     Things
 * @author      Jeroen Gerits <me@jeroengerits.nl>
 * @license 	MIT License <http://www.opensource.org/licenses/mit>
 * @copyright   2012 Jeroen Gerits
 * 
 * @see 		http://giturlhere.com
 */

class Property
{

	/**
	 * Create new Property
	 *
	 * @param  string 	$property
	 * @param  string  	$value
	 * @param  string  	$tag
	 */
	function __construct($property, $value, $tag)
	{
		$this->property = $property;
		$this->value = $value;
		$this->tag = $tag;
	}

}