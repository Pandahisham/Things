<?php namespace Things;

use View;

/**
 * Things - a html schema generator for semantic markup (based on Schema.org)
 *
 * @category    Bundle
 * @package     Things
 * @author      Jeroen Gerits <me@jeroengerits.nl>
 * @license 	MIT License <http://www.opensource.org/licenses/mit>
 * @copyright   2012 Jeroen Gerits
 * 
 * @see 		https://github.com/jeroengerits/Things
 */

class Thing
{

	/**
	 * String, the schema of the Thing
	 *
	 * @var string
	 */

	public $schema = '';

	/**
	 * String, The tag of the Thing.
	 *
	 * @var string
	 */

	public $tag = '';


	public $properties = array();

	/**
	 * Construct a new a Thing
	 *
	 * @param  string   $schema
	 * @param  string   $tag
	 */

	function __construct($schema, $tag)
	{
		$this->schema 		= $schema;
		$this->tag 			= $tag;
	}

	/**
	 * Make a new a Thing
	 *
	 * @param  string   $schema
	 * @param  string   $tag
	 * @return Thing
	 */
	
	static function make($schema = '', $tag = '')
	{
		return new Thing($schema, $tag);
	}

	/**
	 * Add an property to a Thing
	 *
	 * @param  string   $property
	 * @param  string   $value
	 * @return Thing
	 */
	function add($property = '', $value = '', $tag = '')
	{
		$this->properties[] = new Property($property, $value, $tag);
		return $this;
	}

	/**
	 * Renders the Thing
	 *
	 * @return string
	 */
	function get()
	{
		$data = array(
			'schema' => $this->schema,
			'tag' => $this->tag,
			'properties' => $this->properties
		);

		return View::make('Things::thing', $data)->render();
	}
}

class Property
{

	/**
	 * String, the Property
	 *
	 * @var string
	 */

	public $property = '';

	/**
	 * String, The value of the Property.
	 *
	 * @var string
	 */

	public $value = '';

	/**
	 *  String, The tag of the Property.
	 *
	 * @var string
	 */

	public $tag = '';

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