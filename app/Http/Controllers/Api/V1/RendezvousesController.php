<?php

namespace App\Http\Controllers\Api\V1;

use App\Rendezvous;
use App\Http\Controllers\Controller;
use App\Http\Resources\Rendezvous as RendezvousResource;
use App\Http\Requests\Admin\StoreRendezvousesRequest;
use App\Http\Requests\Admin\UpdateRendezvousesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class RendezvousesController extends Controller
{
    public function index()
    {
        

        return new RendezvousResource(Rendezvous::with(['client'])->get());
    }

    public function show($id)
    {
        if (Gate::denies('rendezvous_view')) {
            return abort(401);
        }

        $rendezvous = Rendezvous::with(['client'])->findOrFail($id);

        return new RendezvousResource($rendezvous);
    }

    public function store(StoreRendezvousesRequest $request)
    {
        if (Gate::denies('rendezvous_create')) {
            return abort(401);
        }

        $rendezvous = Rendezvous::create($request->all());
        
        

        return (new RendezvousResource($rendezvous))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateRendezvousesRequest $request, $id)
    {
        if (Gate::denies('rendezvous_edit')) {
            return abort(401);
        }

        $rendezvous = Rendezvous::findOrFail($id);
        $rendezvous->update($request->all());
        
        
        

        return (new RendezvousResource($rendezvous))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('rendezvous_delete')) {
            return abort(401);
        }

        $rendezvous = Rendezvous::findOrFail($id);
        $rendezvous->delete();

        return response(null, 204);
    }
}
