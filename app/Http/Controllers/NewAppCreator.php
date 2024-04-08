<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class NewAppCreator extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
         $newAppRoot = '/'; // Change this to the desired root folder

        // Name of the new Laravel application
        $appName = 'newapp'; // Change this to the desired app name

        // Shell script to create a new Laravel app
        $script = base_path("chmod +x create_laravel_app.sh");
        //$script = "/path/to/your/create_laravel_app.sh $newAppRoot $appName"; // Change this to the path of your shell script

        $process = new Process(['chmod', '+x' , $script,null,$appName]);
        $process->run();

        $output = $process->getOutput().  $process->getErrorOutput();
        //$output = shell_exec($script);

        // Check if the new app creation was successful
        if ($output === null) {
            //return "New Laravel app created successfully at $newAppRoot/$appName";
        } else {
            //return "Failed to create new Laravel app.";
        }
        dump($output);
        return view('siteEvent.create-new-app');
        #git clone run from terminal to clone the new app

        #git clone
        #cd newapp
        #composer install
        #npm install
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
