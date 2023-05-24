@extends('layouts.app')

@section('content')
    <section class="masthead">

        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Your Favorite place to Read a Book and have a Coffee</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">I want to remind you that while you are judging a book, the book is also
                        judging you! <br><em> (Stephen King)</em></p>
                    <a class="btn btn-primary btn-xl" href="{{ route('books.index') }}">Find Out More</a>
                </div>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, provident!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis itaque, consequuntur molestias nihil quisquam
            optio earum. Ea, repudiandae odit! Eum animi corporis sequi iure quas delectus et, beatae labore rem, repellat
            officiis est libero exercitationem ut sit possimus tempore, pariatur culpa alias consequuntur. Quibusdam totam
            tempore expedita nemo harum ipsum.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quidem consectetur in illum pariatur rerum ut,
            ipsam similique explicabo mollitia.</p>
    </section>
@endsection
