<?php require_once('connection.php'); ?>

<?php
    $json = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/posts"));
    for($i = 0; $i < count($json); $i++) {
        
        echo "<div>user ID: " . $json[$i]->{'userId'} . "</div>";
        echo "<div>ID: " . $json[$i]->{'id'} . "</div>";
        echo "<div>Title: " . $json[$i]->{'title'} . "</div>";
        echo "<div>Body: " . $json[$i]->{'body'} . "</div>";
        echo "<br />";
        
        echo "<div>INDICE " . $i . "</div>"; 
                
        $id = intval($json[$i]->{'id'});
        $userId = intval($json[$i]->{'userId'});
        $title = $json[$i]->{'title'};
        $body = $json[$i]->{'body'};
        echo "<br />";
        
        $sql = "INSERT INTO Posts(id, title, body, userId) VALUES ($id, '$title', '$body', '$userId')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }  
?>

<?php
    $json = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/comments"));
    for($i = 0; $i < count($json); $i++) {

        echo "<div>INDICE " . $i . "</div>"; 

        $id = intval($json[$i]->{'id'});
        $postId = intval($json[$i]->{'postId'});
        $name = $json[$i]->{'name'};
        $email = $json[$i]->{'email'};
        $body = $json[$i]->{'body'};
        //echo "<div>post ID: " . $json[$i]->{'id'} . "</div>";
        //echo "<div>ID: " . $json[$i]->{'postId'} . "</div>";
        /*
        echo "<div>post ID: " . $postId . "</div>";
        echo "<div>ID: " . $id . "</div>";
        echo "<div>Email: " . $json[$i]->{'email'} . "</div>";
        echo "<div>Body: " . $json[$i]->{'body'} . "</div>";
        */
        echo "<br />";

        //$tipo = gettype($json[$i]->{'email'});
        //echo "<div>TIPO STRING " . $tipo ."</div>";
        //echo $id;
        
        $sql = "INSERT INTO Comments(id, postId, name, email, body) VALUES ($id, $postId, '$name', '$email', '$body')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }  
?>