<?php
// ini adalah helper
function response_helper($status, $message, $data)
{
    $response = [
        'status' => $status,
        'message' => $message,
        'data' => $data
    ];

    return $response;
}