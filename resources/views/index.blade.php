@extends("layout.master")
@section("title","Notifiaciones")
@section("content")
@include("modals.alert-modal")
    <section class="section">
        <div class="container">
            
            <div class="field">
                {{Form::label("titulo","Titulo",["class" => "label is-medium"])}}
                <div class="control">
                    {{Form::text("titulo","",["class"=>"input is-primary is-medium", "placeholder"=>"Titulo de la notificacion", "id" => "titulo", "autofocus"])}}
                </div>
            </div>

            <div class="field">
                {{Form::label("mensaje","Mensaje",["class" => "label is-medium"])}}
                <div class="control">
                    {{Form::textarea("mensaje","",["class"=>"textarea is-hovered is-medium", "placeholder"=>"Mensaje de la notificacion", "id" => "mensaje"])}}
                </div>
            </div>

            <div class="field is-grouped">
                <p class="control">
                    <button id="btn_send" class="button is-success">Enviar</button>
                </p>
                <p class="control">
                    <a href="{{route('logout')}}">
                        <button class="button is-danger" id="btn_cancel">
                            Salir
                        </button>
                    </a>
                </p>
            </div>



        </div>
    </section>
@endsection