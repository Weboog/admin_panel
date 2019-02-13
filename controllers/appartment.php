<?php


class Appartment extends Controller
{

    private static $DIR = '../locatia/public/img/gallery/large/';
    private static $EXTENSIONS = array('jpg', 'jpeg');
    private static $MAX_SIZE = 1024000;

    public function index(){
        $this->render('index');
    }

    public function all(){
        $model = $this->getModel();
        $options = array('order_by' => 'created_at', 'sense' => 'desc');
        $model->getAll($options);
    }

    public function get($id){
        $model = $this->getModel();
        $options = array('column' => array('name' => 'id', 'value' => $id), 'order_by' => 'id', 'sense' => 'ASC', 'limit' => array('start' => 0, 'count' => 100));
        $model->getBy($options);
    }

    public function add(){
            $this->render('add');
    }

    public function quote($variable){
        return "'$variable'";
    }

    public function save(){

        $columns = array('serial', 'gallery', 'owner', 'type', 'city', 'zone', 'borough', 'pieces', 'rooms', 'surface', 'price', 'address', 'description', 'external', 'internal', 'conditions');
        $serial = $_POST['city'].$_POST['zone'].$_POST['borough'];
        $gallery = count($_FILES['gallery']['name']);
        $values = array(
            $serial,
            $gallery,
            $_POST['owner'],
            $_POST['type'],
            $_POST['city'],
            $_POST['zone'],
            $_POST['borough'],
            $_POST['pieces'],
            $_POST['rooms'],
            $_POST['surface'],
            $_POST['price'],
            $this->quote($_POST['address']),
            $this->quote($_POST['description']),
            $this->quote($_POST['external']),
            $this->quote($_POST['internal']),
            $this->quote($_POST['conditions']),
            );
        //print_r($values);
        //echo $serial.' ========= '.$gallery;
        //print_r($_POST);
        $last_id = $this->getModel()->create($columns, $values);
        $test = true;
        $status = array('success' => 0, 'fail' => 0);

        for ($i = 0; $i < count($_FILES['gallery']['name']); $i++) {

            $full_target = self::$DIR . basename($_FILES['gallery']['name'][$i]);
            $ext = pathinfo($_FILES['gallery']['name'][$i], PATHINFO_EXTENSION);
            $size = $_FILES['gallery']['size'][$i];
            $tmp_name = $_FILES['gallery']['tmp_name'][$i];

            if (!in_array($ext, self::$EXTENSIONS)) {
                $test = false;
            }
            if ($size > self::$MAX_SIZE) {
                $test = false;
            }
            if (file_exists($full_target)) {
                $test = false;
            }
            if ($test === true) {
                move_uploaded_file($tmp_name, self::$DIR . $serial.$last_id.'-'.($i+1).'.jpg');
                $status['success']++;
            }else{
                $status['fail']++;
            }
        }
            echo json_encode($status);
    }
}