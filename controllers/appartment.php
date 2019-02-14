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

        $status = array('success' => array(), 'fail' => array());
        if (isset($_POST['submit']) and  isset($_FILES['gallery'])) {

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

            $last_id = $this->getModel()->create($columns, $values);

            for ($i = 0; $i < count($_FILES['gallery']['name']); $i++) {
                //$full_target = self::$DIR . basename($_FILES['gallery']['name'][$i]);
                $ext = pathinfo($_FILES['gallery']['name'][$i], PATHINFO_EXTENSION);
                $size = $_FILES['gallery']['size'][$i];

                if (!in_array($ext, self::$EXTENSIONS)) {
                    $status['fail'][] = 'L\'image : ' . pathinfo($_FILES['gallery']['name'][$i], PATHINFO_FILENAME) . ' est de type ' . strtoupper($ext) . '. Seules les types JPG ou JPEG sont autorisées.';
                }
                if ($size > self::$MAX_SIZE) {
                    $status['fail'][] = 'La taille de l\'image : '.pathinfo($_FILES['gallery']['name'][$i], PATHINFO_FILENAME).' est : '.(floor($size / 1024)).' Ko. Taille maximale autorisé 1 Mo.';
                }
            }

            if (count($status['fail']) === 0) {
                for ($i = 0; $i < count($_FILES['gallery']['name']); $i++) {
                    move_uploaded_file($_FILES['gallery']['tmp_name'][$i], self::$DIR . $serial.$last_id.'-'.($i+1).'.jpg');
                }
                $status['success'][] = 'Apparttement ajouté avec succès.';
            }
        }
        //Always render add page
        $this->render('add', $status);
    }

    private function quote($variable){
        return "'$variable'";
    }

}