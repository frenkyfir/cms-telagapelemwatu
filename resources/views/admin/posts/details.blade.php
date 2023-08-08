@extends('layouts.user_type.auth')

@section('content')
    <div class="row px-4">
        <div class="container mb-12 ">

            <div class="row">

                <div class="row w-90">
                    <div class="card header p-4">
                        <div class="header mb-2">
                            <h4>Ticket Details</h4>
                        </div>
                        <div class="col">
                            <a href="/showtickets/{{ $ticket->id }}" class="btn bg-gradient-primary btn-sm "
                                type="submit">+&nbsp;
                                Edit</a>
                        </div>
                        <div class="col px-4 mt-3 mb-3">
                            <h6>Number Ticket</h6>
                            <p class="font-weight-bolder">{{ $ticket->number }}</p>
                        </div>
                        <div class="col px-4 mb-3">
                            <h6>Ticket Status</h6>
                            <p class="badge badge-sm bg-gradient-primary">{{ $ticket->status }}</p>
                        </div>
                        <div class="col px-4 mb-3">
                            <h6>Problem Detail</h6>
                            <p class="font-weight-bold">{{ $ticket->problem_detail }}</p>
                        </div>
                        <div class="col px-4 mb-3">
                            <h6>Resolution</h6>
                            <p class="font-weight-bold">{{ $ticket->resolution }}</p>
                        </div>
                        <div class="col px-4 mb-3">
                            <h6>Assigned to</h6>
                            <p class="font-weight-bold">{{ $ticket->assign_to }}</p>
                        </div>
                        <div class="col px-4 mb-3">
                            <h6>Due date</h6>
                            <p class="font-weight-bold">{{ $ticket->duedate }}</p>
                        </div>

                        <div class="col px-4 mb-3">
                            <h6>Created At</h6>
                            <p class="font-weight-bold">{{ $ticket->assigndate }}</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
