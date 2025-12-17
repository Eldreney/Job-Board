<?php

namespace App\Models;



class Job 
{
    public static function all()
    {
        return [
            ['title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'New York, NY'],
            ['title' => 'Web Developer', 'company' => 'Web Solutions', 'location' => 'San Francisco, CA'],
            ['title' => 'Data Analyst', 'company' => 'Data Insights', 'location' => 'Chicago, IL'],
        ];
    }

}
