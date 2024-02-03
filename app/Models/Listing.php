<?php

namespace App\Models;

class Listing
{
    /**
     * @return array<int,array<string,mixed>>
     */
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Evan'
            ],
            [
                'id' => 2,
                'name' => 'Ella'
            ],
            [
                'id' => 3,
                'name' => 'Ken'
            ],


        ];
    }
    /**
     * @param number $id
     * @return array<string,mixed>
     */
    public static function find($id): array
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
