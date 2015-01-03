<?php
/**
 * Description of ListController
 *
 * @author Ray
 */
namespace Api;
use Module\ListModule;
class ListController extends \BaseController{
    //put your code here
    public function getListByPage($page = 1){
        $list = new ListModule();
        $result = $list->getArticle($page);
        return \Response::json($result, 200);
    }
}
