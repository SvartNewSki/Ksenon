@extends('layouts.main')
@section('content')
<div class="container">
   <button id='open-modal-btn'>Open</button>
</div>
   <div class="modal" id="my-modal">
      <div class="modal_box">
         <button class="close" id="close-modal-btn">close</button>
         <h2>Модальное окно</h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, autem!</p>
      </div>
   </div>
@endsection
