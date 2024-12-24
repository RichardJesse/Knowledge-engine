<?php 
namespace App\Services;


use BadMethodCallException;

abstract class AbstractService {

    public static function __callStatic($name, $arguments)
    {
        if(!method_exists(static::class, "__$name")) throw new BadMethodCallException();
        return (new static())->{"__$name"}(...$arguments);
    }

    public static function new(...$args): static {
        return new static(...$args);
    }
}