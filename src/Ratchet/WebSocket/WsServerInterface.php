<?php
namespace Ratchet\WebSocket;

interface WsServerInterface {
    /**
     * If any component in a stack supports a WebSocket sub-protocol return each supported in an array
     * @return array
     * @temporary This method may be removed in future version (note tha twill not break code, just make some code obsolete)
     */
    function getSubProtocols();
}