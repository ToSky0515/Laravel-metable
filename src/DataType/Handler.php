<?php

namespace Plank\Metable\DataType;

interface Handler
{
	/**
	 * Return the identifier for the datatype being handled.
	 * @return string
	 */
	public function getDataType() : string;

	/**
	 * Determine if the value is of the correct type for this handler.
	 * @param  mixed $value
	 * @return boolean
	 */
	public function canHandleValue($value) : bool;

	/**
	 * Convert the value to a string, which can be stored in the database.
	 * @param  mixed $value
	 * @return string
	 */
	public function serializeValue($value) : string;

	/**
	 * Convert a serialized string back to its original value.
	 * @param  string $serializedValue
	 * @return mixed
	 */
	public function unserializeValue(string $serializedValue);
}