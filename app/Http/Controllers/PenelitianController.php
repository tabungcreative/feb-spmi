<?php

namespace App\Http\Controllers;

use App\Exceptions\InvariantException;
use App\Helper\AuthUser;
use App\Http\Requests\PenelitianAddRequest;
use App\Http\Requests\PenelitianUpdateRequest;
use App\Models\Penelitian;
use App\Services\PenelitianService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenelitianController extends Controller
{


    private $title = 'Penelitian';

    private PenelitianService $penelitianService;


    public function __construct(PenelitianService $penelitianService)
    {
        $this->penelitianService = $penelitianService;
    }


    public function index(Request $request)
    {
        $owner = AuthUser::user() ?? null;
        $title = $this->title;
        $key = $request->query('key') ?? '';
        $size = $request->query('size') ?? 10;

        if (in_array('admin-spmi', $owner->roles)) {
            $data = $this->penelitianService->listByNidn($owner->name, $key, $size);
        } else {
            $data = $this->penelitianService->list($key, $size);
        }
        return response()->view('penelitian.index', compact('title', 'data'));
    }


    public function create()
    {
        $title = $this->title;
        return response()->view('penelitian.create', compact('title'));
    }

    public function store(PenelitianAddRequest $request)
    {
        $owner = AuthUser::user() ?? null;

        try {
            $this->penelitianService->add($request, $owner->name);
            return response()->redirectTo(route('penelitian.index'))->with('success', 'Berhasil menambah penelitian baru');
        } catch (InvariantException $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function edit($id)
    {
        $penelitian = Penelitian::find($id);
        $title = $this->title;
        return response()->view('penelitian.edit', compact('title', 'penelitian'));
    }


    public function update(PenelitianUpdateRequest $request, $id)
    {
        try {
            $penelitian = $this->penelitianService->update($request, $id);
            return response()->redirectTo(route('penelitian.index'))->with('success', 'Berhasil mengubah penelitian');
        } catch (InvariantException $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->penelitianService->delete($id);
            return response()->redirectTo(route('penelitian.index'))->with('success', 'Berhasil mengubah penelitian');
        } catch (InvariantException $exception) {
            return redirect()->back()->with('error', 'Hapus Gagal');
        }
    }
}
