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

        // Name of the new Laravel application
        $appName = 'newapp'; // Change this to the desired app name

        // Shell script to create a new Laravel app
        $script = base_path("create_laravel_app.sh");

        $process = new Process([ $script,$appName]);
        $process->run();

        $output = $process->getOutput().  $process->getErrorOutput();
        $out = shell_exec("chmod -R 777 $appName");
        if($out){
            dump($out);
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
