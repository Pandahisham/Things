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
	 * String, The name of the Thing.
	 *
	 * @var string
	 */

	public $name = '';

	/**
	 *  String, A short description of the Thing.
	 *
	 * @var string
	 */

	public $description = '';

	/**
	 * String, URL of the Thing.
	 *
	 * @var string
	 */

	public $url = '';

	/**
	 * String, URL of an image of the Thing.
	 *
	 * @var string
	 */

	public $image = '';

	/**
	 * Array, list of all properties of the Thing
	 *
	 * @var string
	 */

	public $properties = array();

	/**
	 * Construct a new a Thing
	 *
	 * @param  string   $schema
	 * @param  string   $tag
	 * @param  string   $name
	 * @param  string   $description
	 * @param  string   $url
	 * @param  string   $image
	 */

	function __construct($schema, $tag, $name, $description, $url, $image)
	{
		$this->schema 		= $schema;
		$this->tag 			= $tag;
		$this->name 		= $name;
		$this->description 	= $description;
		$this->url 			= $url;
		$this->image 		= $image;
	}

	/**
	 * Make a new a Thing
	 *
	 * @param  string   $schema
	 * @param  string   $tag
	 * @param  string   $name
	 * @param  string   $description
	 * @param  string   $url
	 * @param  string   $image
	 * @return Thing
	 */
	
	static function make($schema = '', $tag = '', $name = '', $description = '', $url = '', $image = '')
	{
		return new Thing($schema, $tag, $name, $description, $url, $image);
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
			'name' => $this->name,
			'description' => $this->description,
			'url' => $this->url,
			'image' => $this->image,
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