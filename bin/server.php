<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

    require dirname(__DIR__) . '/vendor/autoload.php';
 
    $chat = new Chat();
    
    $server = IoServer::factory(

        
        new HttpServer(
            new WsServer(
                $chat
            )
        ),
        8080,'0.0.0.0'
        
    );
    
    
    $server->loop->addPeriodicTimer(0.8, function () use ($chat) {
        // if (!$chat->loop) return;
        $arrayID = [2,3,4];

            // array of id users
        
        //print_r($chat->getClients()); 
       
        //echo gettype($chat->getClientID());
        //print_r($chat->clients );
        foreach($chat->clients as $rid=>$client) {
            
           // echo gettype($client);
           // print_r($client);
           //print_r( $client);
            
           
            // foreach($arrayID as $arrid){
            //     if( $chat->array[$rid]===$arrid){
                  
            //         $client->send('hi');
            //     }

            // }

            if (in_array($chat->array[$rid]->userID, $arrayID)) {
                $client->send('hi');
            }

        
            

         }
            // gettype($chat->getClients());
        // foreach($chat->getClients() as $client) {
        //     //echo $client->resourceId;
        //     // echo $chat->getClientID();
            
        //     // foreach($chat->array as $key=>$value) {
        //     //     if ($key == 1 && $client->resourceId == $value) {
                    
        //     //     }
        //     // }
        // //     foreach($arrayID as $id){
        // //     if( $chat->getClientID()===$id){
               
        // //     }
        // // }
            
        // //$client->send('hi');
        // }
    });
 
    $server->run();

 