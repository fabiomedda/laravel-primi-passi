<!-- 
Le istruzioni:
Creiamo un layout base da estendere in due pagine del nostro sito.
Nel layout includiamo un header e un footer
-->

@extends('layouts.app')

@section('main')
<h1 class="container">Home</h1>
<div class="container" style="text-align: center;">
    <img src="https://ilbolive.unipd.it/sites/default/files/styles/style_1120x630/public/2020-05/natura-alberi.jpg?itok=0-KtruPL" alt="">
</div>
@endsection