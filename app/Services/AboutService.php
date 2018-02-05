<?php

namespace App\Services;

use App\Models\About;

class AboutService
{
    protected $model;

    public function __construct(About $model)
    {
        $this->model = $model;
    }

    public function getListAbout($adminFlag = false)
    {
        if ($adminFlag) {
            return About::paginate(10);
        }

        $abouts = About::all();
        $data = [];
        foreach ($abouts as $about) {
            switch ($about->type) {
                case config('about.type.destiny'):
                    $data['destiny'] = $about;
                    break;
                case config('about.type.about'):
                    $data['abouts'][] = $about;
                    break;
                case config('about.type.passion'):
                    $data['passions'][] = $about;
                    break;
                default:
                    $data['stylists'][] = $about;
                    break;
            }
        }

        return $data;
    }
}
