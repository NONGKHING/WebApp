@extends('layouts.backend.master')

@section('content')

@livewire('edituser',['id' => $id])

@endsection
