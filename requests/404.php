<?php

// set response code
http_response_code(404);

echo json_encode(array("message" => "not found"));