<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Handles a news feed of news article.
 */
class HomeController extends AppController {
    public function index() {}

    /**
     * Displays a single article given an id.
     *
     * @param id The ID of the article to return
     */
    public function article($id) {
        $articlesTable = TableRegistry::get('Articles');
        $article = $articlesTable->find('all', array(
            'conditions' => array(
                'id' => $id
             )
        ));

        $this->set('article', $article->first());
    }

    /**
     * An API to return a list of articles in JSON format order by newest date.
     *
     * @param offset The offset of the query to return.
     * @param limit The amount of articles to return.
     */
    public function getArticles() {
        $offset = $this->request->query('offset');
        $limit = $this->request->query('limit');

        $articlesTable = TableRegistry::get('Articles');
        $articles = $articlesTable->find('all', array(
            'order' => 'date_created desc',
            'limit' => $limit,
            'offset' => $offset
        ));

        $this->viewBuilder()->layout('ajax');
        $this->render(false);
        echo json_encode($articles);
    }
}
