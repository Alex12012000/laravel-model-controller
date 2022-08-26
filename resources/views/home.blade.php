@extends('layout/app')

<h1>HomePage</h1>

@foreach ($movie as $singlemovie)
    <h3>{{ $singlemovie->title }}</h3> 
    <span>Original Title: </span>
    <span>{{ $singlemovie->original_title }}</span>   
@endforeach