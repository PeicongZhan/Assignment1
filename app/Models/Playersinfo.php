<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Playersinfo {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Lebron James',
            'birth'=>'1984-12-30',
            'height'=>'113.4kg',
            'weight'=>'2.06m',
            'nationality'=>'America',
            'team'=>'Lakers',
            'achievements'=>'4 times MVP, 4 times FMVP',
            'image' => 'LBJ.jpeg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Anthony Davis',
            'birth'=>'1993-3-11',
            'height'=>'100kg',
            'weight'=>'2.08m',
            'nationality'=>'America',
            'team'=>'Lakers',
            'achievements'=>'1 time championship, 7 times ALL-Star',
            'image' => 'Davis.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Dwight Howard',
            'birth'=>'1985-12-08',
            'height'=>'120kg',
            'weight'=>'2.11m',
            'nationality'=>'America',
            'team'=>'Lakers',
            'achievements'=>'1 time championship, 8 times ALL-Star',
            'image' => 'DW.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Rajon Rondo',
            'birth'=>'1986-2-22',
            'height'=>'77.6kg',
            'weight'=>'1.85m',
            'nationality'=>'America',
            'team'=>'Lakers',
            'achievements'=>'2 time championship, 4 times ALL-Star',
            'image' => 'RJ.jpeg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Danny Green',
             'birth'=>'1987-6-22',
            'height'=>'97.5kg',
            'weight'=>'1.98m',
            'nationality'=>'America',
            'team'=>'Lakers',
            'achievements'=>'3 time championship',
            'image' => 'Green.jpeg',
        ],
         '6' => [
            'id' => 6,
            'name' => 'Kyle Kuzma',
             'birth'=>'1995-7-24',
            'height'=>'100.2kg',
            'weight'=>'2.03m',
            'nationality'=>'America',
            'team'=>'Lakers',
            'achievements'=>'1 time championship',
            'image' => 'kuz.jpeg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
