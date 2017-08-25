<?php
namespace Loevgaard\DandomainFoundationBundle;

use Loevgaard\DandomainFoundationBundle\DateTime\DateTimeImmutable;

/**
 * Return a \DateTime|\DateTimeImmutable object based on a json string, i.e. '/Date(1484759471000+0100)/'
 *
 * @param string $date
 * @param bool $immutable
 * @return DateTimeImmutable
 */
function jsonDateToDate($date) {
    preg_match('/([0-9]+)\+/', $date, $matches);
    if(!isset($matches[1])) {
        throw new \InvalidArgumentException('$date is not a valid JSON date. Input: ' . $date);
    }
    // remove the last three digits since the json date is given in milliseconds
    $timestamp = substr($matches[1], 0, -3);

    // timestamps will always be given in the UTC time zone
    return DateTimeImmutable::createFromTimestamp('@' . $timestamp);
}