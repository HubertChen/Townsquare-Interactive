<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;

/** 
 * Handles the creation of news articles.
 */
class CreateController extends AppController {
    /** 
     * A user interface to upload new articles. If POST then we try to save the 
     * uploaded JSON file. 
     */
    public function index() {
        if($this->request->is('post')) { 
            $response = $this->saveFile($this->request->data['file']['tmp_name']);

            $this->set('alertStatus', $response['status']);
            $this->set('alertMessage', $response['message']);
        }
    }

    /**
     * An API to allow uploading news articles without the graphic interface.
     * 
     * @param A properly formatted JSON file with a name of 'file' 
     * @return A JSON response indicating whether the upload was successful
     */
    public function save() {
        $this->viewBuilder()->layout('ajax');
        $this->render(false);

        if(!$this->request->is('post')) {
            echo json_encode(array(
                'status' => 'false', 
                'message' => 'Must use POST'
            ));

            return;
        }

        echo json_encode($this->saveFile($this->request->data['file']['tmp_name']));
    }

    /**
     * Parses a JSON file and saves it into database. We abstract this out to allow multiple 
     * interfaces to save a JSON file
     * 
     * @param $file The location of the JSON file to be saved
     * @param An array indicating the save status and any messages
     */
    private function saveFile($file) {
        $response = array(
            'status' => true,
            'message' => ''
        );

        if(empty($file) || file_get_contents($file) == false) {
            $response['status'] = false;
            $response['message'] = 'Failed to read file';
            return $response;
        }

        $json = json_decode(file_get_contents($file), true);
        if(empty($json)) {
            $response['status'] = false;
            $response['message'] = 'Failed to parse JSON file';
            return $response;
        }

        $articlesTable = TableRegistry::get('Articles');
        $articles = $articlesTable->newEntities($json);

        foreach($articles as $article) {
            $articlesTable->save($article);
        }

        $response['message'] = 'Success';

        return $response;
    }
}
