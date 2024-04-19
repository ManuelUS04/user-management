<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;

class Usersmanagements extends Component
{
    public $users, $id, $name, $last_name, $phone, $email,$password;
    public $modal = false;
    protected $rules = [
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email',
        'password' => 'nullable|string|min:6',
        'phone' => 'nullable|string|max:20',
    ];
    public function render()
    {
        $this->users = User::all();
        return view('livewire.usersmanagements');
    }

    public function crear(){
        $this->clearForm();
        $this->openModal();
    }

    public function openModal(){
        $this->resetValidation();
        $this->modal = true;
    }
    public function closeModal(){
        $this->modal = false;
    }

    public function clearForm(){
        $this->id = '';
        $this->name = '';
        $this->last_name = '';
        $this->phone = '';
        $this->email = '';
        $this->password = '';
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $this->id = $id;
        $this->name = $user->name;
        $this->last_name = $user->last_name;
        $this->phone = $user->phone;
        $this->email = $user->email;
        $this->openModal();
    }
    public function delete($id){
        User::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function save(){
        if (!empty($this->id)) {
            $this->validate([
                'name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique('users', 'email')->ignore($this->id),
                ],
                'phone' => 'nullable|string|max:20',
            ]);
        } else {
            $this->validate([
                'name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => 'required|string|min:6',
                'phone' => 'nullable|string|max:20',
            ]);
        }
        $userData = [
            'name' => $this->name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
        ];

        if (!empty($this->password)) {
            $userData['password'] = bcrypt($this->password);
        }
    
        User::updateOrCreate(['id'=>$this->id], $userData);
        session()->flash('message', $this->id ? 'Registro actualizado con exíto..!!': 'Registro guardado con exíto..!!');
        $this->closeModal();
        $this->clearForm();
    }
}
