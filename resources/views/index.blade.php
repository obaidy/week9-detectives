@extends('common/layout')

@section('content')
<div class="page page-home">
    
    <img src="img/crime-logo.png" alt="" class="logo">
    <h1>World class<br><small>Detective hiring</small></h1>

    <div class="desc">
        Has a crime been commited? Did you find a rich heiress face down in the mansion's swimming pool? Hire a famous detective and the culprit is as good as already behind bars.
    </div>

    <a href="#" class="report">Hire a detective</a>

    <div class="detectives">
        <a href="#">
            <img src="img/holmes.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/poirot.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/marple.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/marlowe.jpg" alt="">
        </a>
        <a href="#">
            <img src="img/columbo.jpg" alt="">
        </a>
    </div>

</div>
@endsection
