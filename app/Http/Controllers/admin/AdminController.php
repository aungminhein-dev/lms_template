<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Validation\ValidationException;
use Throwable;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function userList(Request $request)
    {
        if ($request->ajax()) {
            $query = User::select(['id', 'name', 'email', 'phone', 'date_of_birth', 'created_at']);

            return DataTables::of($query)
                ->addIndexColumn() // adds DT_RowIndex
                ->editColumn('created_at', function ($user) {
                    return Carbon::parse($user->created_at)->format('d-m-Y');
                })
                ->addColumn('action', function (User $user) {
                    $editUrl = route('admin.user.edit', $user->id);
                    $deleteUrl = route('admin.user.delete', $user->id);
                    $csrf = csrf_token();

                    return '
    <div style="text-align: center;">
        <a href="' . $editUrl . '" class="btn btn-sm btn-primary me-1" title="Edit">
            <i class="text-white fa fa-edit"></i>
        </a>

        <form action="' . $deleteUrl . '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure you want to delete this?\');">
            <input type="hidden" name="_token" value="' . $csrf . '">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-sm btn-danger me-1" title="Delete">
                <i class="text-white fa fa-trash"></i>
            </button>
        </form>
    </div>
    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('admin.user.index');
    }



    public function createUser()
    {
        return view('admin.user.create');
    }



    public function storeUser(Request $request)
    {
        try {

            // Validate request data (will throw ValidationException automatically if invalid)
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|string|max:20',
                'date_of_birth' => 'required|date',
                'region' => 'required|string|max:100',
                'township' => 'required|string|max:100',
                'password' => 'required|string|min:6',
            ]);
            $dob = Carbon::createFromFormat('d-M-Y', $request->date_of_birth)->format('Y-m-d');

            // Create user with validated data
            User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'date_of_birth' => $dob,
                'region' => $validated['region'],
                'township' => $validated['township'],
                'password' => Hash::make($validated['password']),
            ]);

            toastr()->success('A user has been created!');
            return to_route('admin.user.index');
        } catch (ValidationException $error) {
            // Let Laravel handle validation errors automatically
            throw $error;
        } catch (\Exception $e) {
            // Log unexpected exceptions
            Log::error('User creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            toastr()->error('Failed to create user. Please try again.');
            return redirect()->back()->withInput();
        }
    }



    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $id,
                'phone' => 'required|string|max:20',
                'date_of_birth' => 'required|date',
                'region' => 'required|string|max:100',
                'township' => 'required|string|max:100',
            ]);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date_of_birth' => $request->date_of_birth,
                'region' => $request->region,
                'township' => $request->township,
            ]);

            toastr()->success('User updated successfully!');
            return to_route('admin.user-list');
        } catch (\Exception $e) {
            Log::error('User update failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            toastr()->error('Failed to update user.');
            return redirect()->back()->withInput();
        }
    }

    public function deleteUser($id)
    {
        try {
            User::findOrFail($id)->delete();
            toastr()->success('A user has been deleted!');
        } catch (\Exception $e) {
            Log::error('User deletion failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            toastr()->error('Failed to delete user.');
        }

        return back();
    }
}
