<?php

namespace Drupal\alps_weather;

/**
 * Interface WeatherClientInterface provides methods to get weather data.
 */
interface WeatherClientInterface {

  /**
   * Get forecast data.
   *
   * @param string $city
   *   The city name.
   *
   * @return array
   *   The weather data.
   */
  public function getForecastData(string $city): array;

  /**
   * Defines getForecastDetail interface vars and method.
   *
   * @param string $city
   *   Sets city type.
   * @param string $date
   *   Sets date type.
   *
   * @return array
   *   Defines return type.
   */
  public function getForecastDetail(string $city, string $date): array;

}
