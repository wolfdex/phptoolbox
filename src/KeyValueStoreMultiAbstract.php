<?php

abstract class KeyValueStoreMultiAbstract
{
    /**
     * @var array $Values The array that stores the key-value pairs
     */
    protected array $Values = [];

    /**
     * Add a key-value pair to the array
     *
     * @param string $key The key
     * @param mixed $value The value
     */
    abstract public function addKeyValuePair(string $key, $value): void;

    /**
     * Add an array to the current array
     *
     * @param array $arr The array to be added
     */
    abstract public function addArray(array $arr): void;

    /**
     * Get the value of specific key
     *
     * @param string $key The key
     * @param string[] $keys The subkeys used to access the multidimensional array
     * @return mixed|null The value of the key, or null if the key does not exist
     */
    abstract public function getValue(string $key, string ...$keys);

    /**
     * Remove a key-value pair from the array
     *
     * @param string $key The key
     * @param string[] $keys The subkeys used to access the multidimensional array
     */
    abstract public function removeKeyValuePair(string $key, string ...$keys): void;

    /**
     * Check if a key-value pair exists in the array
     *
     * @param string $key The key
     * @param string[] $keys The subkeys used to access the multidimensional array
     * @return bool True if the key exists, false otherwise
     */
    abstract public function hasKeyValuePair(string $key, string ...$keys): bool;
}
