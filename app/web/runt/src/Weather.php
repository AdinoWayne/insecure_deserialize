<?php
namespace UnserializeDemo;

/**
 * Class VulnerableClass
 * @package UnserializeDemo
 */
class Weather
{
    /**
     * The name of the file where we store cached data
     */
    const CACHE_FILENAME = 'cache.data';

    /**
     * How old the cache may be before we refresh the data from source, in seconds
     */
    const MAX_AGE_SECONDS = 86400;

    /**
     * @var string
     */
    public $weatherData;

    /**
     * VulnerableClass constructor.
     */
    public function __construct()
    {
        $cacheFileExists = file_exists(self::CACHE_FILENAME);

        $cacheFileIsStale = $cacheFileExists && time() - filemtime(self::CACHE_FILENAME) > self::MAX_AGE_SECONDS;

        if (!$cacheFileExists || $cacheFileIsStale) {

            $this->refreshCache();

        }

        $this->weatherData = $this->readFromCache();

     }

    /**
     * Fetch the data from the source, assume that this involves network I/O
     * by making a call to api.openweathermap.org/data/2.5/weather?q=London
     * or to some similar service that we want to cache for performance.
     *
     * @return string
     */
    private function fetchData(): string
    {
        // this is a stub of an expensive network call
        return "absolutely lovely";
    }

    /**
     * Write data to the cache file to be retrieved in later calls
     *
     * @param string $data
     */
    private function writeDataToCache(string $data): void
    {
        file_put_contents(self::CACHE_FILENAME, $data);
    }

    /**
     * Return data out of the cache file
     *
     * @return string
     */
    private function readFromCache(): string
    {
        return file_get_contents(self::CACHE_FILENAME);
    }

    /**
     *  Read the data from source and store it in the cache file
     */
    private function refreshCache(): void
    {
        $data = $this->fetchData();

        $this->writeDataToCache($data);

        $this->weatherData = $data;
    }

    /**
     * This method makes the class vulnerable to insecure deserialization
     */
    public function __destruct()
    {
        $this->writeDataToCache($this->weatherData);
    }
}