<?php

function delete_form($routeParams, $label = 'Delete')
{
    $form = Form::open(['method' => 'DELETE', 'action' => $routeParams ]);

    $form .= Form::submit('Устгах', ['class'=>'btn btn-danger ']);

    return $form .= Form::close();
}