<?php

namespace App\Helper;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver; // Və ya Imagick\Driver

class imageUpload
{
    public static function singleUpload($name, $directory, $file)
    {
        if (!$file) {
            return null;
        }

        $rand = $name;
        $dir = 'images/' . $directory . '/' . $rand;
        $dirLarge = $dir . '/large';

        if (!File::exists(public_path($dir))) {
            File::makeDirectory(public_path($dir), 0755, true);
        }

        if (!File::exists(public_path($dirLarge))) {
            File::makeDirectory(public_path($dirLarge), 0755, true);
        }

        $filename = rand(1, 90000) . '.' . $file->getClientOriginalExtension();

        $smallPath = public_path($dir . '/' . $filename);
        $largePath = public_path($dirLarge . '/' . $filename);

        $manager = new ImageManager(new Driver()); // Imagick istəyirsənsə Driver() yerinə Imagick\Driver() yaz

        $manager->read($file->getRealPath())->resize(250, 250)->save($smallPath);
        $manager->read($file->getRealPath())->save($largePath);

        return $dir . '/' . $filename;
    }

    public static function singleUploadUpdate($name, $directory, $file,$data,$field)
    {
        if (!$file) {
            return null;
        }

        $rand = $name;
        $dir = 'images/' . $directory . '/' . $rand;
        $dirLarge = $dir . '/large';

        if (!File::exists(public_path($dir))) {
            File::makeDirectory(public_path($dir), 0755, true);
        }

        if (!File::exists(public_path($dirLarge))) {
            File::makeDirectory(public_path($dirLarge), 0755, true);
        }
        File::delete(public_path($data->field));

        $filename = rand(1, 90000) . '.' . $file->getClientOriginalExtension();

        $smallPath = public_path($dir . '/' . $filename);
        $largePath = public_path($dirLarge . '/' . $filename);

        $manager = new ImageManager(new Driver()); // Imagick istəyirsənsə Driver() yerinə Imagick\Driver() yaz

        $manager->read($file->getRealPath())->resize(250, 250)->save($smallPath);
        $manager->read($file->getRealPath())->save($largePath);

        return $dir . '/' . $filename;
    }
}

