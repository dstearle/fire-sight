<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Form validation
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required',

        ]);

        // Handle File Upload
        if($request->hasFile('profile_picture')) {

            // Get filename with the extension
            $filenameWithExt = $request->file('profile_picture')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('profile_picture')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // Upload the image
            $path = $request->file('profile_picture')->storeAs('public/profile_picture', $fileNameToStore);

        }

        // Update user
        $user = User::find($id);

        // Input fields
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Checks to see if a new image has been uploaded
        if($request->hasFile('profile_picture')) {

            $user->profile_picture = $fileNameToStore;

        };
        $user->save();

        return redirect('/settings')->with('success', 'Profile Updated');
    }
}
