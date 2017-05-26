@extends('app')

<?php
/**
 * Created by PhpStorm.
 * User: Bruno Souza
 * Date: 11/05/2017
 * Time: 20:45
 */
?>

@section('content')
    <div class="container">
        <h1>Hábitos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($habitos as $hab)
                    <tr>
                        <td>{{$hab->nome}} </td>
                        <td>{{$hab->descricao}} </td>
                        <td>{{$hab->tp_habito}} </td>
                        <td><button class="button">Teste</button> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection