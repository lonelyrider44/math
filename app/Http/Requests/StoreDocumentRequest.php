<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'file' => 'required|file'
        ];
    }

    public function store_file(){
        // $path = $this->file('file')->store('avatars');
        $file = $this->file('file');
        $name = $file->getClientOriginalName();
        // $extension = $file->getClientOriginalExtension();
        // $path = "avatars/$name.$extension";
        $path = $file->storeAs('avatars', $name, 'public');
        // $path = $request->file('avatar')->store(
        //     'avatars/'.$request->user()->id, 's3'
        // );
        $this->merge([
            'filename' => $path
        ]);
 
        return $path;
    }
}
