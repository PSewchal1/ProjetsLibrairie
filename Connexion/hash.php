<?php

$password = $this->input->post("password");

$password = "password" = password_hash($password, PASSWORD_DEFAULT);
