<?php

class ServerData
{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Movie //////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Normal fetchData limit
    public function movie1()
    {
        $movie = $this->connection->prepare("SELECT * FROM movie ");
        $movie->execute();
        $movie = $movie->fetchAll(PDO::FETCH_ASSOC);
        echo JSON_encode($movie);
    }

    public function movie2()
    {
        $movie = $this->connection->prepare("SELECT * FROM movie ORDER BY id DESC limit 8 ");
        $movie->execute();
        $movie = $movie->fetchAll(PDO::FETCH_ASSOC);
        echo JSON_encode($movie);
    }

    // Normal Page View Just Pic and name
    public function pageviewmovie()
    {

        $pageviewmovie = $this->connection->prepare("SELECT * FROM pageviewmovie ORDER BY id");
        $pageviewmovie->execute();
        $pageviewmovie = $pageviewmovie->fetchAll(PDO::FETCH_ASSOC);
        echo Json_encode($pageviewmovie);
    }

    // Normal fetchData limit
    public function movieall()
    {
        $serialall = $this->connection->prepare("SELECT * FROM movie ORDER BY id ");
        $serialall->execute();
        $serialall = $serialall->fetchAll(PDO::FETCH_ASSOC);

        echo JSON_encode($serialall);
    }

// fetchData With Id
    public function getMovieData($data)
    {
        $id = array_key_exists('id', $data) ? $data['id'] : 0;
        $product_data = $this->connection->prepare("SELECT * FROM movie WHERE id=?");
        $product_data->execute([$id]);
        $product_data = $product_data->fetch(PDO::FETCH_ASSOC);
        echo json_encode($product_data);
    }

//getting data with id for pic
    public function getmoviePics($data)
    {

        $product_id = array_key_exists('product_id', $data) ? $data['product_id'] : 0;
        $getmoviePics = $this->connection->prepare("SELECT * FROM moviepics WHERE product_id=? ORDER BY id limit 8");
        $getmoviePics->execute([$product_id]);
        $getmoviePics = $getmoviePics->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($getmoviePics);

    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Serial /////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Normal fetchData limit
    public function serial1()
    {
        $serial = $this->connection->prepare("SELECT * FROM serial");
        $serial->execute();
        $serial = $serial->fetchAll(PDO::FETCH_ASSOC);
        echo JSON_encode($serial);
    }  // Normal fetchData limit


// Normal fetchData
    public function serial2()
    {
        $serial = $this->connection->prepare("SELECT * FROM serial ORDER BY id DESC limit 8 ");
        $serial->execute();
        $serial = $serial->fetchAll(PDO::FETCH_ASSOC);

        echo JSON_encode($serial);
    }


    public function pageviewserial()
    {

        $pageviewserial = $this->connection->prepare("SELECT * FROM pageviewserial ORDER BY id");
        $pageviewserial->execute();
        $pageviewserial = $pageviewserial->fetchAll(PDO::FETCH_ASSOC);
        echo Json_encode($pageviewserial);
    }


// Normal fetchData limit
    public function serialall()
    {
        $serialall = $this->connection->prepare("SELECT * FROM serial ORDER BY id ");
        $serialall->execute();
        $serialall = $serialall->fetchAll(PDO::FETCH_ASSOC);

        echo JSON_encode($serialall);
    }




    public function getSerialData($data)
    {
        $id = array_key_exists('id', $data) ? $data['id'] : 0;
        $product_data = $this->connection->prepare("SELECT * FROM serial WHERE id=?");
        $product_data->execute([$id]);
        $product_data = $product_data->fetch(PDO::FETCH_ASSOC);
        echo json_encode($product_data);
    }


//getting data with id for pic
    public function getserialPics($data)
    {

        $product_id = array_key_exists('product_id', $data) ? $data['product_id'] : 0;
        $getserialPics = $this->connection->prepare("SELECT * FROM serialpics WHERE product_id=? ORDER BY id limit 8");
        $getserialPics->execute([$product_id]);
        $getserialPics = $getserialPics->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($getserialPics);

    }





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Game ///////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Normal fetchData limit
    public function game1()
    {
        $game = $this->connection->prepare("SELECT * FROM game");
        $game->execute();
        $game = $game->fetchAll(PDO::FETCH_ASSOC);
        echo JSON_encode($game);
    }  // Normal fetchData limit


// Normal fetchData
    public function game2()
    {
        $game = $this->connection->prepare("SELECT * FROM game ORDER BY id DESC limit 8 ");
        $game->execute();
        $game = $game->fetchAll(PDO::FETCH_ASSOC);

        echo JSON_encode($game);
    }


    // Normal fetchData limit
    public function gameall()
    {
        $gameall = $this->connection->prepare("SELECT * FROM game ORDER BY id ");
        $gameall->execute();
        $gameall = $gameall->fetchAll(PDO::FETCH_ASSOC);

        echo JSON_encode($gameall);
    }

// fetchData With Id
    public function getgameData($data)
    {
        $id = array_key_exists('id', $data) ? $data['id'] : 0;
        $product_data = $this->connection->prepare("SELECT * FROM game WHERE id=?");
        $product_data->execute([$id]);
        $product_data = $product_data->fetch(PDO::FETCH_ASSOC);
        echo json_encode($product_data);
    }


//getting data with id for pic
    public function getgamePics($data)
    {
        $product_id = array_key_exists('product_id', $data) ? $data['product_id'] : 0;
        $getgamePics = $this->connection->prepare("SELECT * FROM gamepics WHERE product_id=? ORDER BY id limit 8");
        $getgamePics->execute([$product_id]);
        $getgamePics = $getgamePics->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($getgamePics);

    }

    public function pageviewgame()
    {

        $pageviewgame = $this->connection->prepare("SELECT * FROM pageviewgame ORDER BY id");
        $pageviewgame->execute();
        $pageviewgame = $pageviewgame->fetchAll(PDO::FETCH_ASSOC);
        echo Json_encode($pageviewgame);
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Other ///////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Normal fetchData
    public function collection1()
    {
        $movie = $this->connection->prepare("SELECT * FROM collection ");
        $movie->execute();
        $movie = $movie->fetchAll(PDO::FETCH_ASSOC);
        echo JSON_encode($movie);
    }


    // Normal fetchData
    public function collection2()
    {
        $movie = $this->connection->prepare("SELECT * FROM collection ORDER BY id DESC limit 8 ");
        $movie->execute();
        $movie = $movie->fetchAll(PDO::FETCH_ASSOC);
        echo JSON_encode($movie);
    }


    // Normal fetchData
    public function animation1()
    {

        $animation = $this->connection->prepare("SELECT * FROM animation ORDER BY id limit 8");
        $animation->execute();
        $animation = $animation->fetchAll(PDO::FETCH_ASSOC);

        echo JSON_encode($animation);
    }


    // Normal fetchData
    public function animation2()
    {

        $animation = $this->connection->prepare("SELECT * FROM animation ORDER BY id DESC limit 8");
        $animation->execute();
        $animation = $animation->fetchAll(PDO::FETCH_ASSOC);

        echo JSON_encode($animation);
    }

    // Normal fetchData
    public function stars()
    {
        $stars = $this->connection->prepare("SELECT * FROM stars ORDER BY id ");
        $stars->execute();
        $stars = $stars->fetchAll(PDO::FETCH_ASSOC);
        // echo json_encode($movie);


        echo JSON_encode($stars);
    }




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////// Main ///////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //get comment with id with to table
    public function get_comment($data)
    {

        $comment_id = array_key_exists('comment_id', $data) ? $data['comment_id'] : 0;
        $comment = $this->connection->prepare("SELECT * FROM comment WHERE comment_id=? ORDER BY id");
        $comment->execute([$comment_id]);
        $comment = $comment->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($comment);

    }

    public function add_comment($data)
    {
        $comment_id = array_key_exists('comment_id', $data) ? $data['comment_id'] : 0;
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['comment'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            $time = time();
            $new_comment = $this->connection->prepare('INSERT INTO `comment` (
                       `username`,`email`,`content`,`comment_id`,`parent_id`,`status`,`time`
                       ) VALUES (?, ?, ?, ?, 1, 1,?);');
            $new_comment->execute([$username, $email, $comment, $comment_id, $time]);
            return 'نظر با موفقیت ثبت شد';
        }
    }


    public function register_user()
    {
        $result = array();
        require_once 'Token.php';

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

            $username = $_POST['username'];

            $email = $_POST['email'];
            $password = $_POST['password'];
            $active_code = rand(9999, 100000);
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $user = $this->connection->prepare('INSERT INTO `users` 
                  (`username`,  `email`, `status`, `active_code`, `password`)
                     VALUES ( ?, ?,  ?, ?, ?);');

            if ($user->execute([$username, $email, $active_code, 0, $password_hash])) {
                $result['register'] = $this->connection->lastInsertId();
            } else {
                $result['error'] = 'ok';
            }
        } else {

            $result['error'] = 'ok';
        }


        echo json_encode($result);
    }
}


//$user = $this->connection->prepare('UPDATE `users` SET
//                   `username`=?, `mobile`=?, `email`=?, `active_code`= ? , `password`=?  WHERE `users`.`id` = ?;');
//
//if ($user->execute([$username, $mobile, $email, $active_code, $password_hash, $checkUser['id'],])) {
//    $result['register'] = $checkUser['id'];
//} else {
//    $result['error'] = 'Error in Enter ';
//}

