<?php

namespace Modules\Booking\database\seeders;
use Illuminate\Database\Seeder;

class BookingTrainingMappingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booking_training_mapping')->delete();
        
        \DB::table('booking_training_mapping')->insert(array (
            0 => 
            array (
                'id' => 1,
                'booking_id' => 30,
                'date_time' => '2023-08-02 21:05:00',
                'training_id' => 2,
                'price' => 25.0,
                'duration' => '0:20',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 13:58:26',
                'updated_at' => '2023-08-01 13:58:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'booking_id' => 31,
                'date_time' => '2023-08-04 18:30:00',
                'training_id' => 4,
                'price' => 20.0,
                'duration' => '0:45',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 13:59:23',
                'updated_at' => '2023-08-01 13:59:23',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'booking_id' => 32,
                'date_time' => '2023-08-15 17:30:00',
                'training_id' => 9,
                'price' => 15.0,
                'duration' => '0:35',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 14:00:19',
                'updated_at' => '2023-08-01 14:00:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'booking_id' => 33,
                'date_time' => '2023-08-17 09:35:00',
                'training_id' => 3,
                'price' => 10.0,
                'duration' => '0:40',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 14:02:07',
                'updated_at' => '2023-08-01 14:02:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'booking_id' => 34,
                'date_time' => '2023-08-11 08:45:00',
                'training_id' => 8,
                'price' => 27.0,
                'duration' => '0:30',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 14:02:47',
                'updated_at' => '2023-08-01 14:02:47',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'booking_id' => 35,
                'date_time' => '2023-08-14 10:30:00',
                'training_id' => 7,
                'price' => 34.0,
                'duration' => '0:25',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 14:03:36',
                'updated_at' => '2023-08-01 14:03:36',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'booking_id' => 36,
                'date_time' => '2023-08-12 09:10:00',
                'training_id' => 6,
                'price' => 30.0,
                'duration' => '0:15',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 14:05:11',
                'updated_at' => '2023-08-01 14:05:11',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'booking_id' => 37,
                'date_time' => '2023-08-19 08:40:00',
                'training_id' => 1,
                'price' => 15.0,
                'duration' => '0:35',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-01 14:08:01',
                'updated_at' => '2023-08-01 14:08:01',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'booking_id' => 78,
                'date_time' => '2023-08-28 08:30:00',
                'training_id' => 2,
                'price' => 30.0,
                'duration' => '0:15',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 07:24:26',
                'updated_at' => '2023-08-26 07:24:26',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'booking_id' => 97,
                'date_time' => '2023-08-26 20:15:00',
                'training_id' => 8,
                'price' => 27.0,
                'duration' => '0:30',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 08:07:43',
                'updated_at' => '2023-08-26 08:07:43',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'booking_id' => 108,
                'date_time' => '2023-08-26 20:15:00',
                'training_id' => 7,
                'price' => 15.0,
                'duration' => '0:35',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 09:21:00',
                'updated_at' => '2023-08-26 09:21:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'booking_id' => 115,
                'date_time' => '2023-08-31 22:30:00',
                'training_id' => 3,
                'price' => 34.0,
                'duration' => '0:25',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 09:44:48',
                'updated_at' => '2023-08-26 09:44:48',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'booking_id' => 122,
                'date_time' => '2023-08-27 17:25:00',
                'training_id' => 5,
                'price' => 34.0,
                'duration' => '0:25',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 10:04:42',
                'updated_at' => '2023-08-26 10:04:42',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'booking_id' => 126,
                'date_time' => '2023-08-27 08:35:00',
                'training_id' => 9,
                'price' => 34.0,
                'duration' => '0:25',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 10:15:56',
                'updated_at' => '2023-08-26 10:15:56',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'booking_id' => 133,
                'date_time' => '2023-08-26 09:45:00',
                'training_id' => 4,
                'price' => 27.0,
                'duration' => '0:30',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 10:31:02',
                'updated_at' => '2023-08-26 10:31:02',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'booking_id' => 140,
                'date_time' => '2023-09-20 15:35:00',
                'training_id' => 7,
                'price' => 34.0,
                'duration' => '0:25',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 10:48:05',
                'updated_at' => '2023-08-26 10:48:05',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'booking_id' => 150,
                'date_time' => '2023-09-20 06:20:00',
                'training_id' => 2,
                'price' => 34.0,
                'duration' => '0:25',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 11:10:22',
                'updated_at' => '2023-08-26 11:10:22',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'booking_id' => 154,
                'date_time' => '2023-08-26 07:25:00',
                'training_id' => 3,
                'price' => 35.0,
                'duration' => '0:50',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 11:58:46',
                'updated_at' => '2023-08-26 11:58:46',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'booking_id' => 157,
                'date_time' => '2023-08-28 07:20:00',
                'training_id' => 1,
                'price' => 20.0,
                'duration' => '0:45',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 12:14:26',
                'updated_at' => '2023-08-26 12:14:26',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'booking_id' => 158,
                'date_time' => '2023-08-26 08:20:00',
                'training_id' => 6,
                'price' => 35.0,
                'duration' => '0:50',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 12:29:14',
                'updated_at' => '2023-08-26 12:29:14',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'booking_id' => 159,
                'date_time' => '2023-08-26 09:45:00',
                'training_id' => 4,
                'price' => 10.0,
                'duration' => '0:40',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 12:32:50',
                'updated_at' => '2023-08-26 12:32:50',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'booking_id' => 160,
                'date_time' => '2023-08-27 17:40:00',
                'training_id' => 5,
                'price' => 40.0,
                'duration' => '0:55',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 12:34:46',
                'updated_at' => '2023-08-26 12:34:46',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'booking_id' => 161,
                'date_time' => '2023-08-28 10:40:00',
                'training_id' => 3,
                'price' => 34.0,
                'duration' => '0:25',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 12:37:57',
                'updated_at' => '2023-08-26 12:37:57',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'booking_id' => 163,
                'date_time' => '2023-08-26 08:20:00',
                'training_id' => 2,
                'price' => 27.0,
                'duration' => '0:30',
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2023-08-26 12:40:33',
                'updated_at' => '2023-08-26 12:40:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}