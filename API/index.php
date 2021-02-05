<?php

// REQUIRED:
// Token - security token
// Action - API response
// ID - client id
// Value - client info

const TOKEN = 'sjdgfh47h231as56n74m62sdf32b5vc327777';

function isReadyToRun(): bool {
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
    
        return $token == TOKEN;
    } else {
        return false;
    }
}

function API(): void {
    if (isReadyToRun()) {
        
    } else {
        die ('Error when connecting to the API (token error)');
    }
}

API();