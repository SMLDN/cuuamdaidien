<?php
namespace Aloha\Utility;

use Aloha\Utility\Str;
use Illuminate\Support\Collection;

class CollectionUtil
{
    /**
     * To Array Camel
     *
     * @param Collection $object
     * @return void
     */
    public static function toArrayCamel(Collection $object, array $excludes = [], array $relations = [])
    {
        $camelArray = [];
        $items = $object->all();
        return self::arrayToArrayCamel($items, $excludes, $relations);
    }

    public static function toArrayCamelWithTimestamp(Collection $object, array $excludes = [], array $relations = [])
    {
        $camelArray = [];
        $items = $object->all();
        $newItems = [];
        foreach ($items as $item) {
            if ($item->createdAt != null) {
                $item->postedAt = $item->createdAt->getTimestamp();
            }
            array_push($newItems, $item);
        }
        return self::arrayToArrayCamel($newItems, $excludes, $relations);
    }

    public static function camel(array $items)
    {
        $camelArray = [];
        foreach ($items as $item) {
            $camel = [];
            foreach ($item as $key => $value) {
                $camel[Str::camel($key)] = $value;
            }
            array_push($camelArray, $camel);
        }
        return $camelArray;
    }

    public static function arrayToArrayCamel(array $items, array $excludes = [], array $relations = [])
    {
        $camelArray = [];
        foreach ($items as $item) {
            $camelItem = $item->toArrayCamelWithExclude($excludes);
            foreach ($relations as $r) {
                // dd($item->{$r}->toArrayCamel());
                if ($item->{$r}) {
                    if($item->{$r} instanceof Collection){
                        $i = 0;
                        foreach($item->{$r} as $atom){
                            $camelItem[$r][$i++] = $atom->toArrayCamel();    
                        }
                    } else {
                        $camelItem[$r] = $item->{$r}->toArrayCamel();
                    }
                }
                continue;
            }
            \array_push($camelArray, $camelItem);
        }
        return $camelArray;
    }

    public static function arrayToArrayCamelByPaginator($paginator, array $excludes = [], array $relations = [])
    {
        return self::arrayToArrayCamel($paginator->items(), $excludes, $relations);
    }
}