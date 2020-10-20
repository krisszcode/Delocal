<?php

http_response_code(404);

// tell the user
echo json_encode(array("message" => "not found"));